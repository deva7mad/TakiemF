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
      $parent_id= $this->get('notif_parent_id');
      $notif_option = $this->get('notif_option');
      /*if(!empty($notif_option)){
        $data_array =  array(
          'notif_parent_id' =>$parent_id,
          'notif_option' =>$notif_option,
          'notif_status' => 'unread'
         );
        //$tabs = $this->MainModel->getwherearray('notification_teacher',$data_array,'notif_id ASC');
        if($notif_option =='notif'){
          $select = array('notif_id','notif_teacher_id','notif_parent_id','notif_message','notif_status');
          $tabs = $this->MainModel->getwherearrayselected('notification_father',$data_array,'',$select);

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>$tabs);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك إشعارات","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }

        }
        elseif($notif_option=='inbox'){
          $tabs = $this->MainModel->getwherearray('notification_father',$data_array,'notif_id ASC');

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>$tabs);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك رسائل واردة ","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        }
        elseif($notif_option=='outbox'){
          $tabs = $this->MainModel->getwherearray('notif_teacher_name',$data_array,'notif_id ASC');

          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"جميع الرسائل الصادرة","data"=>$tabs);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك رسائل صادرة","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        }

      }
      else{*/
        $getdata = array(
          'notif_parent_id' => $parent_id,
          'notif_msg_flag' => $notif_option
        );
        //if($notif_option == '1'){
          $tabs = $this->MainModel->getwherearray('notification_father',$getdata,'notif_id ASC');
          if(!empty($tabs)){
            $done = array("status"=>"1","msg"=>"الاشعارات و الرسائل الجديدة","data"=>$tabs);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
          else{
            $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك إشعارات","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);

          }
        //}

    //  }


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

                'field' =>'notif_student_id',
                'label' =>'notif_student_id',
                'rules'=> 'trim|xss_clean'
              ),
              array(
                'field' => 'notif_option',
                'label'=>'notif_option',
                'rules'=>'trim|xss_clean|required'
              )
            );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                  //notif_option = > notif
                  $option = $this->post('notif_option');
                  if($option == 'notif'){
                    $notification = array(
                      'notif_parent_id'=>$this->post('notif_parent_id'),
                      'notif_teacher_id' =>$this->post('notif_teacher_id'),
                      'notif_student_id'=>$this->post('notif_student_id'),
                      'notif_message' =>$this->post('notif_message'),
                      'notif_option' => 'notif', // make a request
                      'notif_status' =>'unread'
                    );
               $inserdb = $this->MainModel->insertdata('notification_teacher',$notification) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){
                  //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                  $notif = $this->MainModel->getwhere('notification_teacher','notif_id',$insert_id,'notif_id ASC')[0];
                  $this->set_response(array("status"=>"1","msg"=>"إشعار جديد","data"=>$notif), REST_Controller::HTTP_OK);
               }else{
                   $data = json_decode ("{}");
                   $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                   $this->set_response($done, REST_Controller::HTTP_OK);
               }


                  }
                  elseif ($option == 'outbox') {
                    $notification = array(
                      'notif_parent_id'=>$this->post('notif_parent_id'),
                      'notif_teacher_id' =>$this->post('notif_teacher_id'),
                      //'notif_student_id'=>$this->post('notif_student_id'),
                      'notif_message' =>$this->post('notif_message'),
                      'notif_option' => 'outbox', // make a request
                      'notif_status' =>'unread'
                    );
               $inserdb = $this->MainModel->insertdata('notification_teacher',$notification) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){
                  //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                  $notif = $this->MainModel->getwhere('notification_teacher','notif_id',$insert_id,'notif_id ASC')[0];

                  $this->set_response(array("status"=>"1","msg"=>"رسالة جديدة","data"=>$notif), REST_Controller::HTTP_OK);
               }else{
                   $data = json_decode ("{}");
                   $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                   $this->set_response($done, REST_Controller::HTTP_OK);
               }
                  }

                }
          }



}
?>
