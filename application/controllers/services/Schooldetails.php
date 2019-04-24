<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class schooldetails extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher= $this->get('teacher_id');
      $school = $this->get('school_id');
      $data_array =  array(
        'group_teacher_id' => $teacher,
        'group_school_id' => $school
       );
      $tabs = $this->MainModel->getwherearray('group_takiem_old',$data_array,'group_id ASC');
      if(!empty($tabs)){
        $this->set_response(array("status"=>"1","msg"=>"جميع الفصول لديك","data"=>$tabs), REST_Controller::HTTP_OK);
      }
      else{
        $this->set_response(array("status"=>"0","msg"=>"لا يوجد فصول","data"=>[]), REST_Controller::HTTP_OK);

      }

    }
         public function index_post()
          {


}

}
?>
