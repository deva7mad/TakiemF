<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class addgroup extends REST_Controller
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
                            'plan_school_id'=>$this->post('plan_school_id'),
                            'plan_school_name'=>$this->post('plan_school_name'),
                            'plan_class'=>$this->post('plan_class'),
							              'plan_classroom'=>$this->post('plan_classroom'),
							              'plan_subject'=>$this->post('plan_subject'),
                            'plan_teacher_id' =>$this->post('plan_teacher_id')

                        );



                  $inserdb = $this->MainModel->insertdata('group_takiem',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    $group = $this->MainModel->getwhere('group_takiem','plan_group_id',$insert_id,'plan_group_id ASC')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة المجموعة بنجاح","data"=>array('group'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
