<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class activate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     // Set the response and exit
                $this->response([
                    'Operation' => "error",
                    'Message' => 'Please Post Data'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
    }

        public function index_post()
          {


            $config = array(

                              array(
                                 'field'   => 'teacher_token',
                                 'label'   => 'teacher_token',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                              array(
                                'field'  => 'teacher_code',
                                'label'  => 'teacher_code',
                                'rules' =>  'trim|required|xss_clean'
                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {

                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{


                 $result = array(
                            'teacher_no_msg'=>'0',
                            'teacher_status'=>'active', // inactive / active
                            'teacher_token'=>$this->post('teacher_token')
                        );
                $datawhere = array(
                  'teacher_token' => $this->post('teacher_token'),
                  'teacher_code' => $this->post('teacher_code')

                );
                  $updatedate = $this->MainModel->updatedataarray('teacher',$datawhere,$result) ;

                  $teacher = $this->MainModel->getwherearray('teacher',$datawhere, 'teacher_id ASC') ;
                  if($updatedate AND $teacher AND !empty($teacher[0])){
                       unset($teacher[0]['teacher_password']);

                         unset($teacher[0]['teacher_enterdate']);

                         unset($teacher[0]['teacher_token_web']);
                        $done = array("status"=>"1","msg"=>"تم تفعيل الحساب بنجاح","data"=>array("user"=>$teacher[0])) ;
                        $this->set_response($done, REST_Controller::HTTP_OK);
                }else{

                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                        $this->set_response($done, REST_Controller::HTTP_OK);
                  }



                }
          }



}
?>
