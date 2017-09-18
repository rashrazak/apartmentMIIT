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
                            
                             
                            <div class="panel panel-success">
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i> Semakan Pembayaran</div>
                              <div class="panel-body">
                               <?php foreach($payment as $row){ 
                                         
                                    
                                
                               
                               ?>
                                     
                                           <div class="panel-group">
                                          <div class="panel panel-primary">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" href=#<?php echo $row->t1id;  ?>>Pengguna : <?php echo $row->t2houseno;  ?> -<?php echo $row->t2floor;  ?>-<?php echo $row->t2block;  ?></a>
                                              </h4>
                                            </div>
                                            <div id=<?php echo $row->t1id;  ?> class="panel-collapse collapse">
                                              <div class="panel-body">
                                               <div class="panel panel-success">
                                                  <div class="panel-body">
                                                        
                                             <div class="col-lg-5">
                                            
                                        
                                            <label> Nama : <?php echo $row->t2fname;  ?> <?php echo $row->t2binlname;  ?>  </label>
                                                
                                            
                                            
                                             </div><div class="col-lg-5">
                                            <label>IC : <?php echo  $row->t2icpp; ?> </label>
                                                    
                                            
                                            
                                             </div><div class="col-lg-5">
                                     <label>  Emel dan HP:  <?php echo  $row->t2emel; ?>  (<?php echo  $row->t2hp; ?>)    </label>
                                     </div>
                                     <div class="col-lg-5">
                                            <label> No Akaun: <?php echo $row->t2maybankaccount;    ?>            </label>
                                     
     
     
                             </div><div class="col-lg-5">
                                            <label> Amaun : RM 80             </label>
                                     
     
     
                             </div>    
                                              </div>
                                              </div>
                                              <br><br>
                                                 <div class="col-lg-12 col-md-offset-2">
                                                 
                                                   <div align="middle" class="well well-sm col-lg-6 " ><?php echo $row->t1year;  ?> / <?php echo $row->t1month;  ?></div>
                                                    <br><br><br>
                                                     <img align="middle" src="../../receipt/<?php echo $row->t1gambar; ?>" data-action="zoom"/><br><br>
                                                     </div>
                                            
                                              
                                                     
                                                     
                                               <div class="col-lg-5 ">
                                                     <a class="btn btn-lg btn-primary"  value="update" href="<?php echo site_url("Payment/upd8payments/".$row->t1id."/".$row->t1iduser); ?>" />
                                                     Approved</a><br><br>
                                                      <a class="btn btn-lg btn-warning"  value="update" href="<?php echo site_url("Payment/delete_payments/".$row->t1id); ?>" />
                                                     Remind and delete</a>
                                                    
                                                        
                                                    <br><br>
                                                    
                                                     </div>
                                              
                                              
                                              </div>
                                              <div class="panel-footer">Tarikh Upload :<?php echo $row->t1date;  ?><br>No rujukan :<?php echo $row->t1id;  ?></div>
                                            </div>
                                          </div>
                                        </div> 
                                           
                                         
                               
                               <?php } ?>
                               
                       
                                
                               
                
                    
                     </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
    <script src="../../receipt/js/zoom.js"></script>
              
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
