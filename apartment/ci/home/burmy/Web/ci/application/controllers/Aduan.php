<?php
class Aduan extends CI_Controller{
    
    public function insertAduan(){
        
         $data['log_out']= "component/component_logout";
            $this->load->view('insertAduan',$data);
     
    }
    public function insertAduan2(){
        
        	$this->form_validation->set_rules('aduan','ADUAN','trim|required');
 	
 			$this->form_validation->set_rules('tarikh','TARIKH','trim|required');
 				$this->form_validation->set_rules('aktiviti','AKTIVITI','trim|required');
 				
 				//TAMBAHAN nama
 			//	$this->form_validation->set_rules('nama','NAMA','trim|required');
 			//$this->form_validation->set_rules('rumah','RUMAH','trim|required');
 				
        //$verif = "admin";
 		if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata

 			redirect('Aduan/insertAduan');
        
 		} else {
         
         $aduan =$this->input->post('aduan');
            $status = 0;
             
             
            
            
           $tarikh =$this->input->post('tarikh');
            $aktiviti =$this->input->post('aktiviti');
            $perkara = "Aduan mengenai: ".$aduan. "<br> Bertarikh: ".$tarikh. 
            "<br> Untuk Aktiviti: ".$aktiviti;
            
            
          
            
            $perkara2 = (string)$perkara;
            $this->Apartmentmodel->AduanMasuk($perkara2,$status);
            $this->session->set_flashdata('success','Aduan berjaya dikemaskini'); 
            redirect('Aduan/insertAduan');
 		}}
 		 public function viewAduan(){
 		     
 		     
          $data['activ']=$this->Apartmentmodel->AduanTengok(); 
         $data['log_out']= "component/component_logout";
            $this->load->view('admin/viewAduan',$data);
     
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}