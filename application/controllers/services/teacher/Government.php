<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class government extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {

      $government_data =  $this->MainModel->get('government','government_id ASC') ;
      if($government_data AND  !empty($government_data[0]) ){

          foreach($government_data as $key=>$value){
                foreach($value as $k=>$v){
                   //$data[$key]["Operation"] = "success";
                   $data[$key][$k] = $v ;
                }

      }

  // $this->set_response($data, REST_Controller::HTTP_OK);
      $this->set_response(array("status"=>"1","msg"=>"جميع المحافظات المسجلة","data"=>$data), REST_Controller::HTTP_OK);
      }
      else{
        $data = json_decode ("{}");
        $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }

    }
    public function index_post()
      {

      }



}
?>
