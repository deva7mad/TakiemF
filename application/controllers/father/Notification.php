<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {


    public function index()
    {
        $data['title'] = 'تقييم';
        $parent_id =$this->session->userdata('parent_id');
        $notif_data = array(
          'notif_parent_id' => $parent_id,
          'notif_option' =>'notif',
          'notif_status' => 'unread'
        );
        $data['notification'] = $this->MainModel->getwherearray('notification_parent',$notif_data,'notif_id ASC');

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
              'field'     =>'notif_parent_id',
              'label'     =>'notif_parent_id',
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
            array(
              'field'     =>'notif_flag',
              'label'     =>'notif_flag',
              'rules'     =>'trim|xss_clean'
            ),
                  );



              $this->form_validation->set_rules($config);
              $this->form_validation->set_error_delimiters('<li>','</li>');
              if ($this->form_validation->run() == FALSE)
              {
                  $data['error'] = validation_errors();
              }
              else{
                if($this->post('notif_flag') == '0') {

                       $notification = array(
                         'notif_parent_id'=>$this->input->post('notif_parent_id'),
                         'notif_parent_id' =>$this->input->post('notif_parent_id'),
                         'notif_message' =>$this->input->post('notif_message'),
                         'notif_flag' => '0', // make a request
                         'notif_status' =>'unread',
                         'notif_option' =>'notif'
                       );
                  $inserdb = $this->MainModel->insertdata('notification_father',$notification) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                     //$notif = $this->MainModel->getwhere('notification_father','notif_id',$insert_id,'notif_id ASC')[0];
                     //$this->set_response(array("status"=>"1","msg"=>"إشعار جديد","data"=>$notif), REST_Controller::HTTP_OK);
                     $data['success'] ='New';
               }else{
                      //$0d0ata = json_decode ("{}");
                      //$done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      //$this->set_response($done, REST_Controller::HTTP_OK);
                      $data['error'] ='error';
                  }

                }// accept
                elseif ($this->post('notif_flag') == '1') {

                       $notification = array(
                         'notif_parent_id'=>$this->input->post('notif_parent_id'),
                         'notif_parent_id' =>$this->input->post('notif_parent_id'),
                         'notif_message' =>$this->input->post('notif_message'),
                         'notif_flag' => '0', // make a request
                         'notif_status' =>'unread',
                         'notif_option' =>'notif'
                       );
                  $inserdb = $this->MainModel->insertdata('notification_father',$notification) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                     $data['success'] = 'new';
                  }else{

                      $data['error'] ='error';
                  }

                }//delete

              }

  }
}




}
?>
