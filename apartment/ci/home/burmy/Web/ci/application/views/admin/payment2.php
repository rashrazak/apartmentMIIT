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
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i> Rujukan Bayaran</div>
                              <div class="panel-body">
                               
                                 <div class="panel panel-primary">
                                          <div class="panel-body">
                                            <div class="col-lg-12">
                                        <br>
                                            <div class="form-groups">
                                            <div class="col-lg-5">
                                            
                                             <?php 
                                             
                                             $monthx = date("F"); 
                                             $mont = (string)$monthx;
                                             
                                             //$mont = strtolower($mont);
                                             $yearx = date("Y");
                                             
                                             
                                             ?>
                                            <label> Tahun : <?php echo $yearx;  ?></label>
                                                
                                            
                                            
                                             </div><div class="col-lg-5">
                                            <label>Bulan: <?php echo $mont; ?> </label>
                                                    
                                            
                                            
                                             </div><div class="col-lg-5">
                                     
                                     
     
     
                             </div><div class="col-lg-5">
                                            <label> Amaun : RM 80             </label>
                                     
     
     
                             </div>
                                                
                                                
                                             
                                      </div></div>
                                          </div>
                                        
                    </div>
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
                        echo "<h5 style='color:red'>Sila Masukkan gambar dan id pengguna</h5>";
                        }?>
                       <?php
                                
                                 echo form_open_multipart('Payment/manualpayments');
                                 ?>
                                  <div class="form-group" class="col-lg-5" >          
                                          
                              
                                      
                                 <input type="file" name="userfile"class="form-control" size="20" />
                                     <br>
                                
                              
                                            <br /><br />
                                            </div>
                                            
                                <div class="form-group col-lg-6" >
                                    <h5><i>Sila Semak id pengguna dalam carian pengguna</i><h5><br>
                                     <input type="text" name="id"class="form-control" placeholder="masukkan id pengguna" size="20" />
                                
                                </div>
                                 <div class="form-group col-lg-12" > 
                                	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn btn-danger' , 						
                            						'name'=>'submit',
                            						'value' => 'Cari'
                            
                            					);
                            
                            			 ?>	
                            			<?php echo form_submit($data3); ?>
                                               
                                </div>
                                </div></div> <?php echo form_close(); ?> 
                                 </div>
                                 <div class="form-groups">
                             <div class="col-lg-12">
                               <div class="well col-lg-6 col-lg-offset-3"><center>Bayaran Belum Diproses<center></div>
                                
                   
                          <table class ="table">
                                
                                    <thead>
                                        <tr>
                                            <th>Nombor rujukan bayaran</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Tarikh</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach($activ as $pays){ 
                                            if ($pays['paid'] == 0){
                                                $status = "Belum diproses";  ?>
                                                 <tr>
                                        
                                         <td><?php echo  $pays['id'];  ?></td>
                                         <td><?php echo  $pays['year'];  ?></td>
                                            <td><?php echo $status;  ?></td>
                                            <td><?php echo  $pays['date'];  ?></td>
                                        </tr>
                                         <?php   }
                                                
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
