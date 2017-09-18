<?php 

	class Viewuser extends CI_Controller{


		public function upd8(){ //buat update kat sini


		

			$this->form_validation->set_rules('email','Email','required');
 		    $this->form_validation->set_rules('password', 'Password', 'required');
           
            $this->form_validation->set_rules('fname', 'Nama', 'required');
            $this->form_validation->set_rules('lname', 'Nama', 'required');
            $this->form_validation->set_rules('icpp', 'IC atau Passport', 'required');
            
            $this->form_validation->set_rules('hp', 'Nombor Telefon', 'required');
            $this->form_validation->set_rules('maybankaccount', 'Akaun Bank', 'required');
 		    
 		    if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata


				
				}else{
                	
         	       	$fnamex =$this->input->post('fname');
         			$lnamex = $this->input->post('lname');
         			$icppx = $this->input->post('icpp'); 
         			
         			$hpx = $this->input->post('hp');
         			$maybankx = $this->input->post('maybankaccount'); 
         			$passwordx = $this->input->post('password');
         			$emailx = $this->input->post('email');
         			$idx = $this->input->post('id');
         			  
         	        $this->Apartmentmodel->update_apartment([
         	            
         	                     'emel' => $emailx,
                                'password' => $passwordx,
                                'fname' => $fnamex,
                                'binlname' => $lnamex,
                                'hp' => $hpx,
                                'icpp' => $icppx,
                                'hp' => $hpx,
                                'icpp' => $icppx,
                                'maybankaccount' => $maybankx
         	            
         	            
         	            
         	            
         	            ],$idx);
         	            
         	            	$this->session->set_flashdata('upd8','Your information have been updated');
         	       
         	      redirect('Register/login');
         	        
				}
               
               



		}
			public function viewer(){


			if($this->session->userdata('logged_in')){

				$user_id = $this->session->userdata('user_id');

				$viewing['results']= $this->Apartmentmodel->tengok($user_id);

				$this->load->view('homecontent',  $viewing); 

				
				}else{



					
					echo "Error Occured";


				};




		}



	public function upd8aktiviti(){ //buat update kat sini


		

			$this->form_validation->set_rules('aktiviti','aktiviti','required');
 		    $this->form_validation->set_rules('tempat', 'tempat', 'required');
           
            $this->form_validation->set_rules('tarikh', 'tarikh', 'required');
            $this->form_validation->set_rules('catatan', 'catatan', 'required');
           
 		    
 		    if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata


				
				}else{
                	
         	       	$aktivitix =$this->input->post('aktiviti');
         			$tempatx = $this->input->post('tempat');
         			$tarikhx = $this->input->post('tarikh'); 
         			$catatanx = $this->input->post('catatan');
         			$idxx = $this->input->post('id');
         		
         			  
         	        $this->Apartmentmodel->update_aktiviti([
         	            
         	                     'aktiviti' => $aktivitix,
                                'tempat' => $tempatx,
                                'tarikh' => $tarikhx,
                                'catatan' => $catatanx
                                
         	            
         	            
         	            
         	            
         	            ],$idxx);
         	            
         	            	$this->session->set_flashdata('upd8aktiviti','Your information have been updated');
         	       
         	      redirect('Register/activity');
         	        
				}
               
               



		}











	}

























 ?>