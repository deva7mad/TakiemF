<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class profile extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
          $id   = $this->get('teacher_id');
			   $teacher = $this->MainModel->getwhere('teacher','teacher_id',$id, 'teacher_id ASC') ;
			   if(!empty($teacher[0])){
           unset($teacher[0]['teacher_password']);
           unset($teacher[0]['teacher_token_web']);
           unset($teacher[0]['teacher_enterdate']);
          $this->set_response(array("status"=>"1","msg"=>"بيانات المعلم","data"=>array('user'=>$teacher[0])), REST_Controller::HTTP_OK);

				  }
				  else{

            $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);
				  }
    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'teacher_id',
                         'label'   => 'teacher_id',
                         'rules'   => 'trim|required|xss_clean'
                      ),
					  array(
                         'field'   => 'teacher_name',
                         'label'   => 'teacher_name',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'teacher_phone',
                         'label'   => 'teacher_phone',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'teacher_email',
                         'label'   => 'teacher_email',
                         'rules'   => 'trim|xss_clean'
                      ),



                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                   $done = array('Operation'=>"Validation");
                       $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
				$teacher_data = $this->MainModel->getwhere('teacher','teacher_id',$this->post('teacher_id'),'teacher_id ASC');
				$Name = $this->post("teacher_name");
               $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $teacher_data[0]['teacher_name'];
			   $Phone = $this->post("teacher_phone");
               $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $teacher_data[0]['teacher_phone'];

			   $Email = $this->post("teacher_email");
               $Email_u  =  (isset($Email) AND !empty($Email) ) ? $Email : $teacher_data[0]['teacher_email'];
				$arrayupdate =array(
					'teacher_name' => $Name_u,
					'teacher_phone' => $Phone_u,
					'teacher_email' => $Email_u
				);



                $update = $this->MainModel->updatedata('teacher','teacher_id' ,$this->post('teacher_id'),$arrayupdate);
                if($update){
                  $teacherdata = $this->MainModel->getwhere('teacher','teacher_id',$this->post('teacher_id'),'teacher_id ASC');
              
                  unset($teacherdata[0]['teacher_password']);
                  unset($teacherdata[0]['teacher_token_web']);
                  unset($teacherdata[0]['teacher_enterdate']);
                  $done = array("status"=>"1","msg"=>"تم تحديث البيانات بنجاح","data"=>array('user'=>$teacherdata[0]));
                   $this->set_response($done, REST_Controller::HTTP_OK);
                }
                else {
                  $error =array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى ","data"=>null);
                   $this->set_response($error, REST_Controller::HTTP_OK);
                }
                }
          }



}
?>
