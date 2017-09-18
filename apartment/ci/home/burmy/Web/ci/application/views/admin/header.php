

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
                <a class="navbar-brand" href="index.html" font="#000000"><center><h4>PERSATUAN PENDUDUK TAMAN WILAYAH SELAYANG</h4></center></a>
            </div>
            <!-- /.navbar-header -->
           
            <ul class="nav navbar-top-links navbar-right">
                
          
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    
                        <li><a href="<?php echo site_url('Register/upd8') ?>"><i class="fa fa-gear fa-fw"></i>Kemaskini</a>
                         <!--<button class="btn btn-default" data-toggle="modal" data-target="#search" type="submit">-->
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Carian Pengguna<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Searchx/pagecarian') ?>">Carian</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i>Bayaran<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo site_url('Payment/viewpayments') ?>">Bayaran</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Payment/jumlah') ?>">Jumlah pembayar</a>
                                    </li>
                                      <li>
                                        <a href="<?php echo site_url('Register/payment') ?>">Bayaran Manual</a>
                                    </li>
                                   
                                     <li>
                                        <a href="<?php echo site_url('Bajet/bajetshow') ?>">Bajet Semasa <span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                                 <li>
                                                <a href="<?php echo site_url('Bajet/uploadbajet') ?>">Tambahan Bajet (Debit)</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('Bajet/uploadcost') ?>">Penggunaan Bajet (Kredit)</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('Bajet/showbajet') ?>">Jumlah keseluruhan Bajet </a>
                                            </li>
                                 </ul>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Aktiviti<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('Register/activity') ?>">Lihat aktiviti</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Announcement/view') ?>">Tambah pengumuman</a>
                                </li>
                               
                            </ul>
                        </li>
                       <li>
                                        <a href="<?php echo site_url('Aduan/viewAduan') ?>"><i class="fa fa-thumb-tack fa-fw"></i>Lihat Aduan</a>
                                    </li>
                        <li>
                            <a href="<?php echo site_url('Carta/carta_admin') ?>"><i class="fa fa-sitemap fa-fw"></i> Carta Organisasi</a>
                          
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>



    
 