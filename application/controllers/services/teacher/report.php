<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class report extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $teacher_id = $this->get('teacher_id');
        $reports = $this->MainModel->getwhere('report','teacher_id',$teacher_id,'report_id ASC');
        if(!empty($reports)){
          $this->set_response(array("status"=>"1","msg"=>"جميع التقارير لديك","data"=>array('report'=>$reports)), REST_Controller::HTTP_OK);

        }
        else{
          $this->set_response(array("status"=>"0","msg"=>"ليس لديك تقارير","data"=>null), REST_Controller::HTTP_OK);

        }
    }
         public function index_post()
          {

            $config = array(
                        array(
                          'field'=>'report_title',
                          'label'=>'report_title',
                          'rules'=>'trim|xss_clean|required'
                        ),
                        array(
                          'field' => 'report_class',
                          'label' => 'report_class',
                          'rules' => 'trim|xss_clean|required'
                        ),
                        array(
                          'field' => 'report_subject',
                          'label' => 'report_subject',
                          'rules' => 'trim|xss_clean|required'
                        ),
                         array(
                           'field' => 'report_student_id',
                           'label' => 'report_student_id',
                           'rules' => 'trim|xss_clean|required'
                         ),
                         array(
                           'field' => 'report_tab_type',
                           'label' => 'report_tab_type',
                           'rules' => 'trim|xss_clean|required'
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
                  $valid = trim(validation_errors());
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($valid, REST_Controller::HTTP_OK);

                }else{

                    $result = array(
                      'report_title' => $this->post('report_title'),
                       'report_class' => $this->post('report_class'),
                         'report_subject' => $this->post('report_subject'),
                          'report_student_id' => $this->post('report_student_id'),

                          'report_tab_type' => $this->post('report_tab_type'),
                          'teacher_id' => $this->post('teacher_id')



                     );



               $inserdb = $this->MainModel->insertdata('report',$result) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){


                 $period = $this->MainModel->getwhere('report','report_id',$insert_id,'report_id ASC');
                 //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                 $this->set_response(array("status"=>"1","msg"=>"تم إضافة تقرير بنجاح","data"=>array('report'=>$period)), REST_Controller::HTTP_OK);

               }else{
                 //$data = json_decode ("{}");
                 $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                 $this->set_response($done, REST_Controller::HTTP_OK);
               }




                }
          }



}
?>
