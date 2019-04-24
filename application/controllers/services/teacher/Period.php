<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class period extends REST_Controller
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
                                 'field'   => 'period_name',
                                 'label'   => 'period_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'period_start_time',
                                'label'     =>'period_start_time',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'period_end_time',
                                 'label'   => 'period_end_time',
                                 'rules'   => 'trim|xss_clean|required'

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
                            'period_name'=>$this->post('period_name'),
                            'period_start_time'=>$this->post('period_start_time'),
                            'period_end_time'=>$this->post('period_end_time')
                        );



                  $inserdb = $this->MainModel->insertdata('period',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){


                    $period = $this->MainModel->getwhere('period','period_id',$insert_id,'period_id ASC');

                    $this->set_response(array("status"=>"1","msg"=>"تم التسجيل بنجاح","data"=>array("period"=>$period)), REST_Controller::HTTP_OK);

                  }else{

                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
