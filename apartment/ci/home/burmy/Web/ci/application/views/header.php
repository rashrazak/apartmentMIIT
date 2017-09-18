  
    <div id="wrapper">
    
    

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Taman Wilayah Selayang Apartment Management System </a>
                	
		
                
            </div>
            <!-- /.navbar-header -->
                  
                         
              
            <ul class="nav navbar-top-links navbar-right">
                    
                  
                    
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                        
                        <li><a href="<?php echo site_url('Register/upd8') ?>"><i class="fa fa-gear fa-fw"></i>Kemaskini</a>
                        </li>
                        <li class="divider"></li>
                        <li><center><?php $this->load->view($log_out); ?></center>
                        
                        
                        </li>
                     
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                               <center><b><?php echo date("d"); ?> || <?php echo date("M"); ?> || <?php echo date("Y"); ?>   </b></center>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('Register/login') ?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Register/payment') ?>"><i class="fa fa-table fa-fw"></i>Rujukan Bayaran</a>
                        </li>
                         <li>
                            <a href="<?php echo site_url('Register/payment2') ?>"><i class="fa fa-check-square fa-fw"></i>Bayaran Lama</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Register/activity') ?>"><i class="fa fa-edit fa-fw"></i> Aktiviti</a>
                        </li>
                       <li>
                            <a href="<?php echo site_url('Aduan/insertAduan') ?>"><i class="fa fa-thumb-tack fa-fw"></i> Aduan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Carta/carta2') ?>"><i class="fa fa-sitemap fa-fw"></i> Carta Organisasi</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>



  
