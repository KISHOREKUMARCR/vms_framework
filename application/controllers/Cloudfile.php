<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    use Google\Client;
    use Google\Service\Drive;
    class Cloudfile extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Admin_model');
        $this->load->library('session');
        require APPPATH . 'libraries/vendor/autoload.php';
    }

    public function getService($scopes,$user_drive_data)
    {
        $type = 'service_account';
        $private_key = $user_drive_data['private_key'];
        $client_email = $user_drive_data['client_email'];
        $client_id = $user_drive_data['cloud_client_id'];

        $client = new Client();
        
        $client->setAuthConfig([
        "type" => $type,
        "private_key" => str_replace(["\n", '\n'], "\n", $private_key),
        "client_email" => $client_email,
        "client_id" => $client_id
        ]);


        $client->addScope($scopes);
        return new Drive($client);
    }


    public function index() {

            $all_users_data = $this->Admin_model->get_user_details();
            foreach ($all_users_data as $user) {
                $client_device_number = $user['device_number'];
                $user_Primaryid = $user['id'];

                // Get user drive data
                $user_drive_data = $this->User_model->getVmsDriveData($user_Primaryid);
                $folderId = $user_drive_data['cloud_folder_id'];
                // $keyFilePath = APPPATH . 'service_key/' . $user_drive_data['cloud_servicekey_path'];

                $this->retrieveFileUrls($client_device_number, $folderId,$user_drive_data);
            }
    }

    function retrieveFileUrls($client_device_number, $folderId,$user_drive_data)
    {
                $scope = 'https://www.googleapis.com/auth/drive.metadata.readonly';
                $fileExists_row = false; // Variable to track whether any file exists
                try {
                      $service = $this->getService($scope,$user_drive_data);

                      $optParams = [
                          'pageSize' => 1000,
                          'fields' => 'nextPageToken, files(id, name)',
                          'q' => "'$folderId' in parents",
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
                          $file_url = 'https://drive.google.com/file/d/' . $file_id . '/preview';
                          $cloud_data = array(
                          'file_id' => $file_id,
                          'KIT_ID' => $client_device_number,
                          'file_name' => $file_name,
                          'start_time' => $filename_without_ext,
                          'file_url' => $file_url
                          );
                          $Cloudfile_result = $this->User_model->cloudfileExist($file_id);

                          if ($Cloudfile_result == 0) {
                              $this->User_model->CloudDataInsert($cloud_data);
                          } else {
                              $fileExists_row = true; // Variable to track whether any file exists
                          }

                      }
                  if ($fileExists_row) {
                      echo "Files already exist.";
                  }
                  else{
                    echo "File inserted:";
                  }
                }catch (Google\Service\Exception $error) {
                echo 'An error occurred: ' . $error->getMessage() . PHP_EOL;
                }
    }

}
?>
