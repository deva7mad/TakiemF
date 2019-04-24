<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class evaupdate extends REST_Controller
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
                         'field'   => 'e_id',
                         'label'   => 'e_id',
                         'rules'   => 'trim|xss_clean|required'
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

                    $datapost = $this->post();
                    unset($datapost['e_id']);
                    foreach ($datapost as $key => $value) {
                      $arrayupdate[$key] = $value;
                    }

                  $update = $this->MainModel->updatedata('evaluations','e_id',$this->post('e_id'),$arrayupdate);
                   if($update){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    $group = $this->MainModel->getwhere('evaluations','e_id',$this->post('e_id'),'e_id ASC')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم تعديل التقييم بنجاح","data"=>array('evaluation'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
