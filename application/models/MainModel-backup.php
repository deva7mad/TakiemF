<?php

    class MainModel extends CI_Model{

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
         * @get all Limit from Db
         */
        public function getLimit($tablename,$orderby,$limit){
            $this->db->order_by($orderby);
            $this->db->limit($limit);
            $query = $this->db->get($tablename);
           return ($query->result_array() ? $query->result_array()  : false);
            
        }
          /**
         * @get all Limit from Db
         */
        public function getLimitSelected($tablename,$orderby,$limit,$selected){
            $this->db->order_by($orderby);
             $this->db->select($selected);
            $this->db->limit($limit);
            $query = $this->db->get($tablename);
           return ($query->result_array() ? $query->result_array()  : false);
            
        }
        /**
         * @get - Where
         */
        public function getwhere($tablename,$key,$value,$orderby){
            $this->db->order_by($orderby);
            /*$this->db->limit(2);*/
            $query = $this->db->get_where($tablename,array($key=>$value));
            return ($query->result_array() ? $query->result_array() : false);
            
        }
           /**
         * @get - Where LIMIT
         */
        public function getwherelimitSelected($tablename,$key,$value,$orderby,$limit,$selected){
            $this->db->order_by($orderby);
            $this->db->select($selected);
            if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
            $query = $this->db->get_where($tablename,array($key=>$value));
            return ($query->result_array() ? $query->result_array() : false);
            
        }
          /**
         * @get - where selected
         */
        public function getwherearrayselected($tablename,$data,$orderby,$selected){
            $this->db->order_by($orderby);
            $this->db->select($selected);
            $query = $this->db->get_where($tablename,$data);
            return ($query->result_array() ? $query->result_array() : false);
            
        }
        
           /**
         * @get - Where LIMIT
         */
        public function getwherelimit($tablename,$key,$value,$orderby,$limit){
            $this->db->order_by($orderby);
            if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
            $query = $this->db->get_where($tablename,array($key=>$value));
            return ($query->result_array() ? $query->result_array() : false);
            
        }
        
        /**
         * @get - Where Array
         */
        public function getwherearray($tablename,$data = array(),$orderby){
            $this->db->order_by($orderby);
            $query = $this->db->get_where($tablename,$data);
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
         * @get - select getselectorder
         */
        public function getselectorder($tablename,$data,$orderby){
                      $this->db->order_by($orderby);
                      $this->db->select($data);             
                      $this->db->distinct();
            $query =  $this->db->get($tablename);
            return ($query ? $query->result_array()  : false);
            
          }
          
          
           /**
         * @get - select
         */
        public function getselectwhere($tablename,$data,$wherekey,$wherevalue){
                      $this->db->select($data);
                      $this->db->distinct();
                      $this ->db->where($wherekey,$wherevalue);
            $query =  $this->db->get($tablename);
            return ($query ? $query->result_array()  : false);
            
          }
             /**
         * @get - select array where array
         */
        public function getselectwherearray($tablename,$dataselect,$datawhere){
                      $this->db->select($dataselect);
                      $this->db->distinct();
                      $this ->db->where($datawhere);
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
         * @Update array
         */
         public function updatedataarray($tablename,$arraywhere,$data){
            $this->db->where($arraywhere);
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
         public function countnowhere($tablename,$column_name,$key,$value){
            $query = $this->db->query("SELECT COUNT($column_name) AS total FROM `$tablename` WHERE `$key` = '$value' ");
            return ($query ? $query->result_array() : false);
            
          }
           /**
         * @count 
         */
         public function sumnowherearray($tablename,$column_name,$wherestring){
            
            $query = $this->db->query("SELECT SUM($column_name) AS total FROM `$tablename` WHERE $wherestring ");
            
            return ($query ? $query->result_array() : false);
            
          }
           /**
         * @count 
         */
         public function count($tablename,$column_name){
            $query = $this->db->query("SELECT COUNT($column_name) AS total FROM `$tablename`");
            return ($query ? $query->result_array() : false);
            
          }
          /**
         * @login 
         */
         public function login($tablename,$data){
               $this ->db-> from($tablename);
               $this ->db-> where('Email', $data['Email']);
               $this ->db-> where('Password', MD5($data['Password']));
               $this->db-> limit(1);
               $query = $this->db-> get();
             
               if($query -> num_rows() == 1)
               {
                 return $query->result_array();
               }
               else
               {
                 return false;
               }
             }
         /**
          *      /**
         * @login Admin
         */
         public function loginadmin($tablename,$Username,$password){
               $this ->db-> from($tablename);
               $this ->db-> where('Username', $Username);
               $this ->db-> where('Password', MD5($password));
               $this ->db-> where('IsActive', '1');
               $this->db-> limit(1);
               $query = $this->db-> get();
             
               if($query -> num_rows() == 1)
               {
                 return $query->result_array();
               }
               else
               {
                 return false;
               }
             }
        /**
          *      /**
         * @permission Admin
         */
          public  function permission($vars){
             $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in');
            $Role_id = $CI->session->userdata('Role_id');
               if(isset($is_logged_in))
               {               
               
                    if(!in_array($Role_id,$vars)){
                              redirect('Auth','refresh');  
                                die();                        
                                                         
                        }
               
              
               
               }      
            }
              /**
           /**
         * @is_logged_in 
         */
          public  function is_logged_in(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
                 redirect('Auth','refresh'); 
                    
               }       
            }
              /**
         * @is_logged_in _and back to login page
         */
          public  function is_logged_in_back(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in');
               if(isset($is_logged_in)){
                       redirect('admin/Home','refresh');
                }
            }
            
           /**
         * @Get all
         */   
              public function getFromDbWhereArray($tableName,$where_array,$stringOrderBy){
                  $this->db->order_by($stringOrderBy);
                    $query = $this->db->get_where($tableName,$where_array);
                    return ($query->result_array() ? $query->result_array()  : false);
            }
            
             /**
         * @join all
         */   
           public function jointable($tableName,$jointable,$wherejoin) {
                $this->db->select('*');
                $this->db->from($tableName);
                $this->db->join($jointable, $wherejoin);

                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }
             public function jointablename($tableName,$jointable,$select,$wherejoin,$limit) {
                $this->db->select($select);
                if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
                $this->db->from($tableName);
                $this->db->join($jointable, $wherejoin);
              
                

                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }
             public function join3table($tableName,$jointable,$jointable2,$select,$wherejoin,$wherejoin2,$limit) {
                $this->db->select($select);
                $this->db->from($tableName);
                if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
                $this->db->join($jointable, $wherejoin);
                $this->db->join($jointable2, $wherejoin2);
                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }
            public function join3tablewhere($tableName,$jointable,$jointable2,$select,$wherejoin,$wherejoin2,$limit,$where) {
                $this->db->select($select);
                $this->db->from($tableName);
                if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
                $this ->db->where($where);
                $this->db->join($jointable, $wherejoin);
                $this->db->join($jointable2, $wherejoin2);
                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }
               public function search($tableName,$like,$search_term)
            {
                // Use the Active Record class for safer queries.
                $this->db->select('*');
                $this->db->from($tableName);
                $this->db->like($like,$search_term);
        
                // Execute the query.
                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }
               public function searcharray($tableName,$searcharray,$select)
                {
                    // Use the Active Record class for safer queries.
                    $this->db->select($select);
                    $this->db->from($tableName);
                    $first =  false;
                    foreach($searcharray as $key=>$value){
                    if ( $first )
                        {
                              $this->db->like($key,$value);
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->or_like($key,$value);
                        }

                    }

                    // Execute the query.
                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }
                 public function searcharrayand($tableName,$searcharray,$select)
                {
                    // Use the Active Record class for safer queries.
                    $this->db->select($select);
                    $this->db->from($tableName);
                    $first =  false;
                    foreach($searcharray as $key=>$value){
                    if ( $first )
                        {
                              $this->db->like($key,$value);
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->like($key,$value);
                        }
                      
                    }
                    
                    // Execute the query.
                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }



                public function searcharrayjoin($tableName,$jointable,$wherejoin,$searcharray,$select)
                {
                    // Use the Active Record class for safer queries.
                    $this->db->select($select);
                    $this->db->from($tableName);
                    $this->db->join($jointable, $wherejoin);
                    $first =  false;
                    foreach($searcharray as $key=>$value){
                    if ( $first )
                        {
                              $this->db->like($key,$value);
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->or_like($key,$value);
                        }

                    }

                    // Execute the query.
                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }
        
    }
	
?>