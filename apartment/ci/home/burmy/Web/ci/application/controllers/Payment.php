<?php class Payment extends CI_Controller{   
   
   
   
     function resize($path,$file){
                $config['image_library']='gd2';
                $config['source_image']=$path ;
                $config['create_thumb']=FALSE ;
                $config['maintain_ratio']=TRUE ;
                $config['width']=500 ;
                $config['height']=700 ;
                $config['new_image']='./receipt/'.$file ;
                
                $this->load->library('image_lib',$config);
                $this->image_lib->resize();
            }
   
   
    public function payments(){ 

                        	$tahun =  date("Y");
                        	$paid = 0;
                    		$emailx =$this->input->post('idx');
                        
                         $config['upload_path'] = './receipt/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '10000';
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $config['overwrite'] = TRUE;
                        $config['remove_spaces'] = TRUE;
                       
                    
                        $this->load->library('upload', $config);
                    
                        if ( ! $this->upload->do_upload())
                        {
                            
                        	 $this->session->set_flashdata('error',$this->upload->display_errors());
                            
                           redirect('Register/payment');
                            
                        }
                        else
                        {
                            
                           $data = array('upload_data' => $this->upload->data());
                           $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                             $this->session->set_flashdata('alert','Pengesahan anda sedang diproses');
                            
                             $this->Apartmentmodel->payments($this->upload->data(), $tahun, $paid, $emailx);
                            
                           	redirect('Register/login');
                            
                
                        }
        
        }
        
         public function manualpayments(){ 

                        	$tahun =  date("Y");
                        	$paid = 0;
                    		$emailx =$this->input->post('id');
                    		
                        $this->form_validation->set_rules('icpp','IC / passports','trim|required|min_length[10]');
                         $config['upload_path'] = './receipt/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '10000';
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $config['overwrite'] = TRUE;
                        $config['remove_spaces'] = TRUE;
                       
                    
                        $this->load->library('upload', $config);
                    
                        if ( (! $this->upload->do_upload() )&&($this->form_validation->run()== FALSE))
                        {
                            
                        	 $this->session->set_flashdata('error',($this->upload->display_errors())||(validation_errors()));
                            
                           redirect('Register/payment');
                            
                        }
                        else
                        {
                            
                           $data = array('upload_data' => $this->upload->data());
                           $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                             $this->session->set_flashdata('success','Pengesahan anda telah dimasukkans');
                            
                             $this->Apartmentmodel->payments($this->upload->data(), $tahun, $paid, $emailx);
                            
                           	redirect('Register/payment');
                            
                
                        }
        
        }
    public function viewpayments(){ 
                $paid['paid'] = 0;
             $paid['order'] = 't1.id desc';
            $data['payment'] = $this->Apartmentmodel->view_payments($paid);            
            $data['log_out']= "component/component_logout";
            $this->load->view('admin/viewpayments',$data);
        
        
        
        
        
        
    }
         public function upd8payments($idupd8, $iduser){ 
             
            //  echo $idupd8;
            //  echo $iduser;
             $monthx = date("F"); 
             $year = date("Y");
             $mont = (string)$monthx;
             $mont = strtolower($mont);
             $amaun = 80;
             
                $paid = 1;
            $this->Apartmentmodel->update_payments([
         	            
         	                     'paid' => $paid
                                
         	            
         	            
         	            
         	            ],$idupd8);
         	            
         	   $this->Apartmentmodel->bulan_payments([
         	                     
         	                     'tahun' => $year,
         	                      $mont => $amaun
         	                      
         	                      ],$iduser);    
         	  $this->Apartmentmodel->jumlah_daftar();
         	            
         	            
         	            $this->session->set_flashdata('alert','Berjaya !');
                    	redirect('Payment/viewpayments');
         
        
        
        
        
        
        
    }
    public function delete_payments($idupd8){ 
              
           $this->Apartmentmodel->delete_payments($idupd8);            
           redirect('Payment/viewpayments');
        
    }
        
        
       public function jumlah(){ 
               $data['log_out']= "component/component_logout";
           $this->load->view('admin/collections',$data);
        
    } 
         public function jumlah2(){ 
             
             	$tahun =$this->input->post('tahun');
             	$bulan =$this->input->post('bulan');
             	 $results=$this->Apartmentmodel->collections($tahun, $bulan);  
             	 $results2=$this->Apartmentmodel->paid_collections($tahun, $bulan);  
            //  	 echo $results2;
            //  	 echo $results;
             	 $this->session->set_flashdata('jumlah',$results);
             	  $this->session->set_flashdata('ahli',$results2);
             	  $this->session->set_flashdata('error','Tiada dalam database/rekod');
               redirect('Payment/jumlah');
        
         }
        
        
  }
    




?>