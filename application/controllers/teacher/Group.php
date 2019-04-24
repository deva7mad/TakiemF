<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {


    public function index()
    {
        $data['title'] = 'تقييم';
        $teacher_id =$this->session->userdata('teacher_id');
        $group = $this->MainModel->getwhere('group_takiem','group_teacher_id',$teacher_id,'group_id ASC');
        if(!empty($group)){
          $this->load->view('cpanel/teacher/notification/notifications',$data);
        }else{
          $this->load->view('cpanel/teacher/notification/notifications',$data);
        }


  }
  public function newClass()
  {
    if($this->input->post()){

      $config = array(
                      array(
                           'field'   => 'group_school_name',
                           'label'   => 'group_school_name',
                           'rules'   => 'trim|xss_clean|required'
                        ),
                        array(
                          'field'     =>'group_stage',
                          'label'     =>'group_stage',
                          'rules'     =>'trim|xss_clean|required'
                        ),

                        array(
                           'field'   => 'group_class',
                           'label'   => 'group_class',
                           'rules'   => 'trim|xss_clean|required'

                        ),
          array(
                           'field'   => 'group_subject',
                           'label'   => 'group_subject',
                           'rules'   => 'trim|xss_clean|required'

                        ),
          array(
                           'field'   => 'group_teacher_id',
                           'label'   => 'group_teacher_id',
                           'rules'   => 'trim|xss_clean|required'

                        )
                );


              $this->form_validation->set_rules($config);
              $this->form_validation->set_error_delimiters('<li>','</li>');
              if ($this->form_validation->run() == FALSE)
              {
                  $data['error'] = validation_errors();
              }
              else{
                if($this->post('notif_flag') == '0') {

                  $result = array(
                       'group_school_name'=>$this->input->post('group_school_name'),
                       'group_stage'=>$this->input->post('group_stage'),
                       'group_class'=>$this->input->post('group_class'),
                       'group_subject'=>$this->input->post('group_subject'),
                       'group_teacher_id'=>$this->input->post('group_teacher_id'),

                   );



             $inserdb = $this->MainModel->insertdata('group_takiem',$result) ;
             $insert_id = $this->db->insert_id();

                   if($inserdb){

                     $data['success'] ='New';
               }else{

                      $data['error'] ='error';
                  }

                }// accept

              }
              $this->load->view('cpanel/teacher/notification/notifications',$data);
  }
}
}
?>
