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
		$this->load->view('header', $log_out); ?>

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                   
                    <br>
                    <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                              <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i>Aktiviti Keseluruhan</div>
                              <div class="panel-body">
                                <table class ="table">
                                
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Aktiviti</th>
                                            <th>Tarikh</th>
                                            <th>Tempat</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach($results as $row){ ?>
                                         <tr>
                                         <td> <?php echo $row['id']; ?> </td>
                                         <td><?php echo $row['aktiviti'];  ?></td>
                                         <td><?php echo $row['tarikh'];  ?></td>
                                            <td><?php echo $row['tempat'];  ?></td>
                                            <td><?php echo $row['catatan'];  ?></td>
                                        </tr>
                                        <?php }  ?>
                                    </tbody>
                                          
                                    
                                </table>
                                
                                
                               
                    
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
