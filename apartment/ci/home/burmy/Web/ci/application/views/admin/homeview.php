<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apartment</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php 
	    $data['log_out']= "component/component_logout";
		$this->load->view('admin/header', $data);


?>
       <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                     <center>
	 <img src="<?php echo base_url();?>image/header1.jpg" alt="Logo" style="width:600px;height:200px;">
    </center>
                    
                    
                        <h3 class="page-header">Selamat Datang "Admin"</h3>
                        
                        
                       <div class="col-lg-12 "> 
                        
                        <div class="col-lg-4 col-md-6">
                        <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                            
                            
                                <div class="col-xs-3">
                                    <i class="fa fa-sign-in fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $this->session->userdata('user'); ?></div>
                                    <div>Daftar bulan ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('Searchx/pagecarian') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Paparan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6">
                <br>
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $this->session->userdata('pay'); ?></div>
                                    <div>Bayar bulan ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('Payment/jumlah') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Paparan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6">
                 <br>
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-thumb-tack fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $this->session->userdata('aduan'); ?></div>
                                    <div>Aduan bulan ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('Aduan/viewAduan') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Paparan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
                    
                        <div class="panel panel-warning">
                          <div class="panel-heading"><i class="fa fa-th"></i><i class="fa fa-check-circle"></i><i class="fa fa-th"></i></div>
                          <div class="panel-body">
                          
                          
                                  <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        
                                </div></div></div>
                          
                          </div>
                        </div>
                        </div>
                    
                    
                    
                    </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->    
         
            
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
