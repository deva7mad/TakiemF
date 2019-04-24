<?php
 
    class All_model extends CI_Model{
        
        /**
         * @pre
         */
        public function pre($array){
            echo '<pre>' ; 
            print_r($array) ;
            echo '</pre>' ;
        }
 
        /**
         * @get all from Db
         */
        public function get($tablename,$orderby){
            $this->db->order_by($orderby);
            $query = $this->db->get($tablename);
           return ($query->result_array() ? $query->result_array()  : false);
            
        }
        /**
         * @get - Where
         */
        public function getwhere($tablename,$key,$value,$orderby){
            $this->db->order_by($orderby);
            $query = $this->db->get_where($tablename,array($key=>$value));
            return ($query->result_array() ? $query->result_array() : false);
            
        }
         /**
         * @get - select
         */
        public function getselect($tablename,$data){
                      $this->db->select($data);
                      $this->db->distinct();
            $query =  $this->db->get($tablename);
            return ($query ? $query->result_array()  : false);
            
          }
         /**
         * @insert all to Db
         */
         public function insertdata($tablename,$data){
            $query = $this->db->insert($tablename,$data);
            return ($query ? true : false);
          }
          
         /**
         * @Update 
         */
         public function updatedata($tablename,$key,$value,$data){
            $this->db->where($key,$value);
            $query = $this->db->update($tablename,$data);
            return ($query ? true : false);
            
          }
          /**
         * @destroy 
         */
         public function destroy($tablename,$key,$value){
            $this->db->where($key,$value);
            $query = $this->db->delete($tablename);
            return ($query ? true : false);
            
          }
           /**
         * @count 
         */
         public function count($tablename,$column_name,$key,$value){
            $query = $this->db->query("SELECT COUNT($column_name) AS total FROM `$tablename` WHERE `$key` = '$value' ");
            return ($query ? $query->result_array() : false);
            
          }
              /**
         * @count 
         */
         public function countnotwhere($tablename,$column_name){
            $query = $this->db->query("SELECT COUNT($column_name) AS total FROM `$tablename` ");
            return ($query ? $query->result_array() : false);
            
          }
          /**
         * @login 
         */
         public function login($email, $password){
               $this -> db -> select('id','username','fname','lname','email','password','brithdate','gander');
               $this -> db -> from('site_users');
               $this -> db -> where('email', $email);
               $this -> db -> where('password', MD5($password));
               $this -> db -> limit(1);
             
               $query = $this -> db -> get();
             
               if($query -> num_rows() == 1)
               {
                 return $query->result();
               }
               else
               {
                 return false;
               }
             }
           /**
         * @is_logged_in 
         */
          public  function is_logged_in(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
                 redirect('login','refresh'); 
                die();      
               }       
            }
            
            
           /**
         * @Get all
         */   
              public function getFromDbWhereArray($tableName,$where_array,$stringOrderBy){
          $this->db->order_by($stringOrderBy);
            $query = $this->db->get_where($tableName,$where_array);
            return $query->result_array() ;
        }
           /**  * @join all
         */   
           public function jointable($tableName,$jointable,$wherejoin) {
                $this->db->select('*');
                $this->db->from($tableName);
                $this->db->join($jointable, $wherejoin);

                $query = $this->db->get();
                return $query->result_array() ;
            }
        
        
    }
	
?>