<?php

    class MainModel extends CI_Model{
    /*    function __construct()
{
    // Call the Model constructor
    parent::__construct();
    $this->db->query("SET time_zone='+2:00'");
}*/

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
        public function getwherelimitpage($tablename,$key,$value,$orderby,$start){
            $this->db->order_by($orderby);
            if(isset($start) AND !empty($start)){ //$this->db->limit($limit);
              $this->db->limit(2,$start);
            }
            $query = $this->db->get_where($tablename,array($key=>$value));
            return ($query->result_array() ? $query->result_array() : false);
            //$this->db->select('*');
        //$this->db->from('posts');
        //this->db->where('user-id', $uid);

        //$data = $this->db->get();
        //return $data->result();

        }
        public function getlimitwhereselectedoffsetcustomer($tableName,$where,$searcharray,$selected,$merchantcat,$offersubcat,$order,$start) {

          $this->db->select($selected);
         $this->db->order_by($order);
         //$this->db->from($tableName);

         foreach($searcharray as $key=>$value){
         if(empty($merchantcat) AND empty($offersubcat))
         {
           $this->db->or_like($key,$valeu,'both');
         }
         elseif (!empty($merchantcat) AND empty($offersubcat)) {
           $this->db->or_like($key,$value,'both');
           $this->db->where('offer_merchant_category',$merchantcat);

         }
         elseif(!empty($merchantcat) AND !empty($offersubcat))
            {
                $this->db->or_like($key,$value,'both');
                $this->db->where('offer_merchant_category',$merchantcat);
                $this->db->where('offer_category',$offersubcat);
            }
         }
         //$data = $this->db->get();
         $data = $this->db->get_where($tableName,$where);
         $row  = $data->num_rows();
          if($data){
             $data1 = array_slice($data->result_array(),$start,10);
          }

          return array("number"=>$row,"date"=>$data1);
    }
    public function getlimitwhereselectedoffsetempty($tableName,$where,$selected,$order,$start) {
$this->db->select($selected);
$this->db->order_by($order);
//$this->db->from($tableName);
// $this->db->where($key,$value);
$this->db->limit(10,$start);
$data = $this->db->get_where($tableName,$where);
$row  = $data->num_rows();
return array("number"=>$row,"data"=>$data->result_array());
}
  /**
         * @get - Where array LIMIT
         */
        public function getwherearraylimit($tablename,$data = array(),$orderby,$limit){
            $this->db->order_by($orderby);
            if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
             $query = $this->db->get_where($tablename,$data);
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

        /* get where between */


        /*  public function nearest_places($tablename,$data,$where){
              /* $this->db->from($tablename);

               $this->db->where("merchant_x BETWEEN '$data['min_x']' AND '$data['max_x']'");
               $this->db->where("merchant_y BETWEEN '$data['min_y']' AND '$data['max_y']'");

               $query = $this->db->get_where($tablename,$where);

               return ($query->result_array() ? $query->result_array() : false);
             }
*/
              public function getwherebetween($tablename,$value1,$value2,$value3,$value4,$where){
               /*$this->db->from($tablename); */
               /*$this ->db-> where('Email', $data['Email']);  */
               $this->db->where("merchant_x BETWEEN '$value1' AND '$value2' ");
               $this->db->or_where("merchant_y BETWEEN '$value3' AND '$value4'");
              /* $this->db-> limit(1); */
               /*$query = $this->db-> get();*/
                if(isset($where) AND !empty($where)){ $query = $this->db->get_where($tablename,$where); }
                else{$this->db->from($tablename);

                $query = $this->db-> get();}


               return ($query->result_array() ? $query->result_array() : false);
             }


        /* get where between */

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
          public function getselectwherenew($tablename,$data,$wherekey,$wherevalue){
                        $this->db->select($data);
                        //$this->db->distinct();
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
             /* print_r($query);
                              return; */
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
        


           public function destroywherearray($tablename,$arraywhere){
               $this->db->where($arraywhere);
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
         * @count
         */
          public function countwherearray($tablename,$column_name,$wherestring){
            $query = $this->db->query("SELECT COUNT($column_name) AS total FROM `$tablename` WHERE $wherestring ");
            return ($query ? $query->result_array() : false);

          }


          /**
         * @login
         */
         public function login($tablename,$data){
               $this ->db-> from($tablename);
               $this ->db-> where('Username', $data['Username']);
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
         /*public function login('khs_merchant',$data){
             $this->db->from('khs_merchant');
             $this->db->where('merchant_mobile',$data['merchant_mobile']);
             $this->db->where('merchant_password',$data['merchant_password']);
             $this->db->limit(1);
             $query = $this->db->get();
             if($query-> num_rows() == 1)
             {
                 return $query->result_array();

             }
             else{
                 return false;
             }
         } */
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

              public function loginmerchant($tablename,$merchantMobile,$merchantPassword){
               $this ->db-> from($tablename);
               $this ->db-> where('merchant_mobile', $merchantMobile);
               $this ->db-> where('merchant_password', MD5($merchantPassword));
               $this ->db-> where('merchant_status', 'active');
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

             public function logincustomer($tablename,$customerMobile,$customerPassword){
               $this ->db-> from($tablename);
               $this ->db-> where('customer_mobile', $customerMobile);
               $this ->db-> where('customer_password', MD5($customerPassword));
               //$this ->db-> where('merchant_status', 'active');
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
             public function loginteacher($tablename,$teacheremail,$teacherpassword){
               $this ->db-> from($tablename);
               $this ->db-> where('teacher_email', $teacheremail);
               $this ->db-> where('teacher_password', MD5($teacherpassword));
               //$this ->db-> where('merchant_status', 'active');
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
         * @is_logged_in_merchant
         */
          public  function is_logged_in_merchant(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in_merchant');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
                 redirect('Auth','refresh');

               }
            }
              /**
         * @is_logged_in_merchant _and back to login page
         */
          public  function is_logged_in_back_merchant(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in_merchant');
               if(isset($is_logged_in)){
                       redirect('admin_merchant/Home','refresh');
                }
            }

          public  function is_logged_in_new_merchant(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in_new_merchant');
               if(!isset($is_logged_in) || $is_logged_in != true)
               {
                 redirect('Auth','refresh');

               }
            }
              /**
         * @is_logged_in_merchant _and back to login page
         */
          public  function is_logged_in_back_new_merchant(){
            $CI =& get_instance();
            $is_logged_in = $CI->session->userdata('Is_logged_in_new_merchant');
               if(isset($is_logged_in)){
                       redirect('merchant/Home','refresh');
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



            public function jointablewhere($tableName,$jointable,$select,$wherejoin,$where,$limit) {
                $this->db->select($select);
                $this->db->from($tableName);
                if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
                $this ->db->where($where);
                $this->db->join($jointable, $wherejoin);
                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }


            public function joinlefttablewhere($tableName,$jointable,$select,$wherejoin,$where) {
               $this->db->select($select);
               $this->db->from($tableName);
                $this ->db->where($where);
               $this->db->join($jointable, $wherejoin, 'right');

              /* $this->db->group_by('tbl_process_csv.csv_file_id');   */
            /*   $this->db->order_by('tbl_process_csv.date_of_processing', 'desc');   */
               $query = $this->db->get();
               return $query->result();
            }

               public function jointablewhereorder($tableName,$jointable,$select,$wherejoin,$where,$orderby) {
                $this->db->select($select);
                $this->db->from($tableName);
                if(isset($orderby) AND !empty($orderby)){  $this->db->order_by($orderby); }
                $this ->db->where($where);
                $this->db->join($jointable, $wherejoin);
                $query = $this->db->get();
                return ($query->result_array() ? $query->result_array()  : false);
            }

            public function join3tablewhere($tableName,$jointable,$jointable2,$select,$wherejoin,$wherejoin2,$limit,$where,$orderby) {
                $this->db->select($select);
                $this->db->from($tableName);
                if(isset($limit) AND !empty($limit)){ $this->db->limit($limit);  }
                $this ->db->where($where);
                $this->db->join($jointable, $wherejoin);
                $this->db->join($jointable2, $wherejoin2);
                 if(isset($orderby) AND !empty($orderby)){  $this->db->order_by($orderby); }
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
            public function searchnew($tableName,$key,$value,$select){
              $this->db->select($select);
              $this->db->from($tableName);
              $this->db->like($key,$value,'both');
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
                              $this->db->like($key,$value,'before');
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->or_like($key,$value,'before');
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
                              $this->db->like($key,$value,'before');
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->like($key,$value,'before');
                        }

                    }
                  }
                  public function searchteacher($tableName,$data,$value,$select,$data1,$data2,$data3)
                     {
                         // Use the Active Record class for safer queries.
                         $this->db->select($select);
                         $this->db->from($tableName);
                         if(empty($data1) AND empty($data2) AND empty($data3)){
                           $this->db->or_like($data,$value,'both');
                         }
                         elseif(!empty($data1) AND empty($data2) AND empty($data3)){
                           $this->db->or_like($data,$value,'both');
                           $this->db->where('school_id',$data1);
                         }
                         elseif (!empty($data1) AND !empty($data2) AND empty($data3)) {
                           $this->db->or_like($data,$value,'both');
                           $this->db->where('school_id',$data1);
                           $this->db->where('class_id',$data2);
                         }
                         elseif (!empty($data1) AND !empty($data2) AND !empty($data3)) {
                           $this->db->or_like($data,$value,'both');
                           $this->db->where('school_id',$data1);
                           $this->db->where('class_id',$data2);
                           $this->db->where('class_subject',$data3);
                         }
                         elseif (empty($data1) AND !empty($data2) AND !empty($data3)) {
                           $this->db->or_like($data,$value,'both');
                           $this->db->where('class_id',$data2);
                           $this->db->where('class_subject',$data3);
                         }
                         elseif (empty($data1) AND empty($data2) AND !empty($data3)) {
                           $this->db->or_like($data,$value,'both');
                           $this->db->where('class_subject',$data3);
                         }
                      // Execute the query.
                      $query = $this->db->get();
                      return ($query->result_array() ? $query->result_array()  : false);
                  }

                public function searcharrayboth($tableName,$searcharray,$select)
                   {
                       // Use the Active Record class for safer queries.
                       $this->db->select($select);
                       $this->db->from($tableName);
                       $first =  false;
                       foreach($searcharray as $key=>$value){
                       if ($first)
                           {
                                 $this->db->like($key,$value,'both');
                               // do something
                               $first = false;
                           }
                           else
                           {
                              $this->db->like($key,$value,'both');
                           }

                       }
                    // Execute the query.
                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }
                public function searchspecific($tableName,$title){
                  $query = $this->db->query("SELECT `offer_id`,`offer_desc`,`offer_photo`,`offer_status`,`offer_title`,COUNT(`offer_title`) AS total FROM `$tableName` WHERE `offer_title` LIKE '%$title%' GROUP BY `offer_title`");
                  return ($query ? $query->result_array():false);
                }
                public function sara($tableName,$title){
                  $query = $this->db->query("SELECT `offer_id`,`offer_desc`,`offer_photo`,`offer_status`,`offer_title` FROM `$tableName` WHERE `offer_title` LIKE '%$title%'");

                  $query->result_array();
                  $row = $query->num_rows();
                  return array("number"=>$row,"query"=>$query->result_array());


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
                              $this->db->like($key,$value,'before');
                            // do something
                            $first = false;
                        }
                        else
                        {
                           $this->db->or_like($key,$value,'before');
                        }

                    }

                    // Execute the query.
                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }


               /*omar*/
              public function searcharrayjoinwhere($tableName,$jointable,$wherejoin,$searcharray,$select,$wherearray)
                {
                    // Use the Active Record class for safer queries.
                    $this->db->select($select);
                    $this->db->from($tableName);
                     $this ->db->where($wherearray);
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
                           $this->db->like($key,$value);
                        }

                    }

                    $query = $this->db->get();
                    return ($query->result_array() ? $query->result_array()  : false);
                }

    }

?>
