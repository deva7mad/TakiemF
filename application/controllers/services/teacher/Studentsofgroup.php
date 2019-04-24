<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Studentsofgroup extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {

        $student_id = $this->get('teacher_id');
        $group_id = $this->get('group_id');

      if(!empty($student_id)){

          $where = array('plan_teacher_id'=>$student_id,'plan_group_id'=>$group_id);
          $select = array('plan_student_group_id','plan_type','plan_group_code','plan_group_id',
          'plan_school_id','plan_school_name','plan_class','plan_classroom','plan_subject',
        'plan_teacher_id','student_id','student_name','student_parent_id','student_country');
          $data = $this->MainModel->getselectwherearray('students_details',$select,$where);
          //unset($data["plan_group_idd"]);
          //unset($data["plan_school_name"]);
          //unset($data["plan_subject"]);
          if(!empty($data)){

          //  unset($data["plan_group_idd"]);

            $done = array("status"=>"1","msg"=>"جميع الطلاب بالمجموعة","data"=>array('students' => $data));
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد طلاب بهذه المجموعة","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }

        }




    }
 public function index_post()
 {



                }




}
?>
