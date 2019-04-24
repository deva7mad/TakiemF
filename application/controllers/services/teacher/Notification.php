<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class notification extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $parent_id = $this->get('notif_teacher_id');
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
        elseif($notif_option=='outbox'){
          $tabs = $this->MainModel->getwherearray('notification_teacher',$data_array,'notif_id ASC');

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"جميع الرسائل الصادرة لديك","data"=>array('outbox_messages' => $tabs));
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك رسائل صادرة","data"=>null);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        }

    }
         public function index_post()
          {

            $config = array(
              array(
                'field'     =>'notif_parent_id',
                'label'     =>'notif_parent_id',
                'rules'     =>'trim|xss_clean'
              ),
              array(
                'field'     =>'notif_teacher_id',
                'label'     =>'notif_teacher_id',
                'rules'     =>'trim|xss_clean|required'
              ),
              array(
                'field'     =>'notif_message',
                'label'     =>'notif_message',
                'rules'     =>'trim|xss_clean|required'
              ),
              array(
                'field'     =>'notif_option',
                'label'     =>'notif_option',
                'rules'     =>'trim|xss_clean'
              ),

            );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                //$valid = trim(validation_errors());
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                  if($this->post('notif_option') =='notif'){

                         $notification = array(
                           'notif_parent_id'=>$this->post('notif_parent_id'),
                           'notif_teacher_id' =>$this->post('notif_teacher_id'),
                           'notif_message' =>$this->post('notif_message'),
                           'notif_option' => 'notif',
                           'notif_msg_flag' => '1',
                           'notif_status' =>'unread'
                         );
                    $inserdb = $this->MainModel->insertdata('notification_father',$notification) ;
                    $insert_id = $this->db->insert_id();


                     if($inserdb){
                       $notif = $this->MainModel->getwhere('notification_father','notif_id',$insert_id,'notif_id ASC')[0];
                       $this->set_response(array("status"=>"1","msg"=>"إشعار جديد","data"=>array('notification'=>$notif)), REST_Controller::HTTP_OK);
                    }else{
                        //$0d0ata = json_decode ("{}");
                        $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                        $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                }
                elseif($this->post('notif_option') == 'ready')
                {
                  $ready=array(
                  'notif_parent_id'=>'0',
                  'notif_teacher_id' =>$this->post('notif_teacher_id'),
                  'notif_message' =>$this->post('notif_message'),
                  //'notif_flag' => '0', // make a request
                  'notif_status' =>'unread',
                  'notif_option'=>'ready');
                    $inserdb = $this->MainModel->insertdata('notification_teacher',$ready);
                    $insert_id = $this->db->insert_id();
                    if($inserdb){
                      //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                      $notif = $this->MainModel->getwhere('notification_teacher','notif_id',$insert_id,'notif_id ASC')[0];
                      unset($notif['notif_parent_id']);
                      unset($notif['notif_delete']);
                      unset($notif['notif_date']);
                      unset($notif['notif_student_id']);
                      $this->set_response(array("status"=>"1","msg"=>"الرسائل الجاهزة","data"=>array("ready_messages"=>$notif)), REST_Controller::HTTP_OK);
                   }else{
                       //$data = json_decode ("{}");
                       $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                   }
                 }
                   elseif ($this->post('notif_option') == 'outbox') {
                     $outbox=array(
                       'notif_parent_id'=>$this->post('notif_parent_id'),
                     'notif_teacher_id' =>$this->post('notif_teacher_id'),
                     'notif_message' =>$this->post('notif_message'),
                     //'notif_flag' => '0', // make a request
                     'notif_status' =>'unread',
                     'notif_option'=>'outbox');
                       $inserdb = $this->MainModel->insertdata('notification_teacher',$outbox);
                       $insert_id = $this->db->insert_id();
                       if($inserdb){
                         //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                         $notif = $this->MainModel->getwhere('notification_teacher','notif_id',$insert_id,'notif_id ASC')[0];
                         $this->set_response(array("status"=>"1","msg"=>"الرسائل الصادرة","data"=>array("outbox_messages"=>array('notification'=>$notif))), REST_Controller::HTTP_OK);
                      }else{
                          //$data = json_decode ("{}");
                          $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                          $this->set_response($done, REST_Controller::HTTP_OK);
                      }
                   }



                }
          }



}
?>
