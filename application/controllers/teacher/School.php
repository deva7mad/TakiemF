<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {


    public function index()
    {



        $data['title'] = 'تقييم';

        $teacher_id = $this->session->userdata('teacher_id');
        $teacher_info = $this->MainModel->getwhere('teacher','teacher_id',$teacher_id,'teacher_id ASC')[0];
        $data['teacher_name'] = $teacher_info['teacher_name'];
        $data['teacher_email'] = $teacher_info['teacher_email'];
        $data['teacher_phone'] =$teacher_info['teacher_phone'];
//        $data['teacher_password']

        $this->load->view('cpanel/teacher/school/edit-school-info',$data);


    }

    public function create()
    {

      if($this->input->post()){

            $config = array(
                      array(
                         'field'   => 'school_name',
                         'label'   => 'school_name',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                      array(
                        'field' => 'school_government',
                        'label' => 'school_government',
                        'rules' => 'trim|required|xss_clean'
                      ),
                      array(
                        'field' => 'school_adminstration',
                        'label' => 'school_adminstration',
                        'rules' => 'trim|required|xss_clean'
                      ),
                      array(
                        'field' => 'school_stage',
                        'label' => 'school_stage',
                        'rules' => 'trim|required|xss_clean'
                      ),
                      array(
                        'field' => 'school_type',
                        'label' => 'school_type',
                        'rules' => 'trim|required|xss_clean'
                      ),
                      array(
                        'field' => 'school_sector',
                        'label' => 'school_sector',
                        'rules' => 'trim|required|xss_clean'
                      )
                    );



                $this->form_validation->set_rules($config);
                $this->form_validation->set_error_delimiters('<li>','</li>');
                if ($this->form_validation->run() == FALSE)
                {
                    $data['error'] = validation_errors();
                }
                else{
                        $result = array(
                          'school_name' =>$this->input->post('school_name'),
                          'school_type'=>$this->input->post('school_type'),
                          'school_government' =>$this->input->post('school_government'),
                          'school_stage' =>$this->input->post('school_stage'),
                          'school_adminstration'=>$this->input->post('school_adminstration'),
                          'school_sector'=>$this->input->post('school_sector')
                          'school_teacher_id' =>$this->session->userdata('teacher_id');

                        );
                        $insert = $this->MainModel->insertdata('school',$result);
                        if($insert){
                             $data['done'] = 'New Account created successfully';
                        }else{
                            $data['error'] = 'Please Contact Support' ;
                        }

                        }

                }
                $this->load->view('cpanel/teacher/school/edit-school-info',$data);
      }


    }



}
?>
