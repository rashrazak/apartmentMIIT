

<?php 
	$attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>
	

<?php 
		
		if($this->session->flashdata('errors')):

		echo $this->session->flashdata('errors');
		
		 endif;

 ?>


<?php
	echo form_open('Login/daftar',$attributes); //form location ke controller,,
?>

<style type="text/css">

</style>
<br><br> 
<center>
	 <img src="<?php echo base_url();?>image/header1.jpg" alt="Logo" style="width:600px;height:200px;">
</center>

<div class="container bgimg" >
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading" >
                        <h3 class="panel-title">Daftar masuk</h3>
                    </div>
                    <div class="panel-body">
<div class="form-group">



			<?php //echo form_label('Username');
				$data = array('class' => 'form-control' , 
						'placeholder' => 'E-mail', 
						'name'=>'email',
						'type' => 'email', 
						'autofocus' 
					);

			 ?>	
			<?php echo form_input($data); ?>




</div>
<div class="form-group">



			<?php //echo form_label('Username');
				$data2 = array('class' => 'form-control' , 
						'placeholder' => 'Password', 
						'name'=>'password',
						'type' => 'password'

					);

			 ?>	
			<?php echo form_password($data2); ?>




</div> 
<div class="form-group">



			<?php //echo form_label('Username');
				$data3 = array('class' => 'btn btn-info' , 						
						'name'=>'submit',
						'value' => 'Login'

					);

			 ?>	
			<?php echo form_submit($data3); ?>


<a class="pull-right" href="<?php echo site_url('Register/regist') ?>">Daftar?</a>

</div>


<?php 
	
	if($this->session->flashdata('login_fail')):

		$remind =$this->session->flashdata('login_fail');
		echo '<font size="3" color="red">'.$remind.'</font>';


	endif;

	echo form_close();

?>
   </div>
                </div>
                       <?php //$this->load->view($flashdata_comp); ?>
          