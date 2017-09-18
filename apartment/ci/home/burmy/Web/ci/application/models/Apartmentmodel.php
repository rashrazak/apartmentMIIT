
 <?php 

    class Apartmentmodel extends CI_Model{


        public function display_apartment($emailx , $passwordx){


            
            $this->db->where('emel', $emailx);
            $this->db->where('password', $passwordx);

            $result = $this->db->get('user');

            if($result->num_rows() == 1){

                return $result->row(0)->id;




            } else {

                return false;

            }
        

        }
        public function register_apartment($blockx, $floorx, $housenox){

            $query=$this->db->query("SELECT * FROM user WHERE block='$blockx' AND floor='$floorx'AND houseno ='$housenox'");//table name get from db class
            
            if($query->num_rows()>= 1){
            
            return false;}
            
            else{
            
            return true;
                
            }


            
        }
        public function tengok($user_id){


            $this->db->select('*');
            
            $this->db->where('id', $user_id);
            $query = $this->db->get('user');

            // $query = $this->db->query("SELECT * from daftar where id = '$userid'");

            return $query->result();

        }
         public function tengokCarta($user_id){


            $this->db->select('*');
            
            $this->db->where('id', $user_id);
            $query = $this->db->get('cartaorganisasi');

            // $query = $this->db->query("SELECT * from daftar where id = '$userid'");

            return $query->result();

        }


        public function daftar_apartment($blockx, $floorx, $housenox, $fnamex, $lnamex, $icppx, $hpx, $maybankx, $emailx , $passwordx){
            
        //$query=$this->db->query("INSERT INTO user ( emel, password, fname, binlname, hp, icpp, maybankaccount, dateregistered, block, floor, houseno ) VALUES ( '$emailx','$passwordx','$fnamex','$lnamex','$hpx','$icppx','$maybankx', NOW(),'$blockx','$floorx','$housenox')");
               
                    $query = array(
                    'emel' => $emailx,
                    'password' => $passwordx,
                    'fname' => $fnamex,
                    'binlname' => $lnamex,
                    'hp' => $hpx,
                    'icpp' => $icppx,
                    'hp' => $hpx,
                    'icpp' => $icppx,
                    'maybankaccount' => $maybankx,
                    // 'dateregistered' => ,
                    'block' => $blockx,
                    'floor' => $floorx,
                    'houseno' => $housenox
                    );
           
            //$this->db->set('dateregistered', 'NOW()', FALSE);
           $this->db->set('dateregistered', 'NOW()', FALSE);
              $this->db->insert('user', $query);
             $insert_id = $this->db->insert_id();
                    return  $insert_id;
            
            
           


        }
    public function update_apartment($data, $idx){
          
                             
                    $this->db->where('id',$idx);
                    $this->db->update('user',$data);
        
            }
            
            
    public function activity($params){
          
                   $this->db->select($params['fields']);
                   $this->db->order_by($params['order']);
                   $query=$this->db->get('aktiviti');
                   
                   return $query->result_array();
                
            }
    public function announce($image_data = array(),$aktivitix, $tarikhx, $tempatx, $catatanx){
          
                  $data = array(
                
                      'filename' => $image_data['file_name']
                  );
                  $query = array(
                      'aktiviti' => $aktivitix,
                      'tarikh' => $tarikhx,
                      'tempat' => $tempatx,
                      'catatan' => $catatanx,
                      'gambar' => $data['filename']
                      
                      
                      
                      );
                   $this->db->set('date', 'NOW()', FALSE);
                  $this->db->insert('aktiviti', $query);
                
            }
            
            
            public function viewactiv($params){
          
                   $this->db->select($params['fields']);
                   $this->db->limit($params['wher']);
                   $this->db->order_by($params['order']);
                   $query=$this->db->get('aktiviti');
                   
                   return $query->result_array();
                
            }
    
    
    
     public function payments($image_data = array(), $tahun, $paid, $idx){
                                           
        $data = array(
                
                      'filename' => $image_data['file_name']
                  );
                  
                                                 $monthx = date("F"); 
                                             $mont = (string)$monthx;
                                             $mont = strtolower($mont);
                  $query = array(
                      'iduser' => $idx,
                      'year' => $tahun,
                      'paid' => $paid,
                      'gambar' => $data['filename'],
                      'month' => $monthx
                      
                      
                      
                      );
                   $this->db->set('date', 'NOW()', FALSE);
                  $this->db->insert( 'payment', $query);
                
            }
             public function delete_payments( $idxx){
          
                             
                    $this->db->where('id',$idxx);
                    $this->db->delete('payment');
        
            }
            
             public function viewpayments($params){
                $setarray = array('iduser'=> $params['idx'], 'paid'=> $params['paid']);
                   $this->db->select($params['fields']);
                   $this->db->where($setarray);
                   $this->db->order_by($params['order']);
                   $query=$this->db->get('payment');
                   
                   return $query->result_array();
            
             }
             public function oldpayments($params){
                $setarray = array('iduser'=> $params['idx'], 'paid'=> $params['paid']);
                   $this->db->select('*');
                   $this->db->where($setarray);
                   $this->db->order_by($params['order']);
                   $query=$this->db->get('payment');
                   
                   return $query->result_array();
            
             }
             
             public function aktivitiupd8($user_id){


            $this->db->select('*');
            
            $this->db->where('id', $user_id);
            $query = $this->db->get('aktiviti');

            // $query = $this->db->query("SELECT * from daftar where id = '$userid'");

            return $query->result();

        }
         public function update_aktiviti($dataxx, $idx){
          
                             
                    $this->db->where('id',$idx);
                    $this->db->update('aktiviti',$dataxx);
        
            }
        
          public function delete_aktiviti( $idxx){
          
                             
                    $this->db->where('id',$idxx);
                    $this->db->delete('aktiviti');
        
            }
            
             public function delete_user( $idxx){
          
                             
                    $this->db->where('id',$idxx);
                    $this->db->delete('user');
        
            }
          public function view_payments($id){
          
                    $this->db->select(' t1.id t1id, t1.iduser t1iduser, t1.month t1month, t1.year t1year, t1.paid t1paid,
                                                t1.gambar t1gambar, t1.date t1date, t2.id t2id, t2.emel t2emel, t2.fname t2fname,
                                                t2.binlname t2binlname, t2.hp t2hp, t2.icpp t2icpp, t2.maybankaccount t2maybankaccount,
                                                t2.block t2block, t2.floor t2floor, t2.houseno t2houseno'); 
                    $this->db->from('payment as t1');
                    $this->db->join('user as t2','t1.iduser = t2.id');
                    $this->db->where('paid',$id['paid']);
                     $this->db->order_by($id['order']);
                    $query =$this->db->get();
                     return $query->result();
        
            }
              public function view_payments2($id){
          
                    $this->db->select(' t1.id t1id, t1.iduser t1iduser, t1.month t1month, t1.year t1year, t1.paid t1paid,
                                                t1.gambar t1gambar, t1.date t1date, t2.id t2id, t2.emel t2emel, t2.fname t2fname,
                                                t2.binlname t2binlname, t2.hp t2hp, t2.icpp t2icpp, t2.maybankaccount t2maybankaccount,
                                                t2.block t2block, t2.floor t2floor, t2.houseno t2houseno'); 
                    $this->db->from('payment as t1');
                    $this->db->join('user as t2','t1.iduser = t2.id');
                    $this->db->where('t1.iduser',$id);
                     $this->db->order_by('t1.id desc');
                    $query =$this->db->get();
                     return $query->result();
        
            }
        
         public function update_payments($data, $idx){
          
                             
                    $this->db->where('id',$idx);
                    $this->db->update('payment',$data);
        
            }
         public function bulan_payments($data, $idx){
          
                             
                    $this->db->where('userid',$idx);
                    $this->db->update('bulan',$data);
                    
        
            }
             public function bulan_daftar( $idx){
          
                    $data = array(
                        
                        'userid' => $idx,
                        'tahun' => date("Y")
                        
                        );         
                    $this->db->insert('bulan',$data);
                   // $this->db->update('bulan',$data);
                    
        
            }
        public function jumlah_daftar(){
                      $monthx = date("F"); 
                 $mont = (string)$monthx;
                 $mont = strtolower($mont);
                 $setarray = array('tahun'=> date("Y"), 'bulan'=> $mont);
                  $this->db->set('jumlah', 'jumlah+80', FALSE);
                    $this->db->where($setarray);
                    $this->db->update('total');
        
            }
            
            public function collections($tahun, $bulan){ 
                
                $this->db->select('jumlah');
                $setarray = array('tahun'=> $tahun, 'bulan'=> $bulan);
                 $this->db->where($setarray);
                  $query =$this->db->get('total');
                     return $query->row()->jumlah;
            }
             public function paid_collections($tahun, $bulan){ 
                
                $this->db->select('id');
                $setarray = array('year'=> $tahun, 'month'=> $bulan);
                 $this->db->where($setarray);
                  $query =$this->db->get('payment');
                     return $query->num_rows();
            }
        
        
        
        public function manualpayments(){
                $setarray = array( 'paid'=> 0);
                   $this->db->select('*');
                   $this->db->where($setarray);
                   $this->db->order_by('id desc');
                   $query=$this->db->get('payment');
                   
                   return $query->result_array();
            
             }
             //SEARCH USER  MODEL
               
        public function searchicpp($search){
                $this->db->select('*'); 
                    $this->db->from('user');
                    //$this->db->join('payment as t1','t1.iduser = t2.id');
                    //$mont = (string)$carian;
                    // $setarray = array( $mont=> $search);
                     
                    // $this->db->where($setarray);
                    
                    //$this->db->like(array('icpp' => $search));
                    $this->db->like('id' , $search);
                    $this->db->or_like('fname' , $search);
                     $this->db->or_like('binlname' , $search);
                    $this->db->order_by('id desc');
                    $query =$this->db->get();
                     return $query->result();
            //CARTA ORGANISASI MODEL
             }
              public function cartaLVL1(){
                $this->db->select('*'); 
                $this->db->where("id BETWEEN 1 AND 2");
               $query= $this->db->get("cartaorganisasi"); 
                return $query->result();
             }
              public function cartaLVL2(){
                $this->db->select('*'); 
                $this->db->where("id BETWEEN 3 AND 5");
               $query= $this->db->get("cartaorganisasi"); 
                return $query->result();
            
             }
              public function cartaLVL3(){
                $this->db->select('*'); 
                $this->db->where("id",6);
               $query= $this->db->get("cartaorganisasi"); 
                return $query->result();
            
             }
              public function cartaLVL4(){
                $this->db->select('*'); 
                $this->db->where("id BETWEEN 7 AND 10");
               $query= $this->db->get("cartaorganisasi"); 
                return $query->result();
            
             }
              public function cartaLVL5(){
                $this->db->select('*'); 
                $this->db->where("id BETWEEN 11 AND 13");
               $query= $this->db->get("cartaorganisasi"); 
                return $query->result();
            
             }
               public function cartaUpd8($namax, $jawatanx,$nohpx ,$idx){
                      
                  $query = array(
                      'nama' => $namax,
                      'jawatan' => $jawatanx,
                      'notelefon' => $nohpx
                      );
                   
                  
                    $this->db->where('id',$idx);
                    $this->db->update('cartaorganisasi',$query);
            
             }
             public function cartaUpd8Gambar($image_data = array(),$idx){
                       $data = array(
                
                      'filename' => $image_data['file_name']
                  );
                  
                  $query = array(
                     
                      'gambar' => $data['filename']
                      );
                   
                  
                    $this->db->where('id',$idx);
                    $this->db->update('cartaorganisasi',$query);
            
             }
             
             //BUDGET MODEL
             
           
              public function budgetBulanIni($tahun, $bulan){ 
                
                $this->db->select('jumlah');
                $setarray = array('tahun'=> $tahun, 'bulan'=> $bulan);
                 $this->db->where($setarray);
                  $query =$this->db->get('total');
                     return $query->row()->jumlah;
            }
            public function budgetdebitTotal( $perkara,$results){
          
                    $data = array(
                        
                        'perkara' => $perkara,
                        'jumlah' => $results
                        
                        );         
                    $this->db->insert('debitTambah',$data);
        }
         public function budgetkreditTotal( $perkara,$results){
          
                    $data = array(
                        
                        'perkara' => $perkara,
                        'jumlah' => $results
                        
                        );         
                    $this->db->insert('kreditTolak',$data);
        }
         public function showbudget1( ){
          
                     $this->db->select('*'); 
               
               $query= $this->db->get("debitTambah"); 
                return $query->result();
        }
        public function showbudget2( ){
          
                     $this->db->select('*'); 
               
               $query= $this->db->get("kreditTolak"); 
                return $query->result();
        }
        public function AduanMasuk( $perkara,$results){
          
                    $data = array(
                        
                        'perkara' => $perkara,
                        'status' => $results,
                        
                        
                        
                        );         
                    $this->db->insert('aduan',$data);
        }
        public function AduanTengok( ){
          
                  
                     $this->db->select('*'); 
               $this->db->order_by('id desc');
               $query= $this->db->get("aduan"); 
                return $query->result();
        }
         public function AdminUser( ){
          
                  $monthx = date("m"); 
                     $this->db->select('*'); 
               $this->db->where('MONTH(dateregistered)',$monthx);
               $query= $this->db->get("user"); 
                return $query->num_rows();
        }
         public function AdminPay( ){
          
                  $monthx = date("F"); 
                     $this->db->select('*'); 
               $this->db->where('month',$monthx);
               $query= $this->db->get("payment"); 
                return $query->num_rows();
        }
         public function AdminAduan( ){
          
               
                     $this->db->select('*'); 
               $query= $this->db->get("aduan"); 
                return $query->num_rows();
        }
        
    }



?>