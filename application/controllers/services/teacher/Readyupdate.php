<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class readyupdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $parent_id= $this->get('notif_teacher_id');
        $notif_option = $this->get('notif_option');
        $data_array =  array(
          'notif_teacher_id' => $parent_id,
          'notif_option' =>$notif_option,
          'notif_status' => 'unread'
         );
        //$tabs = $this->MainModel->getwherearray('notification_teacher',$data_array,'notif_id ASC');
        if($notif_option =='notif'){
          $select = array('notif_id','notif_teacher_id','notif_parent_id','notif_message','notif_status','student_id','student_name','student_school','student_class','student_classroom','school_id');
          $tabs = $this->MainModel->getwherearrayselected('notif_new',$data_array,'notif_id ASC',$select);

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>array('notification' => $tabs));
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك إشعارات","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }

        }
        elseif($notif_option=='inbox'){
          $tabs = $this->MainModel->getwherearray('notification_teacher',$data_array,'notif_id ASC');

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>array('inbox' => $tabs));
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك رسائل واردة ","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        }
        elseif($notif_option=='ready'){
          $tabs = $this->MainModel->getwherearray('notification_teacher',$data_array,'notif_id ASC');

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"جميع الرسائل الجاهزة لديك","data"=>array('ready_messages' => $tabs));
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك رسائل جاهزة","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        }


    }
         public function index_post()
          {

            $config = array(

              array(
                'field'     =>'notif_id',
                'label'     =>'notif_id',
                'rules'     =>'trim|xss_clean|required'
              )
            );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                //$valid = trim(validation_errors());
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                  $teacher_data = $this->MainModel->getwhere('notification_teacher','notif_id',$this->post('notif_id'),'notif_id ASC');
          				$Name = $this->post("notif_parent_id");
                         $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $teacher_data[0]['notif_parent_id'];
          			   $Phone = $this->post("notif_message");
                         $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $teacher_data[0]['notif_message'];

          			  $arrayupdate =array(
          					'notif_parent_id' => $Name_u,
          					'notif_message' => $Phone_u
          				);
                  $update = $this->MainModel->updatedata('notification_teacher','notif_id' ,$this->post('notif_id'),$arrayupdate);
                  if($update){
                    $teacherdata = $this->MainModel->getwhere('notification_teacher','notif_id',$this->post('notif_id'),'notif_id ASC');
                    $done = array("status"=>"1","msg"=>"تم التحديث بنجاح","data"=>array('ready_messages'=>$teacherdata[0]));
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }else{
                    $error =array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى ","data"=>null);
                     $this->set_response($error, REST_Controller::HTTP_OK);
                  }

                }

                }




}
?>
