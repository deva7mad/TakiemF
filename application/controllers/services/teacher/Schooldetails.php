<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class schooldetails extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
      //getwherearrayselected($tablename,$data,$orderby,$selected)
        $student_id = $this->get('teacher_id');

      if(!empty($student_id)){

          $where = array('plan_teacher_id'=>$student_id);
          $data = $this->MainModel->getwherearray('group_takiem',$where,'plan_group_id ASC');
          foreach ($data as $key => $value) {
            $data2[]= array(
              'plan_group_id'=>$value['plan_group_id'],
              'plan_school_id'=>$value['plan_school_id'],
              'plan_school_name'=>$value['plan_school_name'],
              'plan_class'=>$value['plan_class'],
              'plan_classroom'=>$value['plan_classroom'],
              'plan_subject'=>$value['plan_subject'],
              'plan_teacher_id'=>$value['plan_school_id'],
              'group_name' => $value['plan_school_name']."/".$value['plan_class']."/".$value['plan_classroom']."/".$value['plan_subject']
            );
          }
          if(!empty($data)){
            $done = array("status"=>"1","msg"=>"جميع الفصول لديك","data"=>array('schools' => $data2));
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا توجد لديك فصول","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }

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
