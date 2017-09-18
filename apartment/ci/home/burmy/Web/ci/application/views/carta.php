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
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/carta/app.css" rel="stylesheet">

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
                    
                    <center>
	 <img src="<?php echo base_url();?>image/header1.jpg" alt="Logo" style="width:600px;height:200px;">
    </center>
                    
                   
                                                <div class="container noah-family-tree-container">
                                <div class="row noah-family-header">
                                   
                                    <div class="underline"></div>
                                </div>
                                <div class="row noah-family-tree grid">
                                <?php
                                
                                    foreach($results1 as $row1){
                                
                                ?>
                                    <div class="tree-head img-tree grow push"> <a href="#" class="button tree-parent "> 
                                            <p><?php echo $row1->jawatan; ?></p>
                                            <img src="../../carta/<?php echo $row1->gambar; ?>" class="img-responsive"> 
                                            <p><?php echo $row1->nama; ?> </p> 
                                            <P>(<?php echo $row1->notelefon; ?>)</P>
                                       </a>
                            
                                    </div>
                                    
                                    
                                   <?php } ?> 
                                </div>
                                   
                               <div id="child-content">
                                    <div class="row">
                                        <div class="tree-line-vertical"></div>
                                        <div class="tree-line-horizontal"></div>
                                    </div>
                                    <div class="row tree-row tree-child">
                                        <?php
                                            $i = 1;
                                                foreach($results2 as $row2){
                                            
                                            ?>
                                        <div class="col-md-2 col-sm-2 col-xs-2 img-tree grow push"> <a href="#" class="button tree-child<?php echo $i++; ?> "> 
                                            <p><?php echo $row2->jawatan; ?></p>
                                             <img src="../../carta/<?php echo $row2->gambar; ?>" class="img-responsive"> 
											 <p><?php echo $row2->nama; ?></p> 
											<p>(<?php echo $row2->notelefon; ?>)</p>
                                            <p></p>
                                          </a>
                            
                                        </div>
                                   
                                        <?php } ?> 
                                        <div class="col-md-2 col-sm-2 col-xs-2 img-tree grow push"> <a href="#" class="button tree-child4 ">  
                                        <p>BIRO WANITA</p>
                                        
                                            <p></p>
                                          </a>
                            
                                       </div>
                                    </div>
                                </div>
                                <div id="grandchild-content1">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 family-tree-line">
                                            <div class="tree-line-vertical"></div>
                                            <div class="tree-line-horizontal"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 img-tree"></div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 img-tree"></div>
                                    </div>
                                    <div class="row">
                                     <?php
                                           
                                                foreach($results3 as $row3){
                                            
                                            ?>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-tree grow push"> <a href="#" class="button ">  
                                        <p><?php echo $row3->jawatan; ?></p> 
                                         <img src="../../carta/<?php echo $row3->gambar; ?>" class="img-responsive"> 
                                          <p><?php echo $row3->nama; ?></p> 
                                          <p>(<?php echo $row3->notelefon; ?>)</p>
                                        </a>
                            
                                        </div>
                                        <?php } ?> 
                                        <div class="col-md-6 col-sm-6 col-xs-6 img-tree grow push"></div>
                                    </div>
                                </div>
                                
                                <div id="grandchild-content3">
                                    <div class="row">
                                        <div class="col-md-12 img-tree">
                                            <div class="tree-line-vertical"></div>
                                            <div class="tree-line-horizontal"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                     <?php
                                           
                                                foreach($results5 as $row4){
                                            
                                            ?>
                                       
                                        <div class="col-md-2 col-sm-2 col-xs-2 img-tree grow push"> <a href="#" class="button ">  
                                            <p><?php echo $row4->jawatan; ?></p> 
                                             <img src="../../carta/<?php echo $row4->gambar; ?>" class="img-responsive"> 
                                            <p><?php echo $row4->nama; ?></p> 
                                          <p> (<?php echo $row4->notelefon; ?>)</p>
                                        </a>
                            
                                        </div>
                                         <?php } ?> 
                                      
                                        <div class="col-md-2 col-sm-2 col-xs-2 img-tree grow push"></div>
                                    </div>
                                </div>
                                <div id="grandchild-content4">
                                    <div class="row">
                                        <div class="col-md-12 img-tree">
                                            <div class="tree-line-vertical"></div>
                                            <div class="tree-line-horizontal"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <?php
                                           
                                                foreach($results4 as $row5){
                                            
                                            ?>
                                        
                                        <div class="col-md-2 col-sm-2 col-xs-2 img-tree grow push"> <a href="#" class="button ">  
                                            <img src="../../carta/<?php echo $row5->gambar; ?>" class="img-responsive"> 
                                            <p><?php echo $row5->nama; ?> </p> 
                                          <p> (<?php echo $row5->notelefon; ?>)  </p> 
                                        </a>
                            
                                        </div>
                                          <?php } ?> 
                                        
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-tree grow push"></div>
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
    
    <script src="<?php echo base_url();?>assets/carta/app.js"></script>

</body>

</html>
