<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class resetpassword extends REST_Controller
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
                         'field'   => 'parent_email',
                         'label'   => 'parent_email',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                       array(
                         'field'   => 'parent_password',
                         'label'   => 'parent_password',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                      array(
                          'field'     =>'parent_token',
                          'label'     =>'parent_token',
                          'rules'     =>'trim|required|xss_clean'
                        )

                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $data ;
                   $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                       $this->set_response($done, REST_Controller::HTTP_OK);

                }else{

                $teacher_email = $this->MainModel->getwhere('father','parent_email',$this->post('parent_email'),'parent_id ASC');
                if(empty($teacher_email[0])){
                  $data = json_decode ("{}");
                  //$data;
                  $done = array("status"=>"0","msg"=>"عفوا لا توجد بيانات لولى الامر","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }
                else{
                  $update_data = array(
                    'parent_password' => md5($this->post('parent_password'))
                  );
                  $update =$this->MainModel->updatedata('father','parent_email',$this->post('parent_email'),$update_data);
                  if($update){
                    unset($teacher_email[0]['parent_password']);
                    unset($teacher_email[0]['parent_token_web']);
                    unset($teacher_email[0]['parent_enterdate']);
                    $done = array("status"=>"1","msg"=>"تم تغيير كلمة المرور بنجاح","data"=>$teacher_email[0]);
                     $this->set_response($done, REST_Controller::HTTP_OK);
                  }
                  else{
                    $data = json_decode("{}");
                    $error = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                     $this->set_response($error, REST_Controller::HTTP_OK);
                  }

              }
          }
}
}
?>
