<?php 
	
class Login extends CI_Controller{

 	public function daftar() {
        //$this->load->model('Apartmentmodel');
 		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
 		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
        //$verif = "admin";
 		if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata

 			redirect('Register/login');


 		} else {

 			$emailx =$this->input->post('email');

 			$passwordx = $this->input->post('password'); 

 			$user_id =$this->Apartmentmodel->display_apartment($emailx , $passwordx);

             if ($this->input->post('submit') == "Login")
               {
                    
                    if(!$user_id){
                        	$this->session->set_flashdata('login_fail','Registration Problem');
                         redirect('Register/login');

                    
         			}elseif($user_id <2 ){
         			         
         			           	$user_data = array(
                            
                             					'user_id' => $user_id ,
                             					'email' => $emailx ,
                             					
                             					'logged_in' => true 
                            
                            
                             				 );
                            
                             			$this->session->set_userdata($user_data);
                             			//$this->session->set_flashdata('login_success','You are now logged in');
                                        
                             			redirect('Admin/adminview');
         			            
         			        }else{
                             				$user_data = array(
                            
                             					'user_id' => $user_id ,
                             					'email' => $emailx ,
                             					'logged_in' => true 
                            
                            
                             				 );
                            
                             			$this->session->set_userdata($user_data);
                             			//$this->session->set_flashdata('login_success','You are now logged in');
                            
                             			redirect('Register/login');
         			        }
         			
 			
 		
            
             		} else{
             		    	$this->session->set_flashdata('login_fail','Registration Problem');
                         redirect('Register/login');

                    	} 
 	            	}}
    public function semak(){
 	    
 	    

 	  
 	    	$blockx =$this->input->post('block');
 			$floorx = $this->input->post('floor');
 			$housenox = $this->input->post('houseno'); 
 	       	$user_semak =$this->Apartmentmodel->register_apartment($blockx , $floorx, $housenox);
 	       	
 	       	if ($user_semak == true){
 	       	    
 	       	    $user_data = array(

 					'block' => $blockx ,
 					'floor' => $floorx ,
 					'houseno' => $housenox 
 				 );
 				 	$this->session->set_userdata($user_data);
 	       	    redirect('Register/regist2');
 	       	    
 	       	}else{
 	       	    
 	       	    	$this->session->set_flashdata('register','The apartment number have been registered');
 	       	        redirect('Register/regist');
 	       	}
 	        
 	    
 	}
 	
 	public function semak2(){
 	    	$this->form_validation->set_rules('email','Email','required');
 		    $this->form_validation->set_rules('password', 'Password', 'required|matches[password1]');
            $this->form_validation->set_rules('password1', 'Password Confirmation', 'required');
            $this->form_validation->set_rules('fname', 'Nama', 'required');
            $this->form_validation->set_rules('lname', 'Nama', 'required');
            $this->form_validation->set_rules('icpp', 'IC atau Passport', 'required');
            
            $this->form_validation->set_rules('hp', 'Nombor Telefon', 'required');
            $this->form_validation->set_rules('account', 'Akaun Bank', 'required');
 		    
 		    if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata

 			redirect('Register/regist2');
 		    }else{
     		   
         	    	$blockx =$this->session->userdata('block');
         			$floorx = $this->session->userdata('floor');
         			$housenox = $this->session->userdata('houseno'); 
         	       	$fnamex =$this->input->post('fname');
         			$lnamex = $this->input->post('lname');
         			$icppx = $this->input->post('icpp'); 
         			
         			$hpx = $this->input->post('hp');
         			$maybankx = $this->input->post('account'); 
         			$passwordx = $this->input->post('password');
         			$emailx = $this->input->post('email');
         	        $user_id =$this->Apartmentmodel->daftar_apartment($blockx, $floorx, $housenox, $fnamex, $lnamex, $icppx, $hpx, $maybankx, $emailx , $passwordx);
         	        echo $user_id;
         	        $this->Apartmentmodel->bulan_daftar($user_id);
         	        redirect('Register/login');
 		    }
 	}

 }


 ?>