<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class student extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $parent_id = $this->get('student_parent_id');
      //students
      $get_all_schools = $this->MainModel->getwhere('studentnew','student_parent_id',$parent_id,'student_id ASC');
      //$this->set_response($get_all_schools, REST_Controller::HTTP_OK);
      if(!empty($get_all_schools)){
        $done = array("status"=>"1","msg"=>"جميع الابناء","data"=>$get_all_schools) ;
       $this->set_response($done, REST_Controller::HTTP_OK);
      }
      elseif(empty($get_all_schools)){
        //$data = json_decode ("{}");
        $done = array("status"=>"0","msg"=>"لايوجد ابناء","data"=>[]);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }
      else{
        //$data = json_decode ("{}");
        $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى","data"=>[]);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'student_name',
                                 'label'   => 'student_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'student_school_id',
                                'label'     =>'student_school_id',
                                'rules'     =>'trim|xss_clean|required'
                              ),
                              array(
                                'field' =>'student_school_name',
                                'label' => 'student_school_name',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'student_group_id',
                                'label' => 'student_group_id',
                                'rules' => 'trim|xss_clean|required'
                              ),
                              array(
                                'field' => 'student_country',
                                'label' => 'student_country',
                                'rules' => 'trim|xss_clean|required'
                              ),

                              array(
                                  'field'     =>'student_parent_id',
                                  'label'     =>'student_parent_id',
                                  'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                'field' => 'student_teacher_id',
                                'label' => 'student_teacher_id',
                                'rules' => 'trim|xss_clean'
                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $valid = trim(validation_errors());
                  $this->set_response($valid, REST_Controller::HTTP_OK);
                }else{
                       $result = array(
                            'student_name' =>$this->post('student_name'),
                            'student_school_id' => $this->post('student_school_id'),
                            'student_school_name' => $this->post('student_school_name'),
                            'student_group_id' => $this->post('student_group_id'),
                            'student_country' => $this->post('student_country'),
                            'student_parent_id' => $this->post('student_parent_id'),
                            'student_teacher_id'=> $this->post('student_teacher_id')
                        );



                  $inserdb = $this->MainModel->insertdata('studentnew',$result) ;
                  $insert_id = $this->db->insert_id();
                   if($inserdb){
                     $student = $this->MainModel->getwhere('studentnew','student_id',$insert_id,'student_id ASC');
                     $done = array("status"=>"1","msg"=>"تم إضافة الطالب بنجاح","data"=>$student[0]) ;
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  //  $this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                  }else{
                    $data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                               $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
