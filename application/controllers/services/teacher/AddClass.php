<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class addclass extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     // Set the response and exit
                $this->response([
                    'Operation' => "error",
                    'Message' => 'Please Post Data'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'plan_day_id',
                                 'label'   => 'plan_day_is',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'plan_day',
                                'label'     =>'plan_day',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'plan_period',
                                 'label'   => 'plan_period',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
							  array(
                                 'field'   => 'plan_period_start',
                                 'label'   => 'plan_period_start',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                'field' => 'plan_period_end',
                                'label' => 'plan_period_end',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'plan_subject',
                                'label' => 'plan_subject',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'plan_class',
                                'label' => 'plan_class',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'plan_classroom',
                                'label' => 'plan_classroom',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'plan_teacher_id',
                                'label' => 'plan_teacher_id',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'=> 'plan_school_id',
                                'label'=> 'plan_school_id',
                                'rules'=>'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'plan_school_name',
                                'label' => 'plan_school_name',
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
                       $result = array(
                            'plan_day_id'=>$this->post('plan_day_id'),
                            'plan_day'=>$this->post('plan_day'),
                            'plan_period'=>$this->post('plan_period'),
							              'plan_period_start'=>$this->post('plan_period_start'),
                            'plan_period_end'=> $this->post('plan_period_end'),
                            'plan_subject' => $this->post('plan_subject'),
                            'plan_class' => $this->post('plan_class'),
                            'plan_classroom' => $this->post('plan_classroom'),
                            'plan_teacher_id' => $this->post('plan_teacher_id'),
                            'plan_school_id' => $this->post('plan_school_id'),
                            'plan_school_name' =>$this->post('plan_school_name')

                        );



                  $inserdb = $this->MainModel->insertdata('teacher_plan',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                     $class = $this->MainModel->getwhere('teacher_plan','plan_id',$insert_id,'plan_id ASC')[0];
                     $this->set_response(array("status"=>"1","msg"=>"تمت إضافة الحصة بنجاح","data"=>array('class'=>$class)), REST_Controller::HTTP_OK);
                  }else{

                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
