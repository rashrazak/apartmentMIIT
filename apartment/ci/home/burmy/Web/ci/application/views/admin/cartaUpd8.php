
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
                                
                                 echo form_open('Carta/upd8Confirm',$attributes);
                               
                
            ?>
             <script type="text/javascript" charset="utf-8">
                                 setTimeout(fade_out, 2000);
                                
                                function fade_out() {
                                  $("#mydiv").fadeOut().empty();
                                }
                             </script>
                             <?php
                             if($this->session->flashdata('errorup')):
                                 $success = $this->session->flashdata('errorup');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                              if($this->session->flashdata('success')):
                                 $success = $this->session->flashdata('success');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                              if($this->session->flashdata('gambar')):
                                 $success = $this->session->flashdata('gambar');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
                             
            
         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"><br><br>
                    <div class="col-md-8 col-md-offset-1">
                            <div class="panel panel-primary">
                              <div class="panel-heading"><i class="fa fa-th-list fa-fw"></i> Kemaskini pengenalan diri <?php   echo $object->nama;?>!</div>
                              <div class="panel-body">
                                <div class="form-group" class="col-lg-5 col-lg-offset-3" >          
                                          
                                 <img src="../../../carta/<?php echo $object->gambar; ?>" class="col-lg-offset-4"> 
                                      <br /><br />
                                 
                                     <br>
                                
                              
                                            
                                            </div>
                                <div class="col-md-10 col-md-offset-1 ">
                              
                                     <label>Nama</label>
                                    <input class="form-control" value="<?php echo $object->nama; ?>" type="text" name="nama">
        
                                     <br>
                                      <label>Jawatan</label>
                                    <input class="form-control" value="<?php echo $object->jawatan; ?>" type="text" name="jawatan">
                                    
                                    <br>
                                     <label>no telefon</label>
                                     <input class="form-control" value="<?php echo $object->notelefon; ?>" type="text" name="nohp">
                                    <br><br>
                                   	<a class="btn btn-info" href="<?php echo site_url("carta/tukarGambar/".$object->id); ?>">Tukar gambar</a>
                                            <input type="hidden" name="id" value="<?php echo $object->id; ?>" />
                                    </div>
                                   
                              </div>
                               <div class="panel-footer">
                               
                                    	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn btn-danger' , 						
                            						'name'=>'submit',
                            						'value' => 'Update',
                            					
                            
                            					);
                            
                            			 ?>	
                            			 <?php echo form_submit($data3); ?>
                            		
                               
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


    <?php endforeach;
    
    ?>
                     
    	
                                               <?php echo form_close(); ?>  
              
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