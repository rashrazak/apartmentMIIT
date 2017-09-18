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
		$this->load->view('header', $data);

        //$this->load->view('homecontent');

?>


  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?php 
                            foreach ($results as $object):
                                $fname= $object->fname;
                                        
                             ?>
                             <script type="text/javascript" charset="utf-8">
                                 setTimeout(fade_out, 2000);
                                
                                function fade_out() {
                                  $("#mydiv").fadeOut().empty();
                                }
                             </script>
                             <?php
                             if($this->session->flashdata('upd8')):
                                 $success = $this->session->flashdata('upd8');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
                              <?php
                             if($this->session->flashdata('alert')):
                                 $success = $this->session->flashdata('alert');
                                 echo ' <div id="mydiv"><font size="3" color="red">'.$success.'</font></div>';
                             endif;
                             ?>
                             
 <center>
	 <img src="<?php echo base_url();?>image/header1.jpg" alt="Logo" style="width:600px;height:200px;">
    </center>


                        <h3 class="page-header">Selamat Datang " <?php   echo $fname;?>"</h3>
                                                  <!-- Modal -->
                                                  
        
                             
                                                  
                         
                             <?php  endforeach; ?>
                             <h2><a style='color:red'>Pengumuman</a></h2>
                              
                               <?php foreach($activ as $row){ ?>
                               
                                
                                           <div class="panel-group">
                                          <div class="panel panel-primary">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" href=#<?php echo $row['id'];  ?>>Aktiviti :<?php echo $row['aktiviti'];  ?> </a>
                                              </h4>
                                            </div>
                                            <div id=<?php echo $row['id'];  ?> class="panel-collapse collapse">
                                              <div class="panel-body">
                                               <div class="panel panel-success">
                                                  <div class="panel-body">
                                                        
                                             <div class="col-lg-5">
                                            
                                        
                                            <label> Catatan :  <?php echo $row['catatan'];  ?> </label>
                                                
                                            
                                            
                                            </div><div class="col-lg-5">
                                            <label>Tempat : <?php echo $row['tempat'];  ?> </label>
                                                    
                                            
                                            
                                             </div><div class="col-lg-5">
                                     <label>  Catatan:     </label>
                                     
                                     </div> 
                                                    
                                                </div>
                                              </div>
                                              <br><br>
                                                 <div class="col-lg-12 col-md-offset-2">
                                                 
                                                   <div align="middle" class="well well-sm col-lg-6 " > / </div>
                                                    <br><br><br>
                                                    <!-- <img align="middle" src="../../uploads/<?php echo $row['gambar']; ?>" data-action="zoom"/><br><br> -->
                                                     </div>
                                            
                                              
                                                     
                                                     
                                               <div class="col-lg-5 ">
                                                    
                                                        
                                                    <br><br>
                                                    
                                                     </div>
                                              
                                              
                                              </div>
                                              <div class="panel-footer">Tarikh Upload :<?php echo $row['tarikh'] ?>
                                             <!-- <br>No rujukan :<?php ?> -->
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                          
                                 <?php }  ?>
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
