<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class sara extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_id = $this->get('teacher_id');
      $tabs= $this->MainModel->getwhere('teacher','teacher_id',$teacher_id,'teacher_id ASC');
//echo json_encode($tabs);
    print_r($tabs);
    return;
      //$this->response($tabs,REST_Controller::HTTP_OK);
    }
         public function index_post()
          {

            $config = array(
              array(
                'field'     =>'notif_parent_id',
                'label'     =>'notif_parent_id',
                'rules'     =>'trim|xss_clean|required'
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
                  if($this->post('notif_flag') == '0') {

                         $notification = array(
                           'notif_parent_id'=>$this->post('notif_parent_id'),
                           'notif_teacher_id' =>$this->post('notif_teacher_id'),
                           'notif_message' =>$this->post('notif_message'),
                           'notif_flag' => '0', // make a request
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

                  }// accept
                  elseif ($this->post('notif_flag') == '1') {

                         $notification = array(
                           'notif_parent_id'=>$this->post('notif_parent_id'),
                           'notif_teacher_id' =>$this->post('notif_teacher_id'),
                           'notif_message' =>$this->post('notif_message'),
                           'notif_flag' => '0', // make a request
                           'notif_status' =>'unread'
                         );
                    $inserdb = $this->MainModel->insertdata('notification_father',$notification) ;
                    $insert_id = $this->db->insert_id();


                     if($inserdb){
                       //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                       $notif = $this->MainModel->getwhere('notification_father','notif_id',$insert_id,'notif_id ASC')[0];
                       $this->set_response(array("status"=>"1","msg"=>"إشعار جديد","data"=>array('notification'=>$notif)), REST_Controller::HTTP_OK);
                    }else{
                        //$data = json_decode ("{}");
                        $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                        $this->set_response($done, REST_Controller::HTTP_OK);
                    }

                  }//delete

                }
                elseif($this->post('notif_option') == 'ready')
                {
                  $ready=array(
                  'notif_parent_id'=>$this->post('notif_parent_id'),
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
                      $this->set_response(array("status"=>"1","msg"=>"الرسائل الجاهزة","data"=>array("ready_messages"=>array('notification'=>$notif))), REST_Controller::HTTP_OK);
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
u
