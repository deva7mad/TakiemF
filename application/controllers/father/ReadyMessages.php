<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReadyMessages extends CI_Controller {


    public function index()
    {
      $data['title'] = 'تقييم';
      $parent_id =$this->session->userdata('parent_id');
      $notif_data = array(
          'notif_parent_id' => $parent_id,
          'notif_option' =>'ready',
          'notif_status' => 'unread'
        );
      $data['notification'] = $this->MainModel->getwherearray('notification_father',$notif_data,'notif_id ASC');
    }
    public function newNotification()
    {
      if($this->input->post()){

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
              )
            );



                $this->form_validation->set_rules($config);
                $this->form_validation->set_error_delimiters('<li>','</li>');
                if ($this->form_validation->run() == FALSE)
                {
                    $data['error'] = validation_errors();
                }
                else{

                       $notification = array(
                           'notif_parent_id'=>$this->session->userdata('parent_id'),
                           'notif_teacher_id' =>$this->input->post('notif_teacher_id'),
                           'notif_message' =>$this->input->post('notif_message'),
                           'notif_status' =>'unread',
                           'notif_option' =>'ready'
                         );
                    $inserdb = $this->MainModel->insertdata('notification_teacher',$notification) ;
                    $insert_id = $this->db->insert_id();


                     if($inserdb){

                       $data['success'] ='New';
                 }else{

                        $data['error'] ='error';
                    }
                }

    }
  }






}
?>
