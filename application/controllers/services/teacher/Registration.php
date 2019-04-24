<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class registration extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {

                $this->response([
                    'Operation' => "error",
                    'Message' => 'Please Post Data'
                ], REST_Controller::HTTP_NOT_FOUND);
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'teacher_name',
                                 'label'   => 'teacher_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'teacher_email',
                                'label'     =>'teacher_email',
                                'rules'     =>'trim|xss_clean|required|is_unique[teacher.teacher_email]'
                              ),

                              array(
                                 'field'   => 'teacher_password',
                                 'label'   => 'teacher_password',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                            array(
                                'field'     =>'teacher_phone',
                                'label'     =>'teacher_phone',
                                'rules'     =>'trim|required|xss_clean|is_unique[teacher.teacher_phone]'
                              ),
                              array(
                                  'field'     =>'teacher_token',
                                  'label'     =>'teacher_token',
                                  'rules'     =>'trim|required|xss_clean'
                                )


                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {

                $valid = trim(validation_errors());


                  if($valid =='The teacher_email field must contain a unique value.'){

                      $error = array("status"=>"0","msg"=>"البريد الإلكترونى مسجل من قبل","data"=>null) ;
                      $this->set_response($error, REST_Controller::HTTP_OK);

                  }
                  elseif($valid =='The teacher_phone field must contain a unique value.'){

                      $error = array("status"=>"0","msg"=>"رقم الجوال مسجل من قبل","data"=>null) ;
                      $this->set_response($error, REST_Controller::HTTP_OK);

                  }
                  else{

                      $error = array("status"=>"0","msg"=>"البريد الإلكترونى و رقم الجوال مسجلان من قبل","data"=>null) ;
                      $this->set_response($error, REST_Controller::HTTP_OK);

                  }
                }else{

                  $digits=4;
                  $code =str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);


                       $result = array(
                            'teacher_name'=>$this->post('teacher_name'),
                            'teacher_email'=>$this->post('teacher_email'),
                            'teacher_phone'=>$this->post('teacher_phone'),
                            'teacher_password'=>md5($this->post('teacher_password')),
                            'teacher_token' => $this->post('teacher_token'),
                            'teacher_token_web' =>md5(uniqid(rand(), true)),
                            'teacher_code'=>$code,
                            'teacher_no_msg'=>'1',
                            'teacher_status' =>'deactive'

                        );



                  $inserdb = $this->MainModel->insertdata('teacher',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     $teacher = $this->MainModel->getwhere('teacher','teacher_id',$insert_id,'teacher_id ASC')[0];
                     unset($teacher['teacher_password']);
                     unset($teacher['teacher_token_web']);
                     unset($teacher['teacher_enterdate']);
                    $this->set_response(array("status"=>"1","msg"=>"تم التسجيل بنجاح","data"=>array("user"=>$teacher)), REST_Controller::HTTP_OK);

                  }else{

                        $error = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null) ;
                        $this->set_response($error, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
