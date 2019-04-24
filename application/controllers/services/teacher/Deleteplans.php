<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class deleteplans extends REST_Controller
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
                                 'field'   => 'plan_id',
                                 'label'   => 'plan_id',
                                 'rules'   => 'trim|xss_clean|required'
                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  ///$data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{


                  $updatedata = $this->MainModel->destroy('plans_teacher','plan_id',$this->post('plan_id'));
                  if($updatedata)
                  {
                    //$group = $this->MainModel->getwhere('group_student','group_student_id',$this->post('group_student_id'),'group_id ASC');
                    $done = array("status"=>"1","msg"=>"تم حذف الخطة","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }
                  else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
