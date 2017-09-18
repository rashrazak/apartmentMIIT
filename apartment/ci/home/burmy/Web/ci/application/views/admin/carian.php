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
    
 <?php   $data['log_out']= "component/component_logout";
		$this->load->view('admin/header', $log_out); ?>

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                   
                    <br>
                    <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                              <div class="panel-heading"><i class="fa fa-search fa-fw"></i> Carian pengguna</div>
                              <div class="panel-body">
                               
                                 <div class="panel panel-primary">
                                          <div class="panel-body">
                                            <div class="col-lg-12">
                                        <br>
                                            <div class="form-groups">
                                            <div class="col-lg-8">
                                             <?php 
                                        	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>
                                        	 <?php
                                        	echo form_open('Searchx/pagecarian',$attributes); //form location ke controller,,
                                        ?>  
                                        
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                     </div>
                                              <br> <br>
                                             <div class="col-lg-8">
                                            	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn btn-danger' , 						
                            						'name'=>'submit',
                            						'value' => 'Cari',
                            					
                            
                            					);
                            
                            			 ?>	
                            			<?php echo form_submit($data3); ?>
                            			 <?php echo form_close(); ?>        
                                              </div> 
                                             
                                      </div></div>
                                          </div> </div>
                     <script type="text/javascript" charset="utf-8">
                                 setTimeout(fade_out, 2000);
                                
                                function fade_out() {
                                  $("#mydiv").fadeOut().empty();
                                }
                             </script>
                             <?php
                             if($this->session->flashdata('success')):
                                 $success = $this->session->flashdata('success');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
                        <?php 
                    	$this->session->flashdata('errors');
                    if($this->session->flashdata('error')){
                        echo "<h5 style='color:red'>Tiada dalam carian</h5>";
                        }?>
                      
                                            
                                            
                               
                               
                                </div></div> <?php echo form_close(); ?> 
                                 </div>
                                 <div class="form-groups">
                             <div class="col-lg-12">
                               <div class="well col-lg-6 col-lg-offset-3"><center>Senarai Nama<center></div>
                                
                   
                          <table class ="table">
                                
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Email dan HP</th>
                                            <th>Unit Rumah</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach($payment as $pays){ 
                                              ?>
                                                 <tr>
                                        
                                         <td><?php echo  $pays->id;  ?></td>
                                         <td><?php echo  $pays->fname;  ?> <?php echo  $pays->binlname;  ?></td>
                                            <td><?php echo $pays->emel;  ?>[ <?php echo  $pays->hp;  ?>]</td>
                                            <td><?php echo $pays->block;  ?> - <?php echo  $pays->floor;  ?> - <?php echo  $pays->houseno;  ?></td>
                                             <td>
                                             	<a class="btn-sm btn-info" href="<?php echo site_url("Register/upd82/".$pays->id); ?>">Profile</a>
                                             <a class="btn-sm btn-info" href="<?php echo site_url("Searchx/caripayment/".$pays->id); ?>">Bayaran</a>
                                             
                                             </td>
                                        </tr>
                                         <?php   
                                                
                                            }
                                            
                                     
                                     ?>
                                        
                                        <?php  
                                        
                                          
                                        
                                        ?>
                                    </tbody>
                                          
                                   </table>    </div>
                    
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
