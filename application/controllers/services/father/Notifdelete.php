<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class notifdelete extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $parent_id= $this->get('notif_parent_id');
      $notif_option = $this->get('notif_option');
      $data_array =  array(
        'notif_parent_id' => $parent_id,
        'notif_option' => $notif_option,
        'notif_status' => 'unread'
       );
      $tabs = $this->MainModel->getwherearray('notification_father',$data_array,'notif_id ASC');
      $this->set_response(array("status"=>"1","msg"=>"الإشعارات الجديدة","data"=>$tabs), REST_Controller::HTTP_OK);

    }
         public function index_post()
          {

            $config = array(
              array(
                'field'     =>'notif_option',
                'label'     =>'notif_option',
                'rules'     =>'trim|xss_clean|required'
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
                  $arraydata = array(
                    'notif_msg_flag' => $this->post('notif_option'),
                    'notif_parent_id' => $this->post('notif_parent_id')
                  );
                   $delete = $this->MainModel->destroywherearray('notification_father',$arraydata) ;
                if($delete){
                  $this->set_response(array("status"=>"1","msg"=>"تم المسح بنجاح","data"=>json_decode('{}')), REST_Controller::HTTP_OK);
               }else{
                   $data = json_decode ("{}");
                   $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                   $this->set_response($done, REST_Controller::HTTP_OK);
               }



          }

}

}
?>
