<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class updatestudent extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
               $id   = $this->get('parent_id');
			   $father = $this->MainModel->getwhere('father','parent_id',$id, 'parent_id ASC') ;
         if(!empty($father[0])){
           unset($father[0]['parent_password']);
           unset($father[0]['parent_token_web']);
           unset($father[0]['parent_enterdate']);
          $this->set_response(array("status"=>"1","msg"=>"بيانات ولى الأمر","data"=>$father[0]), REST_Controller::HTTP_OK);
				  }
				  else{
            $data = json_decode ("{}");
            $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
            $this->set_response($done, REST_Controller::HTTP_OK);
				  }
    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'student_id',
                         'label'   => 'student_id',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                      array(
                           'field'   => 'student_name',
                           'label'   => 'student_name',
                           'rules'   => 'trim|xss_clean'
                        ),

                        array(
                             'field'   => 'student_school',
                             'label'   => 'student_school',
                             'rules'   => 'trim|xss_clean'
                          ),

                          array(
                               'field'   => 'student_government',
                               'label'   => 'student_government',
                               'rules'   => 'trim|xss_clean'
                            ),

                            array(
                                 'field'   => 'student_admin',
                                 'label'   => 'student_admin',
                                 'rules'   => 'trim|xss_clean'
                              ),

                              array(
                                   'field'   => 'student_stage',
                                   'label'   => 'student_stage',
                                   'rules'   => 'trim|xss_clean'
                                ),

                                array(
                                     'field'   => 'student_education_type',
                                     'label'   => 'student_education_type',
                                     'rules'   => 'trim|xss_clean'
                                  ),

                                  array(
                                       'field'   => 'student_sector',
                                       'label'   => 'student_sector',
                                       'rules'   => 'trim|xss_clean'
                                    ),

                                    array(
                                         'field'   => 'student_class',
                                         'label'   => 'student_class',
                                         'rules'   => 'trim|xss_clean'
                                      ),

                                      array(
                                           'field'   => 'student_classroom',
                                           'label'   => 'student_classroom',
                                           'rules'   => 'trim|xss_clean'
                                        ),

                                        array(
                                             'field'   => 'student_code',
                                             'label'   => 'student_code',
                                             'rules'   => 'trim|xss_clean'
                                          ),






                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
				$father_data = $this->MainModel->getwhere('students','student_id',$this->post('student_id'),'student_id ASC');
				/*$Name = $this->post("parent_name");
        $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $father_data[0]['parent_name'];*/
			  $name = $this->post('student_name');
        $name_u = (isset($name) AND !empty($name)) ? $name : $father_data[0]['student_name'];
        $school = $this->post('student_school');
        $school_u = (isset($school) AND !empty($school)) ? $school : $father_data[0]['student_school'];
        $gov = $this->post('student_government');
        $gov_u = (isset($gov) AND !empty($gov)) ? $gov : $father_data[0]['student_government'];
        $admin = $this->post('school_admin');
        $admin_u = (isset($admin) AND !empty($admin)) ? $admin : $father_data[0]['student_admin'];
        $stage = $this->post('school_stage');
        $stage_u = (isset($stage) AND !empty($stage)) ? $stage : $father_data[0]['student_stage'];
        $education =$this->post('student_education_type');
        $education_u = (isset($education) AND !empty($education)) ? $education : $father_data[0]['student_education_type'];
        $sector =$this->post('student_sector');
        $sector_u = (isset($sector) AND !empty($sector)) ? $sector : $father_data[0]['student_sector'];
        $class = $this->post('student_class');
        $class_u = (isset($class) AND !empty($class)) ? $class : $father_data[0]['student_class'];
        $classroom = $this->post('student_classroom');
        $classroom_u = (isset($classroom) AND !empty($classroom)) ? $classroom : $father_data[0]['student_classroom'];
        $code = $this->post('student_code');
        $code_u = (isset($code) AND !empty($code)) ? $code : $father_data[0]['student_code'];
				$arrayupdate =array(
					'student_name' =>$name_u,
          'student_school' =>$school_u,
          'student_government' =>$gov_u,
          'student_admin' =>$admin_u,
          'student_stage' =>$stage_u,
          'student_education_type' =>$education_u,
          'student_sector' =>$sector_u,
          'student_class' =>$class_u,
          'student_classroom' =>$classroom_u,
          'student_code' =>$code_u
				);



                $update = $this->MainModel->updatedata('students','student_id' ,$this->post('student_id'),$arrayupdate);
                    if($update){
                      $teacherdata = $this->MainModel->getwhere('students','student_id',$this->post('student_id'),'student_id ASC');


                      $done = array("status"=>"1","msg"=>"تم تحديث البيانات بنجاح","data"=>$teacherdata[0]);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                    }else{
                      $data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                    }
                    }

                }
          }




?>
