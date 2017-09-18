
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
<?php  foreach ($results as $object):                 
                                         
                                        
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
                            <a href="" class="active"><i class="fa fa-male fa-fw"></i> Update Profile</a>
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

            <?php 
                
                	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); 
                      
                                        	echo form_open('Viewuser/upd8',$attributes);
                
            ?>
            
            
         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"><br><br>
                    <div class="col-md-8 col-md-offset-1">
                            <div class="panel panel-primary">
                              <div class="panel-heading"><i class="fa fa-th-list fa-fw"></i> Update your profile here <?php   echo $object->fname;?>!</div>
                              <div class="panel-body">
                                
                                <div class="col-md-10 col-md-offset-1 ">
                                     <label>First Name</label>
                                    <input class="form-control" value="<?php echo $object->fname; ?>" type="text" name="fname">
        
                                     <br><label>Last Name</label>
                                    <input class="form-control" value="<?php echo $object->binlname; ?>" type="text" name="lname">
                                    
                                    <br><label>IC Peribadi / Passport</label>
                                     <input class="form-control" value="<?php echo $object->icpp; ?>" type="text" name="icpp">
                             
                                    <br><label>Phone number</label>
                                    <input class="form-control" value="<?php echo $object->hp; ?>" type="text" name="hp">
                             
                                     <br><label>Maybank Account</label>
                                            
                                            <input class="form-control" value="<?php echo $object->maybankaccount; ?>" type="text" name="maybankaccount">
                                            
                                      <br><label>Emel</label>
                                            <input class="form-control" value="<?php echo $object->emel; ?>" type="email" name="email" >     
                              
                                        <br> <label>Confirm Password</label>
                                            <input class="form-control" type="text" name="password" value="<?php echo $object->password; ?>" ><br>
                                            <input type="hidden" name="id" value="<?php echo $object->id; ?>" />
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
    </div>


    <?php endforeach; ?>
                     

              
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