
<?php 

	if($this->session->userdata('logged_in')){
        
        	    
        	    $this->load->view('homeview',$results);
        	    
		


	}else{



	//	$this->load->view('component/login_component');


	};


 ?>