<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>F</b>AS</span>
      <span class="logo-lg"><b>FAS</b> Kota Batu</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                    <a href="#">
                      <div class="pull-left">
                        
                      </div>
                      
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                
               
                 
                  
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <li class="dropdown notifications-menu">       
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Kelompok <?php echo $this->session->userdata('username');?>
                  <small>Peserta Lomba Festival Anak Sholeh</small>
                </p>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"><?php if($this->session->userdata('role') == 1 ) echo  'Jumlah Peserta <br>(28)'; 
                                      elseif ($this->session->userdata('role') == 2) {
                                        echo  'Jumlah Peserta <br>(28)';
                                      }?>
                      </a>
                  </div>
                  <div class="col-xs-4 text-center">
                     <a href="#"><?php if($this->session->userdata('role') == 1 ) echo  'Jumlah Lomba <br>(28)'; 
                                      elseif ($this->session->userdata('role') == 2) {
                                        echo  '';
                                      }?>
                      </a>
                    
                  </div>
                  <div class="col-xs-4 text-center">
                     <a href="#"><?php if($this->session->userdata('role') == 1 ) echo  'Jumlah TPQ <br>(28)';
                                      elseif ($this->session->userdata('role') == 2) {
                                        echo  'Jumlah Lomba <br>(28)';
                                      }?>
                      </a>
                  </div>
                </div>
              </li>
              <li class="user-footer">
               <!--  <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php if($this->session->userdata('role') == 1) { ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
  
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
         
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Table Akun</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_akun"><i class="fa fa-circle-o"></i>Tambah Akun</a>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Table Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_lomba"><i class="fa fa-circle-o"></i> Tambah Lomba</a></li>
          </ul>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Table Peserta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_peserta"><i class="fa fa-circle-o"></i>Tambah Peserta</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Table Peserta Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_peserta_lomba"><i class="fa fa-circle-o"></i>Tambah Peserta lomba</a></li>
            <li><a href="daftar_peserta_lomba"><i class="fa fa-circle-o"></i>Daftar Peserta lomba</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Table TPQ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin_tpq"><i class="fa fa-circle-o"></i>Tambah TPQ</a></li>
          </ul>
        </li>
        
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Belum Daftar Ulang</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Telah Daftar Ulang</span></a></li>
      </ul>
    </section>
  </aside>
  
  <?php }else{ ?>

   <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
  
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
         
        </li>
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tambah Peserta Lomba</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pendaftaran_user"><i class="fa fa-circle-o"></i>Tambah Peserta lomba</a></li>
          </ul>
        </li> 
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Belum Daftar Ulang</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Telah Daftar Ulang</span></a></li>
      </ul>
    </section>
  </aside>

  <?php } ?>