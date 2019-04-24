<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class group extends REST_Controller
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
                                 'field'   => 'group_id',
                                 'label'   => 'group_id',
                                 'rules'   => 'trim|xss_clean'
                              ),

                              array(
                                 'field'   => 'student_name',
                                 'label'   => 'student_name',
                                 'rules'   => 'trim|xss_clean'

                              ),
                              array(
                                 'field'   => 'group_student_id',
                                 'label'   => 'group_student_id',
                                 'rules'   => 'trim|xss_clean'

                              ),

                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                    $student_name = $this->MainModel->

                }
          }



}
?>
