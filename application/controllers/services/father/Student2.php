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
      $get_all_schools = $this->MainModel->getwhere('students','student_parent_id',$parent_id,'student_id ASC');
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
                                'field'     =>'student_school',
                                'label'     =>'student_school',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'student_government',
                                 'label'   => 'student_government',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                            array(
                                'field'     =>'student_stage',
                                'label'     =>'student_stage',
                                'rules'     =>'trim|xss_clean'
                              ),
							  array(
                                'field'     =>'student_admin',
                                'label'     =>'student_admin',
                                'rules'     =>'trim|xss_clean'
                              ),
							  array(
                                'field'     =>'student_education_type',
                                'label'     =>'student_education_type',
                                'rules'     =>'trim|xss_clean'
                              ),
							   array(
                                'field'     =>'student_sector',
                                'label'     =>'student_sector',
                                'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                   'field'     =>'student_class',
                                   'label'     =>'student_class',
                                   'rules'     =>'trim|xss_clean'
                                 ),
                              array(
                                  'field'     =>'student_classroom',
                                  'label'     =>'student_classroom',
                                  'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                  'field'     =>'student_code',
                                  'label'     =>'student_code',
                                  'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                  'field'     =>'student_parent_id',
                                  'label'     =>'student_parent_id',
                                  'rules'     =>'trim|xss_clean'
                              ),
                            /*  array(
                                  'field'     =>'student_group',
                                  'label'     =>'student_group',
                                  'rules'     =>'trim|xss_clean'
                              )*/


                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                       $result = array(
                            'student_name' =>$this->post('student_name'),
                            'student_school' =>$this->post('student_school'),
                            'student_government' =>$this->post('student_government'),
                            'student_admin' =>$this->post('student_admin'),
                            'student_stage'=>$this->post('student_stage'),
                            'student_education_type'=>$this->post('student_education_type'),
                            'student_sector'=>$this->post('student_sector'),
                            'student_class'=>$this->post('student_class'),
                            'student_classroom'=>$this->post('student_classroom'),
                            'student_code'=> $this->post('student_code'),
                            'student_parent_id' => $this->post('student_parent_id'),
                            //'student_group' => $this->post('student_group')
                        );



                  $inserdb = $this->MainModel->insertdata('students',$result) ;
                  $insert_id = $this->db->insert_id();
                   if($inserdb){
                     $student = $this->MainModel->getwhere('students','student_id',$insert_id,'student_id ASC');
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
