<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class data extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_id = $this->get('notif_teacher_id');
      $notif_option = $this->get('notif_option');
      $data_array =  array(
        'notif_teacher_id' => $teacher_id,
        'notif_option' =>$notif_option,
        'notif_status' => 'unread'
       );
      $teacher = $this->MainModel->getwherearray('notif_teacher_students',$data_array,'notif_id ASC');
      if(!empty($teacher)){
        $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>array('notification' =>$teacher));
        $this->set_response($done, REST_Controller::HTTP_OK);

      }
      else{
        $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك إشعارات","data"=>null);
        $this->set_response($done, REST_Controller::HTTP_OK);

      }
    }
  



}
?>
