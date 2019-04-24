<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class parents extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $select =array('parent_id','parent_name');
      $parents = $this->MainModel->getselect('father',$select);
      if(!empty($parents)){
        $done = array("status"=>"1","msg"=>"جميع أولياء الامر","data"=>array("parents"=>$parents)) ;
       $this->set_response($done, REST_Controller::HTTP_OK);
      }
      else{
        $done = array("status"=>"0","msg"=>"لا يوجد نتائج للبحث","data"=>null);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }

    }

        public function index_post()
          {



          }



}
?>
