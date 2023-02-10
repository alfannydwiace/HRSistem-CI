        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                        <?php 
                        $id = $this->session->userdata('user_login_id');
                        $basicinfo = $this->employee_model->GetBasic($id); 
                        ?>                
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $basicinfo->em_image ?>" alt="user" />
                        <!-- this is blinking heartbit-->
                        <!-- <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div> -->
                    </div>

                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5><?php echo $basicinfo->first_name.' '.$basicinfo->last_name; ?></h5>
                        <a href="<?php echo base_url(); ?>settings/Settings" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="<?php echo base_url(); ?>login/logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a href="<?php echo base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($basicinfo->em_id); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Karyawan </span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu">Keluar </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> Liburan </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmApplication"> Leave Application </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmLeavesheet"> Leave Sheet </a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Projects </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects">Projects </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> Task List </a></li>
                                <!--<li><a href="<?php #echo base_url(); ?>Projects/All_Tasks"> Field Visit</a></li>-->
                            </ul>
                        </li>                                                                       
                        <?php } else { ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu">Organisasi </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>organization/Department">Departemen </a></li>
                                <li><a href="<?php echo base_url();?>organization/Designation">Jabatan</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Karyawan </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>employee/Employees">Karyawan </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Disciplinary">Kedisiplinan/Tata Tertib </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Inactive_Employee">Pengguna tidak aktif </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Kehadiran </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance">Daftar kehadiran </a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Save_Attendance">Tambah kehadiran </a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance_Report">Laporan kehadiran </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-off"></i><span class="hide-menu">Libur </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> Hari Libur </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/leavetypes"> Tipe Libur</a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Application"> Aplikasi Libur </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Earnedleave"> Mendapatkan Libur </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Leave_report"> Laporan </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu">Project </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects">Projects </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> Daftar Tugas </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/Field_visit"> Kunjungan Lapangan</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Gaji </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!--<li><a href="<?php #echo base_url(); ?>Payroll/Salary_Type"> Payroll Type </a></li>-->
                                <li><a href="<?php echo base_url(); ?>Payroll/Salary_List"> Daftar Gaji </a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Generate_salary"> Buat Slip Gaji </a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Payslip_Report"> Laporan Slip Gaji </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="hide-menu">Pinjaman </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Loan/View"> Memberikan pinjaman </a></li>
                                <li><a href="<?php echo base_url(); ?>Loan/installment"> Angsuran Pinjaman</a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">Aset </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Logistice/Assets_Category"> Kategory aset </a></li>
                                <li><a href="<?php echo base_url(); ?>Logistice/All_Assets"> Daftar Asset </a></li>
                                <!--<li><a href="<?php #echo base_url(); ?>Logistice/View"> Logistic Support List </a></li>-->
                                <li><a href="<?php echo base_url(); ?>Logistice/logistic_support"> Logistik support </a></li>
                            </ul>
                        </li>
                        
                        <li> <a href="<?php echo base_url()?>notice/All_notice" ><i class="mdi mdi-clipboard"></i><span class="hide-menu">Pemberitahuan <span class="hide-menu"></a></li>
                        <li> <a href="<?php echo base_url(); ?>settings/Settings" ><i class="mdi mdi-settings"></i><span class="hide-menu">Pengaturan <span class="hide-menu"></a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>