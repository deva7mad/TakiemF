<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class group extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $teacher_id = $this->get('teacher_id');
        $groups = $this->MainModel->getwhere('group_takiem','group_teacher_id',$teacher_id,'group_id ASC');
        if(!empty($groups)){
          $done = array("status"=>"1","msg"=>"جميع المجموعات المضافة للمدرس","data"=>array("groups"=>$groups));
          $this->set_response($done, REST_Controller::HTTP_OK);
        }
        else{
          $done = array("status"=>"0","msg"=>"لا توجد مجموعات للمدرس","data"=>null);
          $this->set_response($done, REST_Controller::HTTP_OK);
        }
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'plan_group_id',
                                 'label'   => 'plan_group_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'plan_student_id',
                                'label'     =>'plan_student_id',
                                'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                'field'     =>'plan_student_name',
                                'label'     =>'plan_student_name',
                                'rules'     =>'trim|xss_clean'
                              ),

                              array(
                                 'field'   => 'plan_type',
                                 'label'   => 'plan_type',
                                 'rules'   => 'trim|xss_clean'

                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                  $type = $this->post('plan_type');
                  if($type == '1'){ // name
                    $data = array(
                      'group_id' => $this->post('plan_group_id'),
                      'group_student_name' => $this->post('plan_student_name')
                    );
                    $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                    $insert_id = $this->db->insert_id();
                    if($inserdb)
                    {
                      $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                      unset($group['group_student_code']);
                      unset($group['group_link']);
                      unset($group['group_code']);
                      $this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>array("student"=>$group)), REST_Controller::HTTP_OK);
                    }
                    else{
                      //$data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  }
                  elseif ($type == '2') { // code
                    $data = array(
                      'plan_group_idd' => $this->post('plan_group_id'),
                      'plan_student_id' => $this->post('plan_student_id'),
                      'plan_type' => $type
                    );
                    $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                    $insert_id = $this->db->insert_id();
                    if($inserdb)
                    {
                      $group = $this->MainModel->getwhere('group_student','plan_student_group_id',$insert_id,'plan_student_group_id ASC')[0];

                      $this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>array("student"=>$group)), REST_Controller::HTTP_OK);
                    }
                    else{
                      //$data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  }
                  elseif ($type == '3') { // excel
                    $data = array(
                      'group_id' => $this->post('group_id'),
                      'group_link' => $this->post('group_link'),
                      'group_type' => $type
                    );
                    $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                    $insert_id = $this->db->insert_id();
                    if($inserdb)
                    {
                      $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                      unset($group['group_student_name']);
                      unset($group['group_student_code']);
                      unset($group['group_code']);
                      $this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>array("student"=>$group)), REST_Controller::HTTP_OK);
                    }
                    else{
                      //$data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  }
                  /*elseif ($type == 'group') {
                    $data = array(
                      'group_id' => $this->post('group_id'),
                      'group_link' => $this->post('group_link')
                    );
                    $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                    $insert_id = $this->db->insert_id();
                    if($inserdb)
                    {
                      $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                      $this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>$group), REST_Controller::HTTP_OK);
                    }
                    else{
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>[]);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  } */

                }
          }



}
?>
