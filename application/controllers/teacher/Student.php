<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


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
                           'field'   => 'group_id',
                           'label'   => 'group_id',
                           'rules'   => 'trim|xss_clean|required'
                        ),
                        array(
                          'field'     =>'group_type',
                          'label'     =>'group_type',
                          'rules'     =>'trim|xss_clean|required'
                        ),

                        array(
                           'field'   => 'student_name',
                           'label'   => 'student_name',
                           'rules'   => 'trim|xss_clean'

                        ),
                        array(
                           'field'   => 'student_code',
                           'label'   => 'student_code',
                           'rules'   => 'trim|xss_clean'

                        ),
                       array(
                           'field'   => 'group_link',
                           'label'   => 'group_link',
                           'rules'   => 'trim|xss_clean'

                        )
                );




              $this->form_validation->set_rules($config);
              $this->form_validation->set_error_delimiters('<li>','</li>');
              if ($this->form_validation->run() == FALSE)
              {
                  $data['error'] = validation_errors();
              }
              else{
                $type = $this->input->post('group_type');
                if($type == 'manual'){
                  $data = array(
                    'group_id' => $this->input->post('group_id'),
                    'group_student_name' => $this->input->post('student_name')
                  );
                  $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                  $insert_id = $this->db->insert_id();
                  if($inserdb)
                  {
                    $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                    $data['success'] = 'new';
                  }
                  else{
                      $data['error'] = 'error';
                  }
                }
                elseif ($type == 'code') {
                  $data = array(
                    'group_id' => $this->input->post('group_id'),
                    'group_student_code' => $this->input->post('student_code'),
                    'group_type' => $type
                  );
                  $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                  $insert_id = $this->db->insert_id();
                  if($inserdb)
                  {
                    $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                    unset($group['group_student_name']);
                    unset($group['group_link']);
                    //$this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>$group), REST_Controller::HTTP_OK);
                    $data['success'] = 'new';
                  }
                  else{
                  $data['error'] = 'error';
                  }
                }
                elseif ($type == 'excel') {
                  $data = array(
                    'group_id' => $this->input->post('group_id'),
                    'group_link' => $this->input->post('group_link'),
                    'group_type' => $type
                  );
                  $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                  $insert_id = $this->db->insert_id();
                  if($inserdb)
                  {
                    $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                    $data['success'] = 'new';
                    }
                  else{
                      $data['error'] = 'error';
                  }
                }
                /*elseif ($type == 'group') {
                  $data = array(
                    'group_id' => $this->post('group_id'),
                    'group_link' => $this->post('group_link')
                  );
                  $inserdb = $this->MainModel->insertdata('group_student',$data) ;
                  $insert_id = $this->db->insert_id();
                  if($inserdb)
                  {
                    $group = $this->MainModel->getwhere('group_student','group_student_id',$insert_id,'group_student_id ASC')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة الطالب إلى المجموعة بنجاح","data"=>$group), REST_Controller::HTTP_OK);
                  }
                  else{
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>[]);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }
                } */
              }
              $this->load->view('cpanel/teacher/notification/notifications',$data);
  }
}
}
?>
