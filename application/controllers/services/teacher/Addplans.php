<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class addplans extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_id = $this->get('teacher_id');
      $plans = $this->MainModel->getwhere('plan','plan_teacher_id',$teacher_id,'');
      if(!empty($plans)){
        $done = array("status"=>"1","msg"=>"جميع الخطط الأسبوعية لديك","data"=>array('plans'=>$plans));
        $this->set_response($done,REST_Controller::HTTP_OK);
      }
      else{
        $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك خطط","data"=>null);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'plan_week',
                                 'label'   => 'plan_week',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'plan_teacher_id',
                                'label'     =>'plan_teacher_id',
                                'rules'     =>'trim|xss_clean|required'
                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$data = json_decode ("{}");
                  $valid = trim(validation_errors());
                  print_r($valid);
                  return;
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                       $result = array(
                            'plan_week'=>$this->post('plan_week'),
                            'plan_teacher_id'=>$this->post('plan_teacher_id'),


                        );



                  $inserdb = $this->MainModel->insertdata('plan',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    $group = $this->MainModel->getwhere('plan','plan_week_id',$insert_id,'plan_week_id ASC')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة خطة جديدة بنجاح","data"=>array('plans'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
