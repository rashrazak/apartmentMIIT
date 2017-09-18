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
		$this->load->view('admin/header', $log_out);
		?>

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                   
                    <br>
                    <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i>Budget Debit</div>
                              <div class="panel-body">
                                <table class ="table">
                                
                                    <thead>
                                        <tr>
                                           
                                            <th>Perkara</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                     $sum = 0;
                                     foreach($activ as $row){ 
                                        
                                        $jumlah = $row->jumlah;
                                        
                                     ?>
                                         <tr>
                                         
                                         <td><?php echo $row->perkara; 
                                         ?></td>
                                         <td>RM <?php echo $row->jumlah; 
                                         ?></td><!--
                                            <td><?php //echo $row['aktiviti']; 
                                            ?></td>
                                            <td><?php //echo $row['date']; 
                                            ?></td>
                                            <td><?php //echo $row['baki']; 
                                            ?></td> -->
                                        </tr>
                                        <?php
                                        
                                          $sum += $jumlah;
                                     }  
                                        ?>
                                    </tbody>
                                          
                                     <?php   
                                           echo  "<b> Jumlah Kesemuanya : <a style='color:red'> RM ".$sum."</a> </b>";
                                        ?>  
                                </table>
                                
                                
                               
                    
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i>Budget Kredit</div>
                              <div class="panel-body">
                                <table class ="table">
                                
                                    <thead>
                                        <tr>
                                           
                                            <th>Perkara</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                     <?php 
                                     $sum1 = 0;
                                     foreach($results as $row){ 
                                        
                                        $jumlah = $row->jumlah;
                                        
                                     ?>
                                     
                                    <tbody>
                                    
                                         <tr>
                                         
                                         <td><?php echo $row->perkara; 
                                         ?></td>
                                         <td>RM <?php echo $row->jumlah; 
                                         ?></td><!--
                                            <td><?php //echo $row['aktiviti']; 
                                            ?></td>
                                            <td><?php //echo $row['date']; 
                                            ?></td>
                                            <td><?php //echo $row['baki']; 
                                            ?></td> -->
                                        </tr>
                                      <?php   $sum1 += $jumlah;
                                     }  
                                        ?>  
                                    </tbody>
                                          <?php   
                                          echo  "<b> Jumlah Kesemuanya : <a style='color:red'> RM ".$sum1."</a> </b>";
                                        ?>  
                                    
                                </table>
                                
                                
                               
                    
                    </div>
                    </div>
                    </div>
                      <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-danger">
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i>Jumlah Bajet Sebenar</div>
                              <div class="panel-body">
                                <h4> Jumlah Debit Masuk : RM <?php echo $sum; ?></h4>
                                <h4> Jumlah Kredit Keluar : RM <?php echo $sum1; ?></h4>
                                <h4 > Jumlah :RM <a style="color:red"><?php echo $sum - $sum1; ?></a></h4>
                                
                               
                    
                    </div>
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
