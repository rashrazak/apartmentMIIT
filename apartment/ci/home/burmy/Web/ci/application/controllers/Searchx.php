<?php 


class Searchx extends CI_Controller{
    
     public function pagecarian(){
         	$search =$this->input->post('search');
         	$search2 =$this->input->post('carian');
          $data['payment'] = $this->Apartmentmodel->searchicpp($search); 
         $data['log_out']= "component/component_logout";
       $this->load->view('admin/carian',$data);
        
        
        
        
    }
    public function caripayment($id){
      
           
            $data['results'] = $this->Apartmentmodel->view_payments2($id); 
             $data['log_out']= "component/component_logout";
            if($data['results']== false){
                
                    echo "<h1 style='color:red'>No data or payment made on this user</h1>";
            }else{
            $this->load->view('admin/viewpayments2',$data);
            }
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}



?>