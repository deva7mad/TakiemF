<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Days extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
      //getwherearrayselected($tablename,$data,$orderby,$selected)
        $student_id = $this->get('teacher_id');
        $school_id = $this->get('school_id');
        //$week_id = $this->get('_id');
        $day_id = $this->get('day_id');
        if(!empty($student_id)  AND empty($day_id) AND empty($school_id)){

          $new_data = array(
              array('plan_day_id'=>'1','plan_day'=>'الأحد'),
              array('plan_day_id'=>'2','plan_day'=>'الاثنين'),
              array('plan_day_id'=>'3','plan_day'=>'الثلاثاء'),
              array('plan_day_id'=>'4','plan_day'=>'الاربعاء'),
              array('plan_day_id' =>'5','plan_day'=>'الخميس')
            );

          if(!empty($student_id)){
            $done = array("status"=>"1","msg"=>"جميع أيام الأسبوع","data"=>array("days"=>$new_data));
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"برجاء إدخال كود المعلم","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
        }
        elseif(!empty($student_id) AND !empty($school_id) AND empty($day_id)){
          $select = array('plan_class','plan_classroom','plan_subject');
          $where = array('plan_teacher_id'=>$student_id , 'plan_school_id' =>$school_id);

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
            $done = array("status"=>"1","msg"=>"جميع الفصول لديك","data"=>array('classes' => $data2));
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا توجد لديك فصول","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }

        }

        elseif (!empty($student_id) AND !empty($day_id) AND empty($school_id)) {
          //$select = array('plan_period','plan_period_start','plan_period_end','plan_subject','plan_class','plan_classroom');
          $data = array('plan_teacher_id'=>$student_id,'plan_day_id'=>$day_id);
          $plans = $this->MainModel->getwherearray('teacher_plan',$data,'plan_id ASC');

          if(!empty($plans)){
            $done = array("status"=>"1","msg"=>"جميع الفترات لديك","data"=>array("plans"=>$plans));
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"لا توجد لديك فترات","data"=>null);
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
