<?php 
class Admin extends CI_Controller{
    
    public function adminview(){
        
        if($this->session->userdata('logged_in')){
        
        $pendaftar= $this->Apartmentmodel->AdminUser();
		//$this->load->view('admin/homeview'); 
        	   
         $this->session->set_userdata('user',$pendaftar);	
         
		 $payments= $this->Apartmentmodel->AdminPay();
        $this->session->set_userdata('pay',$payments);
        
         $aduan= $this->Apartmentmodel->AdminAduan();
        $this->session->set_userdata('aduan',$aduan);
       $this->load->view('admin/homeview'); //panggil view
       
       
	}else{



	
	    $data['log_in']= "component/login_component";
	    $this->load->view('layouts/login_view',$data);

	};

       
    }
 
}




?>