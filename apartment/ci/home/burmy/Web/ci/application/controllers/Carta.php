<?php 

    class Carta extends CI_Controller {
        
                
           
      
                
                
            public function carta2(){
            	$data['results1']= $this->Apartmentmodel->cartaLVL1();
            	$data['results2']= $this->Apartmentmodel->cartaLVL2();
        		$data['results3']= $this->Apartmentmodel->cartaLVL3();
    			$data['results4']= $this->Apartmentmodel->cartaLVL4();
				$data['results5']= $this->Apartmentmodel->cartaLVL5();
                $data['log_out']= "component/component_logout";
                $this->load->view('carta', $data);
            }
        
         public function carta_admin(){
            	$data['results1']= $this->Apartmentmodel->cartaLVL1();
            	$data['results2']= $this->Apartmentmodel->cartaLVL2();
        		$data['results3']= $this->Apartmentmodel->cartaLVL3();
    			$data['results4']= $this->Apartmentmodel->cartaLVL4();
				$data['results5']= $this->Apartmentmodel->cartaLVL5();
                $data['log_out']= "component/component_logout";
                $this->load->view('admin/carta2', $data);
            }
          public function upd8($id){
    
	        $data['results']= $this->Apartmentmodel->tengokCarta($id);
		    $this->load->view('admin/cartaUpd8',  $data); 
	      
          }
          
          
          
          
          
	       function resize($path,$file){
                $config['image_library']='gd2';
                $config['source_image']=$path ;
                $config['create_thumb']=FALSE ;
                $config['maintain_ratio']=TRUE ;
                $config['width']=400 ;
                $config['height']=300 ;
                $config['new_image']='./receipt/'.$file ;
                
                $this->load->library('image_lib',$config);
                $this->image_lib->resize();
            }

		

            
            	   public function upd8Confirm(){ 

    					
    				
    				
    					
    					
						 $this->form_validation->set_rules('nama','Nama','required');
                    	 $this->form_validation->set_rules('jawatan','Jawatan','required');	
                         $this->form_validation->set_rules('nohp','No Telefon','required');
                        
                    
                       
                    
                        if ( $this->form_validation->run()== FALSE)
                        {
                            
                        	 $this->session->set_flashdata('errorup',(validation_errors()));
                            
                           redirect("Carta/upd8/".$idx);
                            
                        }
                        else
                        {
                            
                            
                	        	$idx =$this->input->post('id');
                    			$namax =$this->input->post('nama');
                				$jawatanx =$this->input->post('jawatan');
            					$nohpx =$this->input->post('nohp');
                             $this->session->set_flashdata('success','Pengesahan anda telah dimasukkan');
                            
                             $this->Apartmentmodel->cartaUpd8( $namax, $jawatanx,$nohpx ,$idx);
                            
                           redirect('Carta/upd8/'.$idx);
                            
                
                        }
            	   }
	    public function tukarGambar($id){
	        
	         $this->session->set_flashdata('id',$id);
	        $this->load->view('admin/tukargambar');
	        
	        
	        
	        
	    }
        public function tukarGambar2(){
            
            $idx =$this->input->post('id');
                     $config['upload_path'] = './receipt/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '10000';
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $config['overwrite'] = TRUE;
                        $config['remove_spaces'] = TRUE;
                       
                    
                        $this->load->library('upload', $config);
                    
                        if ( !$this->upload->do_upload() )
                        {
                            
                        	 $this->session->set_flashdata('error',($this->upload->display_errors()));
                            
                           redirect('Carta/carta_admin');
                            
                        }
                        else
                        {
                           $idx =$this->input->post('id');
                            
                           $data = array('upload_data' => $this->upload->data());
                           $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                             $this->session->set_flashdata('success','Pengesahan anda telah dimasukkans');
                            
                             $this->Apartmentmodel->cartaUpd8Gambar($this->upload->data() ,$idx);
                            	 $this->session->set_flashdata('gambar','kemaskini gambar berjaya');
                           redirect('Carta/carta_admin');
                            
                
                        }
            
        
        
        }
            	
    }




























?>