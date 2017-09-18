<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apartment - daftar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                       
                            <a href="#"><i class="fa fa-male fa-fw"></i>Semak Rumah</a>
                        </li>
                         <li>
                           <a href="#" class="active" ><i class="fa fa-dashboard fa-fw" ></i> Daftar Rumah</a>
                           
                
                        </li>
                        <li class="disabled">
                            <a href="#"><i class="fa fa-table fa-fw"></i> Pendaftaran Selesai</a>
                        </li>
                       
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="page-header">Daftar Rumah</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a style="color:red">Sila isikan maklumat berikut</a>
                        </div>
                         <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    
                                        <div class="form-group">
                                              <?php
                                                  	if($this->session->flashdata('register')):
                                        
                                        		echo $this->session->flashdata('register');
                                        		
                                        		 endif;
                                        	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); 
                      
                                        	echo form_open('Login/semak2',$attributes); //form location ke controller,,
                                        ?>
                                        
                                        <div class="panel panel-primary">
                                          <div class="panel-body">
                                            <div class="col-lg-11">
                                        <br>
                                            <div class="form-groups">
                                            <div class="col-lg-4">
                                            <label> Block : <?php echo form_label($this->session->userdata('block')); ?></label>
                                                
                                            
                                            
                                             </div><div class="col-lg-4">
                                            <label>Floor: <?php  echo form_label($this->session->userdata('floor')); ?> </label>
                                                    
                                            
                                            
                                             </div><div class="col-lg-4">
                                             <label> House no :  <?php   echo form_label($this->session->userdata('houseno')); ?></label></div>
                                             
                                             
                                      </div></div>
                                          </div>
                                        </div>
                                        
                                           <div class="col-lg-5">
                                                 <label>First Name</label>


                                    			<?php //echo form_label('Username');
                                    				$data = array('class' => 'form-control' , 
                                    						'placeholder' => 'Cth: Ab Razak', 
                                    						'name'=>'fname',
                                    						'type' => 'text', 
                                    						'autofocus' 
                                    					);
                                    
                                    			 ?>	
                                    			<?php echo form_input($data); ?>
                                    
                                    
                                    
                                 
                                    </div>
                                          <div class="col-lg-5">
                
                                                 <label>Last Name</label>

                                    			<?php //echo form_label('Username');
                                    				$data1 = array('class' => 'form-control' , 
                                    						'placeholder' => 'Cth: bin Borhan ', 
                                    						'name'=>'lname',
                                    						'type' => 'text', 
                                    						'autofocus' 
                                    					);
                                    
                                    			 ?>	
                                    			<?php echo form_input($data1); ?>
                                    
                                    
                                    
                                    
                                    </div>  
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <div class="col-lg-5">
                                        <br>
                                            <label>IC Peribadi / Passport</label>
                                            
                                            	<?php //echo form_label('Username');
                                    				$data2 = array('class' => 'form-control' , 
                                    						'placeholder' => 'Cth: 91121110555 ', 
                                    						'name'=>'icpp',
                                    						'type' => 'text', 
                                    						'autofocus' 
                                    					);
                                    
                                    			 ?>	
                                    			<?php echo form_input($data2); ?> 
                                    
                                        </div>
                                        </div>
                                       
                                       
                                         
                                       
                                        
                                         
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                        <br>
                                            <label>Phone number</label>
                                            
                                            	<?php //echo form_label('Username');
                                    				$data4 = array('class' => 'form-control' , 
                                    						'name'=>'hp',
                                    						'placeholder'=>' Cth: 0192112345',
                                    						'autofocus' 
                                    					);
                                    
                                    			 ?>	
                                    			<?php echo form_input($data4); ?>
                                    		
                                        
                                        </div></div>
                                         <div class="col-lg-5">
                                         <div class="form-group">
                                            <br>
                                            <label>Maybank Account</label>
                                            
                                             <input class="form-control" placeholder="Akaun Maybank Pengguna" type="text" name="account">
                                    		
                                        </div>
                                 </div>
                                        
                                      <div class="col-lg-5"><br>
                                        <div class="form-group">
                                            <label>Emel</label>
                                            <input class="form-control" placeholder="Emel Pengguna" type="email" name="email">
                                           
                                        </div></div>
                               
                                        <div class="col-lg-5"><br>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password1" type="password" placeholder="**********">
                                            
                                        </div></div>
                                        <div class="col-lg-5"><br>
                                           <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="***********">
                                            
                                        </div></div>
                                           
                                        
                                       <div class="col-lg-3"><br><button type="reset" class="btn btn-warning pull-left">Reset Semula</button></div>
                                  
                                </div> 
                                      <div class="col-lg-8">
                                                <br><br>
                                                <div class="form-groups">
                                                <input type="button" class="btn" value="Back" onClick="history.go(-1);return true; "/>
                                                
                                        	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn btn-danger' , 						
                            						'name'=>'submit',
                            						'value' => 'Daftar'
                            
                            					);
                            
                            			 ?>	
                            			<?php echo form_submit($data3); ?>
                                               <?php echo form_close(); ?>  
                                             
                                    			
                                            
                                          
                                        
                                      </div>
                                      </div>
                                      
                                 
                                        
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                
                            
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
