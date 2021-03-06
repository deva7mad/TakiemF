<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class homework extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
          $id = $this->get('student_id');
          $homework_data = $this->MainModel->getwhere('homework','homework_student_id',$id,'homework_id ASC');
          if(!empty($homework_data)){
            $data = json_decode ("{}");
            $done = array("status"=>"1","msg"=>"بيانات الواجبات","data"=>$homework_data);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $data = json_decode ("{}");
            $done = array("status"=>"0","msg"=>"لا توجد لديك واجبات","data"=>$data);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'student_id',
                         'label'   => 'student_id',
                         'rules'   => 'trim|required|xss_clean'
                      )

                   ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
                  $delete_child = $this->MainModel->destroy('students','student_id',$this->post('student_id'));
                  if($delete_child){
                    $data = json_decode ("{}");
                    $done = array("status"=>"1","msg"=>"تم حذف البيانات بنجاح","data"=>$data);
                    $this->set_response($done, REST_Controller::HTTP_OK);

                  }
                  else{
                    $data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                    }

                }




}
?>
