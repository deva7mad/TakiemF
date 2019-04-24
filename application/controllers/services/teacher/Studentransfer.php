<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Studentransfer extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $group_id = $this->get('group_id');
        $get_data = $this->MainModel->getwhere('group_student','group_id',$group_id,'group_student_id ASC');
        if(!empty($get_data)){
            $this->set_response(array("status"=>"1","msg"=>"جميع الطلاب المقيدين بالمجموعة","data"=>array('students'=>$get_data)), REST_Controller::HTTP_OK);
        }
        else{
            $this->set_response(array("status"=>"0","msg"=>"لا يوجد طلاب فى هذه المجموعة","data"=>null), REST_Controller::HTTP_OK);
        }


    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'student_id',
                                 'label'   => 'student_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'group_to',
                                'label' => 'group_to',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'group_from',
                                'label' => 'group_from',
                                'rules' => 'trim|xss_clean|required'
                              )


                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {

                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{

                  $studentID = $this->post('student_id');
                  $groupFrom = $this->post('group_from');
                  if($studentID == '-1')
                  {
                    // public function updatedataarray($tablename,$arraywhere,$data)
                    $array1 = array(
                      'plan_group_idd' => $groupFrom
                     );
                    $up = array('plan_group_idd'=>$this->post('group_to'));
                    $update = $this->MainModel->updatedataarray('group_student',$array1,$up);
                    if($update){
                        $group = $this->MainModel->getwhere('group_student','plan_group_idd',$this->post('group_to'),'plan_student_group_id ASC');
                        $done = array("status"=>"1","msg"=>"تم نقل طلاب المجموعة إلى مجموعة جديدة","data"=>array('groups'=>$group));
                        $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                    else {
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  }else{
                    //public function updatedata($tablename,$key,$value,$data)
                    $up = array('plan_group_idd'=>$this->post('group_to'));
                    $array = array(
                      'plan_group_idd' => $groupFrom,
                      'plan_student_id' => $studentID
                    );
                    $update = $this->MainModel->updatedataarray('group_student',$array,$up);
                    if($update){
                        $group = $this->MainModel->getwhere('group_student','plan_group_idd',$groupFrom,'plan_student_group_id ASC');
                        $done = array("status"=>"1","msg"=>"تم نقل الطالب من المجموعة بنجاح","data"=>array('groups'=>$group));
                        $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                    else {
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                  }


                }
          }



}
?>
