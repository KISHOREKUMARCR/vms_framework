<?php  $user_data = $this->session->userdata('user_data');?>
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-fluid">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)"><i class="bx bx-menu bx-sm"></i></a>
                    </div>
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item me-2 me-xl-0"> <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);"><i class="bx bx-sm"></i></a></li>
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"><div class="avatar avatar-online">
                              <img src="<?php echo base_url();?>assets/img/upload_image/<?php echo $user_data->profile; ?>" alt class="rounded-circle" /></div></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>user_profile">
                                    <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                    <img src="<?php echo base_url();?>assets/img/upload_image/<?php echo $user_data->profile; ?>"class="rounded-circle" />
                                    </div>
                                    </div>
                                    <div class="flex-grow-1">
                                    <span class="fw-semibold d-block lh-1">
                                      <?php  echo  $user_data->username; ?></span>
                                    <small>Client</small>
                                  </div>
                                    </div></a>
                                </li>
                                <li><div class="dropdown-divider"></div></li>
                                <li> <a class="dropdown-item" href="<?php echo base_url();?>user_profile"><i class="bx bx-user me-2"></i><span class="align-middle">My Profile</span></a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>edit_info"><i class="bx bx-cog me-2"></i><span class="align-middle">Settings</span></a></li>


                                <li><a class="dropdown-item" href="<?php echo base_url();?>change_pass"><i class="bx bx-lock me-2"></i><span class="align-middle">Change Password</span></a></li>


                                <li><div class="dropdown-divider"></div></li>
                                <li><div class="dropdown-divider"></div> </li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>user/logout1" ><i class="bx bx-power-off me-2"></i><span class="align-middle">Log Out</span></a></li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </div>
            </nav>
