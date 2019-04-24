<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class login extends REST_Controller
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
                         'field'   => 'teacher_email',
                         'label'   => 'teacher_email',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                       array(
                         'field'   => 'teacher_password',
                         'label'   => 'teacher_password',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                      array(
                          'field'     =>'teacher_token',
                          'label'     =>'teacher_token',
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

                $teacher_email = $this->MainModel->getwhere('teacher','teacher_email',$this->post('teacher_email'),'teacher_id ASC');
                if(empty($teacher_email[0])){

                  $done = array("status"=>"0","msg"=>"عفواٌ هذا البريد الإلكترونى غير مسجل","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }
                else{
                 $data = array(
                            'teacher_email'=>$this->post('teacher_email'),
                            'teacher_password'=>md5($this->post('teacher_password')),

							                   );

                  $teacher = $this->MainModel->getwherearray('teacher',$data, 'teacher_id ASC') ;
                  //unset($teacher[0]['teacher_password']);
                  //unset($teacher[0]['teacher_token_web']);
                  //unset($teacher[0]['teacher_enterdate']);
                  if(!empty($teacher[0]) AND $teacher[0]['teacher_status'] == 'active' AND $teacher[0]['teacher_token']==$this->post('teacher_token')){
                    unset($teacher[0]['teacher_password']);
                    unset($teacher[0]['teacher_token_web']);
                    unset($teacher[0]['teacher_enterdate']);
                         $done = array("status"=>"1","msg"=>"تم تسجيل الدخول بنجاح","data"=>array("user"=>$teacher[0])) ;
                         $this->set_response($done, REST_Controller::HTTP_OK);
				                 }
                elseif (!empty($teacher[0]) AND $teacher[0]['teacher_token']!=$this->post('teacher_token')) {
                           $token = array(
                             'teacher_token'=>$this->post('teacher_token')
                           );
                           $updatetoken = $this->MainModel->updatedataarray('teacher',$data,$token);
                           if($updatetoken){
                           $teacher1 = $this->MainModel->getwherearray('teacher',$data, 'teacher_id ASC') ;
                               unset($teacher1[0]['teacher_password']);
                             unset($teacher1[0]['teacher_token_web']);
                             unset($teacher1[0]['teacher_enterdate']);
                             $done = array("status"=>"1","msg"=>"تم تسجيل الدخول بنجاح","data"=>array("user"=>$teacher1[0])) ;
                             $this->set_response($done, REST_Controller::HTTP_OK);
                           }
                           else{

                                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                                      $this->set_response($done, REST_Controller::HTTP_OK);
                                    }

                         }


				         else{
                   $data;
					            $done = array("status"=>"0","msg"=>"برجاء التأكد من كلمة المرور","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
				             }
                }
              }
          }



}
?>
