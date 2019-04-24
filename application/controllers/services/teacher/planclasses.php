<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class planclasses extends REST_Controller
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
                                 'field'   => 'plan_id',
                                 'label'   => 'plan_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'day_name',
                                'label'=> 'day_name',
                                'rules'=> 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'subject_name',
                                'label'=> 'subject_name',
                                'rules'=> 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'class_name',
                                'label'=> 'class_name',
                                'rules'=> 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'period_name',
                                'label'=> 'period_name',
                                'rules'=> 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'section_name',
                                'label'=> 'section_name',
                                'rules'=> 'trim|xss_clean|required'
                              ),
                              array(
                                'field' =>'homework_type',
                                'label'=>'homework_type',
                                'rules'=>'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'homework_text',
                                'label' => 'homework_text',
                                'rules' => 'trim|xss_clean'
                              ),
                              array(
                                'field' => 'homework_url',
                                'label' => 'homework_url',
                                'rules' => 'trim|xss_clean'
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
                  //$valid = trim(validation_errors());
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
                  if($this->post('homework_type') == 1){
                    $result = array(
                         'plan_id' => $this->post('plan_id'),
                         'subject_name'=>$this->post('subject_name'),
                         'class_name' =>$this->post('class_name'),
                         'day_name' => $this->post('day_name'),
                         'period_name' => $this->post('period_name'),
                         'subject_name'=> $this->post('subject_name'),
                         'homework_type' => $this->post('homework_type'),
                         'homework_text' => $this->post('homework_text'),
                         'teacher_id' => $this->post('teacher_id')
                     );



               $inserdb = $this->MainModel->insertdata('c_plan',$result) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){


                 $period = $this->MainModel->getwhere('c_plan','c_plan_id',$insert_id,'c_plan_id ASC');
                 //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                 $this->set_response(array("status"=>"1","msg"=>"تم إضافة حصة جديدة بنجاح","data"=>array('class'=>$period)), REST_Controller::HTTP_OK);

               }else{
                 //$data = json_decode ("{}");
                 $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                 $this->set_response($done, REST_Controller::HTTP_OK);
               }

                  }elseif($this->post('homework_type') == 2){
                    $result = array(
                      'plan_id' => $this->post('plan_id'),
                      'subject_name'=>$this->post('subject_name'),
                      'class_name' =>$this->post('class_name'),
                      'day_name' => $this->post('day_name'),
                      'period_name' => $this->post('period_name'),
                      'subject_name'=> $this->post('subject_name'),
                      'homework_type' => $this->post('homework_type'),
                      'homework_url' => $this->post('homework_url'),
                      'teacher_id' => $this->post('teacher_id')
                     );



                     $inserdb = $this->MainModel->insertdata('c_plan',$result) ;
                     $insert_id = $this->db->insert_id();


                      if($inserdb){


                       $period = $this->MainModel->getwhere('c_plan','c_plan_id',$insert_id,'c_plan_id ASC');
                       //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                       $this->set_response(array("status"=>"1","msg"=>"تم إضافة حصة جديدة بنجاح","data"=>array('class'=>$period)), REST_Controller::HTTP_OK);

                     }else{
                       //$data = json_decode ("{}");
                       $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                     }
                  }


                }
          }



}
?>
