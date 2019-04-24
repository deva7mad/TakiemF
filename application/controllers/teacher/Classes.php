<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {


    public function index()
    {
        $data['title'] = 'تقييم';
        $teacher_id ='13';//$this->session->userdata('teacher_id');

      $classes = $this->MainModel->getwhere('classes','class_teacher_id',$teacher_id,'class_id ASC');
      echo json_encode($classes);
        //$this->load->view('cpanel/teacher/notification/notifications',$data);
  }
  public function newClass()
  {
    if($this->input->post()){

          $config = array(
            array(
                 'field'   => 'class_name',
                 'label'   => 'class_name',
                 'rules'   => 'trim|xss_clean|required'
              ),
              array(
                'field'     =>'class_subject',
                'label'     =>'class_subject',
                'rules'     =>'trim|xss_clean|required'
              ),

              array(
                 'field'   => 'class_teacher_id',
                 'label'   => 'class_teacher_id',
                 'rules'   => 'trim|xss_clean|required'

              ),
              array(
                 'field'   => 'class_period',
                 'label'   => 'class_period',
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
                //if($this->input->post('notif_flag') == '0') {

                  $result = array(
                       'class_name'=>$this->input->post('class_name'),
                       'class_subject'=>$this->input->post('class_subject'),
                       'class_teacher_id'=>'14',//$this->session->userdata('teacher_id'),
                        'class_period'=>$this->input->post('class_period')
                   );



             $inserdb = $this->MainModel->insertdata('classes',$result) ;
             $insert_id = $this->db->insert_id();


                   if($inserdb){

                     //$data['success'] ='New';
                     echo json_encode('new');
               }else{

                      //$data['error'] ='error';
                      echo json_encode('old');
                  }

              //  }// accept

              }
              //$this->load->view('cpanel/teacher/notification/notifications',$data);
  }
}
public function newPeriod()
{
  if($this->input->post()){

    $config = array(
                    array(
                         'field'   => 'period_name',
                         'label'   => 'period_name',
                         'rules'   => 'trim|xss_clean|required'
                      ),
                      array(
                        'field'     =>'period_start_time',
                        'label'     =>'period_start_time',
                        'rules'     =>'trim|xss_clean|required'
                      ),

                      array(
                         'field'   => 'period_end_time',
                         'label'   => 'period_end_time',
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
                     'period_name'=>$this->post('period_name'),
                     'period_start_time'=>$this->post('period_start_time'),
                     'period_end_time'=>$this->post('period_end_time')
                 );



               $inserdb = $this->MainModel->insertdata('period',$result) ;
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
