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
		$this->load->view('header', $log_out);
		
	
		?>
 
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                    
                     
             <div class="panel panel-success">
             <div class="panel-heading"><h4><i class="fa fa-tasks fa-fw"></i>Ruang Aduan<h4></div>
             <div class="panel-body">
           <?php   
                	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); 
                      
                                        	echo form_open('Aduan/insertAduan2',$attributes);
                
		?>
	<script type="text/javascript" charset="utf-8">
                                 setTimeout(fade_out, 2000);
                                
                                function fade_out() {
                                  $("#mydiv").fadeOut().empty();
                                }
                             </script>
                             <?php
                             if($this->session->flashdata('errors')):
                                 $success = $this->session->flashdata('errors');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                            
                             endif;
                            
                              if($this->session->flashdata('success')):
                                 $success = $this->session->flashdata('success');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
              <div class="form-group" > 
                    
                    <!--<input type="text" name="aduan"class="form-control" placeholder="Nama: "/></div>
                    <div class="form-group" > 
                    <input type="text" name="aduan"class="form-control" placeholder="No rumah: "/><br> </div> -->
                    
                     <div class="form-group" > 
                    <input type="text" name="aduan"class="form-control" placeholder="Aduan mengenai ?"/><br> </div>
                     <div class="form-group" > 
                    <input type="text" name="tarikh"class="form-control" placeholder="Tarikh berlaku "/><br></div>
                     <div class="form-group" > 
                 
                    <textarea type="textarea" name="aktiviti"class="form-control" placeholder="Ceritakan yang berlaku berserta nama, no rumah dan no telefon"></textarea></div>
                                         <div class="form-group" > 
                    
                    <br /><br />
                     <div class="form-group" > 
                   	<?php //echo form_label('Username');
                            				$data3 = array('class' => 'btn btn-warning' , 						
                            						'name'=>'submit',
                            						'value' => 'Hantar',
                            					
                            
                            					);
                            
                            			 ?>	
                            			<?php echo form_submit($data3); ?>
                            			 <?php echo form_close(); ?>  
                    </div>
                  
  </div></div>
  </div>
  
  </div>
                    </div>
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