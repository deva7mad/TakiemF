<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class search extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_code = $this->get('code');
    //  $school_name = $this->get('school');
    //  $class_name = $this->get('class');
    //  $class_subject = $this->get('subject');
      $select  = array(
                    "teacher_id",
                    "teacher_name",
                    "teacher_email",
                    "teacher_phone",
                    "teacher_token"
                      );

            //searchteacher($tableName,$data,$value,$select,$data1,$data2,$data3)
            //getselectwhere($tablename,$data,$wherekey,$wherevalue)
        $teacher[0] = $this->MainModel->getselectwhere('teacher_school',$select,'teacher_id',$teacher_code);
        if(!empty($teacher[0])){
          $selected = array('school_id','school_name','school_government','school_administration','school_stage','school_type','school_sector');
          //$selected2 = array('group_id','group_school_name','group_stage','group_class','group_subject');
          $school = $this->MainModel->getselectwhere('teacher_school',$selected,'teacher_id',$teacher_code);
          //$groups = $this->MainModel->getselectwhere('group_takiem',$selected2,'group_teacher_id',$teacher_code);
        //  $all_data = array_merge($teacher[0][0],$shool,$groups);
      //  print_r(array_merge($teacher[0],$school,$groups));
        //return;
          $done = array("status"=>"1","msg"=>"بيانات المدرس","data"=>(object)array_merge($teacher[0][0],array("schools"=>$school))) ;
         $this->set_response($done, REST_Controller::HTTP_OK);
        }
        else{
          $data = json_decode ("{}");
          $done = array("status"=>"0","msg"=>"لا يوجد نتائج للبحث","data"=>$data);
          $this->set_response($done, REST_Controller::HTTP_OK);
        }



    }

        public function index_post()
          {



          }



}
?>
