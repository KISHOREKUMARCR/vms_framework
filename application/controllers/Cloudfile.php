<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    use Google\Client;
    use Google\Service\Drive;
    class Cloudfile extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        require APPPATH . 'libraries/vendor/autoload.php';
    }

    public function getService($scopes, $keyFilePath)
    {
        $client = new Client();
        $client->setAuthConfig($keyFilePath);
        $client->addScope($scopes);
        return new Drive($client);
    }
    public function index(){
        $user_data = $this->session->userdata('user_data');
        $client_device_number = $user_data->device_number;
        $user_Primaryid=$user_data->id;
        $user_drive_data = $this->User_model->getVmsDriveData($user_Primaryid);
        $folderId= $user_drive_data['cloud_folder_id'];
        $keyFilePath= $user_drive_data['cloud_servicekey_path'];

        $keyFilePath=APPPATH .'service_key/'.$keyFilePath;
        $scope = 'https://www.googleapis.com/auth/drive.metadata.readonly';
        try{

              $service = $this->getService($scope, $keyFilePath);
              $optParams = [
                  'pageSize' => 1000,
                  'fields' => 'nextPageToken, files(id, name)',
                  'q' => "'$folderId' in parents", // This filters files that are in the specified folder
              ];
              $results = $service->files->listFiles($optParams);
              $items = $results->getFiles();

              if (empty($items)) {
                  echo 'No files found in the folder.' . PHP_EOL;
                  return;
              }

              foreach ($items as $item) {

                  $file_name = $item->getName();
                  $file_id = $item->getId();
                  $filename_without_ext = substr($file_name, 0, strrpos($file_name, "."));

                  // Generate the file URL
                  $file_url = 'https://drive.google.com/file/d/' . $file_id . '/preview';
                  $cloud_data=array(
                    'file_id'=>  $file_id,
                    'KIT_ID'=> $client_device_number,
                    'file_name'=>  $file_name ,
                    'start_time'=>$filename_without_ext,
                    'file_url'=>$file_url
                  );

                  $Cloudfile_result=$this->User_model->cloudfileExist($file_id);
                  if ($Cloudfile_result==0){
                      $this->User_model->CloudDataInsert($cloud_data);
                  }
              }
        }
        catch (Google\Service\Exception $error) {
            // Handle errors from Drive API.
            echo 'An error occurred: ' . $error->getMessage() . PHP_EOL;
        }
    }
}
?>
