<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class addplansdetails extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     $teacher_id = $this->get('teacher_id');
     $week_id = $this->get('week_id');
     $day_id = $this->get('day_id');
     $array = array(
       'plan_week_id' => $week_id,
       'plan_teacher_id'=> $teacher_id,
       'plan_day_id' => $day_id
     );

     $details = $this->MainModel->getwherearray('plans_teacher',$array,'');
     if(!empty($details)){
       $done = array("status"=>"1","msg"=>"جميع تفاصيل الخطط الاسبوعية","data"=>array('details'=>$details));
       $this->set_response($done,REST_Controller::HTTP_OK);
     }else{
       $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك خطط","data"=>null);
        $this->set_response($done,REST_Controller::HTTP_OK);
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
                         'field'   => 'plan_week_id',
                         'label'   => 'plan_week_id',
                         'rules'   => 'trim|xss_clean|required'
                      ),
                      array(
                           'field'   => 'plan_period_id',
                           'label'   => 'plan_period_id',
                           'rules'   => 'trim|xss_clean|required'
                        ),
                      array(
                           'field'   => 'plan_day_id',
                           'label'   => 'plan_day_id',
                           'rules'   => 'trim|xss_clean|required'
                        ),
                      array(
                           'field'   => 'plan_day',
                           'label'   => 'plan_day',
                           'rules'   => 'trim|xss_clean|required'
                        ),

                            array(
                                 'field'   => 'plan_school_id',
                                 'label'   => 'plan_school_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'plan_school_name',
                                'label'     =>'plan_school_name',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'plan_class',
                                 'label'   => 'plan_class',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
							  array(
                                 'field'   => 'plan_classroom',
                                 'label'   => 'plan_classroom',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
							  array(
                                 'field'   => 'plan_subject',
                                 'label'   => 'plan_subject',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                               'field'   => 'plan_teacher_id',
                                               'label'   => 'plan_teacher_id',
                                               'rules'   => 'trim|xss_clean|required'

                                            ),
                                            array(
                                              'field' => 'plan_homework_type',
                                              'label' => 'plan_homework_type',
                                              'rules' => 'trim|xss_clean|required'
                                            ),
                                            array(
                                              'field' =>'plan_homewok_details',
                                              'label' => 'plan_homewok_details',
                                              'rules'=> 'trim|xss_clean|required'
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
                            'plan_week_id'=>$this->post('plan_week_id'),
                            'plan_week'=>$this->post('plan_week'),
                            'plan_period'=>$this->post('plan_period'),
                            'plan_day_id'=>$this->post('plan_day_id'),
                            'plan_day'=>$this->post('plan_day'),
                            'plan_subject'=>$this->post('plan_subject'),
                            'plan_details'=>$this->post('plan_details'),
                            'plan_start_time'=>$this->post('plan_start_time'),
                            'plan_end_time'=>$this->post('plan_end_time'),
                            'plan_class'=>$this->post('plan_class'),
                            'plan_classroom'=>$this->post('plan_classroom'),
                            'plan_school_id'=>$this->post('plan_school_id'),
                            'plan_school_name'=>$this->post('plan_school_name'),
                            'plan_homework_type'=>$this->post('plan_homework_type'),
                            'plan_homewok_details'=>$this->post('plan_homewok_details'),
                            'plan_teacher_id'=>$this->post('plan_teacher_id')
                        );




                  $inserdb = $this->MainModel->insertdata('plans_teacher',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    $group = $this->MainModel->getwhere('plans_teacher','plan_id',$insert_id,'plan_id ASC')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة الخطة بنجاح","data"=>array('plan'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
