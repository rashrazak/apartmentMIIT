<?php

class Bajet extends CI_Controller {
    
    public function bajetshow (){
        
             $monthx = date("F"); 
             $mont = (string)$monthx;
             $mont = strtolower($mont);
        
        $data['log_in']= "component/login_component";
        //$this->load->view('admin/budget_view',$data);
        $lastday = date('Y-m-t');
        $today = date('Y-m-d');
        
       if ($lastday == $today){
            
                         $monthx = date("F"); 
                         $montx = (string)$monthx;
                         $mont = strtolower($montx);
                         $yea = date("Y");
                         $perkara = "Bayaran tahun ".$yea."bulan ".$montx;
                         $perkara2 = (string)$perkara;
                        $results= $this->Apartmentmodel->budgetBulanIni($yea, $mont);
                       $this->Apartmentmodel->budgetdebitTotal($perkara,$results);
      }
        
    }
    
    
    
    
    public function uploadbajet(){
             
           $data['log_out']= "component/component_logout";
            $this->load->view('admin/insertbudget',$data);
    
    }
     public function uploadbajet2(){
         
         	$this->form_validation->set_rules('sumber','Sumber','trim|required');
 		$this->form_validation->set_rules('diterima','AMAUN','trim|required');
 			$this->form_validation->set_rules('tarikh','TARIKH','trim|required');
 				$this->form_validation->set_rules('aktiviti','AKTIVITI','trim|required');
        //$verif = "admin";
 		if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata

 			redirect('Bajet/uploadbajet');


 		} else {
         
         $sumber =$this->input->post('sumber');
          $jumlah =$this->input->post('diterima');
           $tarikh =$this->input->post('tarikh');
            $aktiviti =$this->input->post('aktiviti');
            $perkara = "Sumber Melalui: ".$sumber. "<br> Bertarikh: ".$tarikh. 
            "<br> Dengan Jumlah Sebanyak : ".$jumlah."<br> Untuk Aktiviti: ".$aktiviti;
            $perkara2 = (string)$perkara;
            $this->Apartmentmodel->budgetdebitTotal($perkara2,$jumlah);
            $this->session->set_flashdata('success','Amaun berjaya dikemaskini'); 
            redirect('Bajet/uploadbajet');
    }}
      public function uploadcost (){
             
          $data['log_out']= "component/component_logout";
            $this->load->view('admin/insertkredit',$data);
    
    }
     public function uploadcost2 (){
             
          	$this->form_validation->set_rules('sumber','Sumber','trim|required');
 		$this->form_validation->set_rules('diterima','AMAUN','trim|required');
 			$this->form_validation->set_rules('tarikh','TARIKH','trim|required');
 				$this->form_validation->set_rules('aktiviti','AKTIVITI','trim|required');
        //$verif = "admin";
 		if($this->form_validation->run()== FALSE ){

 			$data = array('errors' => validation_errors());

 			$this->session->set_flashdata($data); //set_userdata

 			redirect('Bajet/uploadcost');


 		} else {
         
         $sumber =$this->input->post('sumber');
          $jumlah =$this->input->post('diterima');
           $tarikh =$this->input->post('tarikh');
            $aktiviti =$this->input->post('aktiviti');
            $perkara = "Disahkan Melalui: ".$sumber. "<br> Bertarikh: ".$tarikh. 
            "<br> Dengan Jumlah Sebanyak : ".$jumlah."<br> Untuk Aktiviti: ".$aktiviti;
            $perkara2 = (string)$perkara;
            $this->Apartmentmodel->budgetkreditTotal($perkara2,$jumlah);
            $this->session->set_flashdata('success','Amaun berjaya dikemaskini'); 
            redirect('Bajet/uploadcost');
 		}
    }
    public function showbajet(){
            
            $data['activ']=$this->Apartmentmodel->showbudget1(); 
            $data['results']=$this->Apartmentmodel->showbudget2(); 
           $data['log_out']= "component/component_logout";
            $this->load->view('admin/budget_view',$data);
    
    }
}


