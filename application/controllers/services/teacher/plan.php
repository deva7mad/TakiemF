<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class plan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     $teacher_id = $this->get('teacher_id');
     $plans = $this->MainModel->getwhere('plan','teacher_id',$teacher_id,'plan_id ASC');
     if(!empty($plans)){
       $this->set_response(array("status"=>"1","msg"=>"جميع الخطط الأسبوعية","data"=>array('plans'=>$plans)), REST_Controller::HTTP_OK);
     }else{
       $this->set_response(array("status"=>"0","msg"=>"لا يوجد لديك خطط اسبوعية","data"=>null), REST_Controller::HTTP_OK);
     }
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'plan_name',
                                 'label'   => 'plan_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                 'field'   => 'teacher_id',
                                 'label'   => 'teacher_id',
                                 'rules'   => 'trim|xss_clean|required'

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
                       $result = array(
                            'plan_name' =>$this->post('plan_name'),
                            'plan_enterdate' => date("Y-m-d h:i:sa"),
                            'teacher_id' =>$this->post('teacher_id')
                        );



                  $inserdb = $this->MainModel->insertdata('plan',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){


                    $period = $this->MainModel->getwhere('plan','plan_id',$insert_id,'plan_id ASC');
                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة خطة جديدة بنجاح","data"=>array('plan'=>$period)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
