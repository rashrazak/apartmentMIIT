<?php
class Register extends CI_Controller{

    	public function regist(){

		// $this->load->model('tuition_model');
		//$this->Apartmentmodel->register_apartment();
		$this->load->view('register_view');
		

	}
	public function login(){
	    
	    
	    
	   	if($this->session->userdata('logged_in')){
        
         $user_id = $this->session->userdata('user_id');
         
         
         if($user_id <2){
             
             
             
                             			//$this->session->set_flashdata('login_success','You are now logged in');
                                        
                             			redirect('Admin/adminview');
             
         }else{
		$data['results']= $this->Apartmentmodel->tengok($user_id);
		
        	   // $this->load->view('homeview',$results);
        	 
        	 $data3['wher'] = '  5';
        	 
        	  $data3['fields'] = array(
                            'id',
                            'aktiviti',
                            'tarikh',
                            'tempat',
                            'catatan',
                            'gambar'
                            );
                        $data3['order'] = 'id desc';
            $data['activ']=$this->Apartmentmodel->viewactiv($data3);    
		    $this->load->view('homecontent',  $data); 
         }

	}else{



	
	    $data['log_in']= "component/login_component";
	    $this->load->view('layouts/login_view',$data);

	};

	    
	    
        
// 		//$data['main'] = "login_view";
//        
// 	
// 		$this->load->view('layouts/login_view');
		

	}


	public function regist2(){

		// $this->load->model('tuition_model');
		//$result=$this->Apartmentmodel->register_apartment();
		$this->load->view('register2_view');
		

	}
public function regist3(){

		// $this->load->model('tuition_model');
		//$result=$this->Apartmentmodel->register_apartment();
		$this->load->view('register3_view');
		

	}

public function logout(){

		// $this->load->model('tuition_model');
		$this->session->sess_destroy();
		redirect('register/login');
		

	}
	public function upd8(){
    
    
    
    if($this->session->userdata('logged_in')){
        
         $user_id = $this->session->userdata('user_id');
	        $data['results']= $this->Apartmentmodel->tengok($user_id);
		    $this->load->view('layouts/user_view',  $data); 
	      
	      
	      
	}else{



    	echo "error occured";

	};

		

	}	
	public function upd82($id){
    
    
    
   
        
        
	        $data['results']= $this->Apartmentmodel->tengok($id);
		    $this->load->view('layouts/user_view',  $data); 
	      
	      
	      

		

	}

    public function activity(){

		if($this->session->userdata('logged_in')){
		            
		             $user_id = $this->session->userdata('user_id');
            		 $this->Apartmentmodel->tengok($user_id);
            		 
                    
                	if($user_id > 1){
                        
                        
                        $data['fields'] = array(
                            'id',
                            'aktiviti',
                            'tarikh',
                            'tempat',
                            'catatan'
                            
                            );
                        $data['order'] = 'id desc';
                         $data['results']=$this->Apartmentmodel->activity($data); 
                         $data['log_out']= "component/component_logout";
                        	
                         $this->load->view('activity',$data);


                    }else{
                        	
        	 
        	         $data3['fields'] = array(
                            'id',
                            'aktiviti',
                            'tarikh',
                            'tempat',
                            'catatan',
                            'gambar'
                            );
                        $data3['order'] = 'id desc';
                     $data['activ']=$this->Apartmentmodel->activity($data3);   
                        
                         $data['log_out']= "component/component_logout";
                        	
                         $this->load->view('admin/activity',$data);
                        
                    }





        
        

        	}else{
        	    
        	    $this->load->view('index');
        	    
        	}
	     
	
		

	}
	
	
	public function payment(){
	    	if($this->session->userdata('logged_in')){
                
                 $user_id = $this->session->userdata('user_id');
                if($user_id==1){
                
                       $data2['activ']=$this->Apartmentmodel->manualpayments(); 
                        $data2['log_out']= "component/component_logout";
            	    
            	    	$this->load->view('admin/payment2',$data2);
            		    
                    
            
            		}else{
            		    
            		    
            		    	  
            	        $data['results']= $this->Apartmentmodel->tengok($user_id);
            		    
                        	    $data['log_out']= "component/component_logout";
                        	     $data3['wher'] = '  5';
                    	          $data3['idx'] = $user_id;
                    	          $data3['paid'] = 0;
                    	  $data3['fields'] = array(
                                        'id',
                                        'year',
                                        'date',
                                        'paid',  
                                        'gambar'
                                        );
                                    $data3['order'] = 'id desc';
                        $data['activ']=$this->Apartmentmodel->viewpayments($data3);   
                        	    
                        		$this->load->view('payment', $data);
            		
            		 
            		    
            		    
            		}
            		
            		
		

	}else {
	    echo "ERROR 404";
	}
	}
	
	
	
	public function payment2(){
    
    
    
    if($this->session->userdata('logged_in')){
        
         $user_id = $this->session->userdata('user_id');
         if($user_id >1){
	        $data['results']= $this->Apartmentmodel->tengok($user_id);
		    
	        $data['log_out']= "component/component_logout";
            	     $data3['wher'] = '  5';
        	          $data3['idx'] = $user_id;
        	          $data3['paid'] = 1;
        	           $data3['order'] = 'id desc';
	                     $data['activ']=$this->Apartmentmodel->oldpayments($data3);  
	                    	$this->load->view('paymentold', $data);
        	}else{

                    echo "error occured";
    	

        	}
        	
    }else{
        
        echo "error occured";}
	}
	
		public function upd8Activity($idx){

	   if($this->session->userdata('logged_in')){
        
        
	        $data['results']= $this->Apartmentmodel->aktivitiupd8($idx);
		    $this->load->view('admin/upd8Activity',  $data); 
        	}else{
        
        
        
          	
        
        	};
		

	}
	public function deleteActivity($idxxx){

	         $this->Apartmentmodel->delete_aktiviti($idxxx);
	         $data = $this->session->set_userdata('success','Succesfully deleted');
	       //   $data['log_out']= "component/component_logout";
		      //$this->load->view('admin/activity',  $data); 
            redirect('Register/activity');
	}
		public function deleteUser($idxxx){

	         $this->Apartmentmodel->delete_user($idxxx);
	         $data = $this->session->set_userdata('success','Succesfully deleted');
	       //   $data['log_out']= "component/component_logout";
		      //$this->load->view('admin/activity',  $data); 
            redirect('Searchx/pagecarian');
	}

}



?>