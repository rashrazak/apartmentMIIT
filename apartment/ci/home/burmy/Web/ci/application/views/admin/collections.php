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
    <link href="../../receipt/css/zoom.css" rel="stylesheet" type="text/css">
    

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
                    <div class="col-md-12 ">
                      <script type="text/javascript" charset="utf-8">
                                 setTimeout(fade_out, 2000);
                                
                                function fade_out() {
                                  $("#mydiv").fadeOut().empty();
                                }
                             </script>
                             <?php
                             if($this->session->flashdata('upd8payment')):
                                 $success = $this->session->flashdata('upd8payment');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                              if($this->session->flashdata('alert')):
                                 $success = $this->session->flashdata('alert');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
                            
                             <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a style="color:red"><h4>Sila semak maklumat berikut</h4></a>
                        </div>
                                         <?php 
                                        	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>
                                        	
                                        
                                        <?php 
                                        		
                                        		if($this->session->flashdata('register')):
                                        
                                        		echo $this->session->flashdata('register');
                                        		
                                        		 endif;
                                        
                                         ?>
                                        
                                        
                                        <?php
                                        	echo form_open('Payment/jumlah2',$attributes); //form location ke controller,,
                                        ?>
                                      
                                     <div class="form-group col-lg-4">
                	                            <br>
                                                    <label for="filter"> Tahun </label>
                                                    <select class="form-control" name="tahun">
                                                        <option value="2015" selected>2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                					                    <!--<option value="6">26</option> -->
                                                    </select>
                				    <label for="filter">Bulan </label>
                                                    <select class="form-control" name="bulan">
                                                        <option value="january" selected>Januari</option>
                                                        <option value="february">Februari</option>
                                                        <option value="march">Mac</option>
                                                        <option value="april">April</option>
                                                        <option value="may">Mei</option>
                                                        <option value="june">Jun</option>
                                                        <option value="july">July</option>
                                                        <option value="august">August</option>
                                                        <option value="september">September</option>
                                                        <option value="october">Oktober</option>
                                                        <option value="november">November</option>
                                                        <option value="december">Disember</option>
                                                    </select>
                				      
                                                  </div>
                      <div class="modal-footer">
                        <br>
                       	<?php //echo form_label('Username');
				$data3 = array('class' => 'btn-lg btn-danger' , 						
						'name'=>'submit',
						'value' => 'Semak'

					);

			 ?>	
			<?php echo form_submit($data3); ?>
                	
                      </div>
                    <?php	echo form_close(); ?>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                       
                           <div class="panel panel-default col-lg-5 col-lg-offset-1">
                              <div class="panel-body">
                               <?php
                                        if(($this->session->flashdata('jumlah') == null)&&($this->session->flashdata('ahli')==0)){
                                           echo "<h3 style='color:red'>" .$this->session->flashdata('error'). "</h3>";
                                            }else{
                                                
                                                $this->session->flashdata('jumlah');
                                                 $this->session->flashdata('ahli');
                                                
                                            }
                                    
                                    
                                    ?>
                              <p>Jumlah Kutipan: <?php echo $this->session->flashdata('jumlah'); ?> </p>
                              <p>Bilangan pembayar: <?php echo $this->session->flashdata('ahli'); ?> </p>
                            
                              
                              
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
