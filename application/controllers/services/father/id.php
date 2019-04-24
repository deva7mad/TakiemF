<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class id extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $code = md5(uniqid());
        print_r($code);
        return;

    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'parent_name',
                                 'label'   => 'parent_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'parent_email',
                                'label'     =>'parent_email',
                                'rules'     =>'trim|xss_clean|required|is_unique[father.parent_email]'
                              ),

                              array(
                                 'field'   => 'parent_password',
                                 'label'   => 'parent_password',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                            array(
                                'field'     =>'parent_phone',
                                'label'     =>'parent_phone',
                                'rules'     =>'trim|required|xss_clean|is_unique[father.parent_phone]'
                              ),
                              array(
                                  'field'     =>'parent_token',
                                  'label'     =>'parent_token',
                                  'rules'     =>'trim|required|xss_clean'
                                )



                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$error = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>[]) ;
                  //$this->set_response($error, REST_Controller::HTTP_OK);
                  $valid = trim(validation_errors());
                  //  print_r($valid);
                  //  return;
                  $data = json_decode ("{}");
                    if($valid =='The parent_email field must contain a unique value.'){
                        //Message => mobile >> 1
                        $error = array("status"=>"0","msg"=>"البريد الإلكترونى مسجل من قبل","data"=>$data) ;
                        $this->set_response($error, REST_Controller::HTTP_OK);

                    }
                    elseif($valid =='The parent_phone field must contain a unique value.'){
                        //Message => mobile >> 1
                        $error = array("status"=>"0","msg"=>"رقم الجوال مسجل من قبل","data"=>$data) ;
                        $this->set_response($error, REST_Controller::HTTP_OK);

                    }
                  else{    //Message => mobile >> 1
                        $error = array("status"=>"0","msg"=>"البريد الإلكترونى و رقم الجوال مسجلان من قبل","data"=>$data) ;
                        $this->set_response($error, REST_Controller::HTTP_OK);

                    }

                }else{



                  $digits=4;
                  $code =str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

                       $result = array(
                            'parent_name'=>$this->post('parent_name'),
                            'parent_email'=>$this->post('parent_email'),
                            'parent_phone'=>$this->post('parent_phone'),
                            'parent_password'=>md5($this->post('parent_password')),
                            'parent_token' => $this->post('parent_token'),
                            'parent_token_web' =>md5(uniqid(rand(), true)),
                            'parent_code'=>$code,
                            'parent_no_msg'=>'1',
                            'parent_status' =>'deactive'

                        );



                  $inserdb = $this->MainModel->insertdata('father',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     $parent = $this->MainModel->getwhere('father','parent_id',$insert_id,'parent_id ASC')[0];
                     unset($parent['parent_password']);
                     unset($parent['parent_token_web']);
                     unset($parent['parent_enterdate']);
                    $this->set_response(array("status"=>"1","msg"=>"تم التسجيل بنجاح","data"=>$parent), REST_Controller::HTTP_OK);
                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);

                  }else{
                    $data = json_decode ("{}");
                    $error = array("status"=>"0","msg"=>"","data"=>$data) ;
                    $this->set_response($error, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
