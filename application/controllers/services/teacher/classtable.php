<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class classtable extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {

                $this->response([
                    'Operation' => "error",
                    'Message' => 'Please Post Data'
                ], REST_Controller::HTTP_NOT_FOUND);
    }
         public function index_post()
          {

            $config = array(
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

                  $data ;
                   $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                }else{

                  $teacher_id = $this->post('teacher_id');
                  if(!empty($teacher_id)){
                    $data = array(
                      "status" => "1",
                      "msg" => "جدول الحصص لدى المعلم",
                      "data" => array(
                        "week" =>array(  'day' => "sunday",
                          'periods'=>array(
                            array(
                            'period_name'=>'الأولى',
                          'period_start_time'=>'06:45',
                          'period_end_time'=>'07:30',
                          'class_name'=>'خامس ج',
                          'class_id'=>'1',
                          'class_subject'=>'علوم'),
                          array(
                          'period_name'=>'الأولى',
                        'period_start_time'=>'06:45',
                        'period_end_time'=>'07:30',
                        'class_name'=>'خامس ج',
                        'class_id'=>'1',
                        'class_subject'=>'علوم')

                        ))

                    );
                       $this->set_response($data, REST_Controller::HTTP_OK);
                  }
                  else{
                    $error = array("status" =>"0","msg"=>"لا توجد حصص ","data"=>null);
                    $this->set_response($error, REST_Controller::HTTP_OK);
                  }


                }
          }



}
?>
