<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class dashboard extends REST_Controller
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
                  //$data = [];
                  if(!empty($teacher_id)){
                    $data = array(
                      "status" => "1",
                      "msg" => "جميع بيانات المعلم",
                      "data" => array(
                        "number_of_schools" => "4",
                        "number_of_classes"=>"35",
                        "number_of_school_classes" =>"8",
                        "number_of_students" => "240",
                        "classes" =>array(
                        array(
                          "type" => "yesterday",
                        "class_id" => "11",
                        "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                        "class_name" => "ابتدائى / خامس / ج / علوم",
                        "period" => "الاولى"
                      ),
                      array(
                        "type" => "yesterday",
                      "class_id" => "11",
                      "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                      "class_name" => "ابتدائى / خامس / ج / علوم",
                      "period" => "الاولى"
                    ),
                    array(
                      "type" => "yesterday",
                    "class_id" => "11",
                    "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                    "class_name" => "ابتدائى / خامس / ج / علوم",
                    "period" => "الاولى"
                  ),
                  array(
                    "type" => "yesterday",
                  "class_id" => "11",
                  "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                  "class_name" => "ابتدائى / خامس / ج / علوم",
                  "period" => "الاولى"
                ),
                        array(
                          "type" => "today",
                          "class_id" => "11",
                          "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                          "class_name" => "ابتدائى / خامس / ج / علوم",
                          "period" => "الاولى"
                        ),
                        array(
                          "type" => "today",
                        "class_id" => "11",
                        "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                        "class_name" => "ابتدائى / خامس / ج / علوم",
                        "period" => "الاولى"
                      ),
                      array(
                        "type" => "today",
                      "class_id" => "11",
                      "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                      "class_name" => "ابتدائى / خامس / ج / علوم",
                      "period" => "الاولى"
                    ),
                    array(
                      "type" => "today",
                    "class_id" => "11",
                    "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                    "class_name" => "ابتدائى / خامس / ج / علوم",
                    "period" => "الاولى"
                  ),
                        array(
                          "type" => "tomorrow",
                        "class_id" => "11",
                        "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                        "class_name" => "ابتدائى / خامس / ج / علوم",
                        "period"=>"الاولى"
                      ),
                      array(
                        "type" => "tomorrow",
                      "class_id" => "11",
                      "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                      "class_name" => "ابتدائى / خامس / ج / علوم",
                      "period" => "الاولى"
                    ),
                    array(
                      "type" => "tomorrow",
                    "class_id" => "11",
                    "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                    "class_name" => "ابتدائى / خامس / ج / علوم",
                    "period" => "الاولى"
                  ),
                  array(
                    "type" => "tomorrow",
                  "class_id" => "11",
                  "school_name"=> "دار البراء الابتدائية الاهلية للبنين",
                  "class_name" => "ابتدائى / خامس / ج / علوم",
                  "period" => "الاولى"
                )
                    )


                      )
                    );
                    $done = array("status" =>"1","msg"=>"بيانات المعلم","data"=>$data);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                  }
                  else{
                    $error = array("status" =>"0","msg"=>"عفوا لا توج بيانات لهذا المعلم","data"=>null);
                    $this->set_response($error, REST_Controller::HTTP_OK);
                  }


                }
          }



}
?>
