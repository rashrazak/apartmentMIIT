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
<?php  foreach ($payment as $object):                 
                                           
                                        	
                                        	?>
         <div id="wrapper">

        

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                               
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="disabled">
                            <a href="" class="active"><i class="fa fa-male fa-fw"></i> Carian Pengguna</a>
                        </li>
                       
                        <li >
                            <a href="#"  value="Back" onClick="history.go(-1);return true; "><i class="fa fa-chevron-left fa-fw"></i> Back</a>
                        </li>
                       
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div class="well col-lg-8"> 
            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
        </div>
                            <!-- /input-group -->
            <?php 
                
                	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); 
                      
                                        	echo form_open('Search/upd8',$attributes);
                
            ?>
            
            
         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"><br><br>
                    <div class="col-md-12 col-md-offset-1">
                            <div class="panel panel-primary">
                              <div class="panel-heading"><i class="fa fa-th-list fa-fw"></i>Kemaskini Aktiviti</div>
                              <div class="panel-body">
                                <label>User ID :<?php echo $object->t2id; ?> </label>
                                 <label>Block :<?php echo $object->t2block; ?> - <?php echo $object->t2floor; ?> - <?php echo $object->t2houseno; ?> </label>
                                <div class="col-md-8 col-md-offset-1 ">
                                    
                                    <br> <label>Nama pertama</label>
                                    <input class="form-control" value="<?php echo $object->t2fname; ?>" type="text" name="fname">
        
                                     <br><label>Nama kedua</label>
                                    <input class="form-control" value="<?php echo $object->t2binlname; ?>" type="text" name="binlname">
                                    
                                    <br><label>Tarikh</label>
                                     <input class="form-control" value="<?php echo $object->tarikh; ?>" type="text" name="tarikh">
                             
                                    <br><label>Catatan</label>
                                   
                             
                                    <input type="hidden" name="id" value="<?php echo $object->t2id; ?>" />
                                    </div>
                                   
                              </div>
                               <div class="panel-footer">
                               
                                    	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn-lg btn-danger' , 						
                            						'name'=>'submit',
                            						'value' => 'Update',
                            					
                            
                            					);
                            
                            			 ?>	
                            			<?php echo form_submit($data3); ?>
                            			 <?php echo form_close(); ?>  
                            			 
                            			
                       
                            		
                            			<a class="btn-lg btn-info" href="<?php echo site_url("Search/deleteUser/".$object->t2id); ?>">Delete</a>
                                           
                                           
                                            
                                          
                               </div>
                            </div>
                       <?php endforeach; ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>


   
                     

              
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