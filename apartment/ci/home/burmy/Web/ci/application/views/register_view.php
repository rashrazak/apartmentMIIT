<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apartment-Semak</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                        <li>
                            <a href="#" class="active"><i class="fa fa-male fa-fw"></i> Semak Rumah</a>
                        </li>
                        <li class="disabled">
                           <a href="#" ><i class="fa fa-dashboard fa-fw" ></i> Daftar Rumah</a>
                           
                
                        </li>
                        <li class="disabled">
                            <a href="#"><i class="fa fa-table fa-fw"></i> Pendaftaran Selesai</a>
                        </li>
                       
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="page-header">Semak Rumah</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a style="color:red">Sila semak maklumat berikut</a>
                        </div>
                                         <?php 
                                        	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>
                                        	
                                        
                                        <?php 
                                        		
                                        		if($this->session->flashdata('register')):
                                        
                                        		echo $this->session->flashdata('register');
                                        		
                                        		 endif;
                                        
                                         ?>
                                        
                                        
                                        <?php
                                        	echo form_open('Login/semak',$attributes); //form location ke controller,,
                                        ?>
                                      
                                     <div class="form-group col-lg-9">
                	                            <br>
                                                    <label for="filter"> Block </label>
                                                    <select class="form-control" name="block">
                                                        <option value="21" selected>21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                					                    <option value="6">26</option>
                                                    </select>
                				    <label for="filter">Floor</label>
                                                    <select class="form-control" name="floor">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                       
                                                    </select>
                				      <label for="filter">House Number</label>
                                                    <select class="form-control"name="houseno">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                    					<option value="6">6</option>
                                    					<option value="7">7</option>
                                    					<option value="8">8</option>
                                    					<option value="9">9</option>
                                    					<option value="10">10</option>
                                    					<option value="11">11</option>
                                    					<option value="12">12</option>
                                    					<option value="13">13</option>
                                    					<option value="14">14</option>
                                    					<option value="15">15</option>
                                    					<option value="16">16</option>
                                    						<option value="17">17</option>
                                    					<option value="18">18</option>
                                    					<option value="19">19</option>
                                    					<option value="20">20</option>
                                    					<option value="21">21</option>
                                    					<option value="22">22</option>
                                    					<option value="23">23</option>
                                    					<option value="24">24</option>
                                    					<option value="25">25</option>
                                    					<option value="26">26</option>
                                    						<option value="27">27</option>
                                    					<option value="28">28</option>
                                    					<option value="29">29</option>
                                    					<option value="30">30</option>
                                    					<option value="31">31</option>
                                    					<option value="32">32</option>
                                    					<option value="33">33</option>
                                    					<option value="34">34</option>
                				
                                                    </select>
                                                  </div>
                      <div class="modal-footer">
                        <br>
                       	<?php //echo form_label('Username');
				$data3 = array('class' => 'btn-lg btn-danger' , 						
						'name'=>'submit',
						'value' => 'Check !'

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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
