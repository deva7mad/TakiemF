<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OutboxMessage extends CI_Controller {


    public function index()
    {
      $data['title'] = 'تقييم';
      $parent_id =$this->session->userdata('parent_id');
        $notif_data = array(
          'notif_parent_id' => $parent_id,
          'notif_option' =>'outbox',
          'notif_status' => 'unread'
        );
        $data['notification'] = $this->MainModel->getwherearray('notification_parent',$notif_data,'notif_id ASC');

    }

}
?>
