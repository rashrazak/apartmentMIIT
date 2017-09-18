<?php class Announcement extends CI_Controller{
        
        
        public function view(){
             
           
            $this->load->view('admin/uploadannounce');
            
            
        }
        
          
            function resize($path,$file){
                $config['image_library']='gd2';
                $config['source_image']=$path ;
                $config['create_thumb']=FALSE ;
                $config['maintain_ratio']=TRUE ;
                $config['width']=500 ;
                $config['height']=700 ;
                $config['new_image']='./uploads/'.$file ;
                
                $this->load->library('image_lib',$config);
                $this->image_lib->resize();
            }
            
    
        public function announce(){
            $this->form_validation->set_rules('aktiviti','Aktiviti','required');
 		    $this->form_validation->set_rules('tarikh', 'Tarikh', 'required|matches[password1]');
            $this->form_validation->set_rules('tempat', 'Tempat ', 'required');
            $this->form_validation->set_rules('Catatan', 'catatan', 'required');
            
            	$aktivitix =$this->input->post('aktiviti');
            	$tarikhx =$this->input->post('tarikh');
        		$tempatx =$this->input->post('tempat');
    			$catatanx =$this->input->post('catatan');
    
            if($this->form_validation->run()== FALSE ){

 			$data4 = array('errors' => validation_errors());

 			$this->session->set_flashdata($data4); //set_userdata

                        
                         $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '1000';
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $config['overwrite'] = TRUE;
                        $config['remove_spaces'] = TRUE;
                        $data1['log_out']= "component/component_logout";
                    
                        $this->load->library('upload', $config);
                    
                        if ( ! $this->upload->do_upload())
                        {
                             $this->session->set_flashdata('success','Succesfully Added');
                        
                            $this->load->view('admin/uploadannounce');
                            
                        }
                        else
                        {
                            $dat = $this->session->set_userdata('success','Succesfully Added');
                           $data = array('upload_data' => $this->upload->data());
                           $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                            $data = $this->session->set_flashdata('success','Succesfully Added');
                            
                            $this->load->view('admin/uploadannounce');
                   
                
                
                        }
                            $dat = $this->session->set_flashdata('success','Succesfully Added');
                          $this->Apartmentmodel->announce($this->upload->data(), $aktivitix, $tarikhx, $tempatx, $catatanx); 
                            
                
                        
    
        }
    
}

}




?>