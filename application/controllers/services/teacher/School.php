<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class school extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_id = $this->get('school_teacher_id');
      $get_all_schools = $this->MainModel->getwhere('school','school_teacher_id',$teacher_id,'school_id ASC');
      if(!empty($get_all_schools)){
        $this->set_response(array("status"=>"1","msg"=>"جميع المدارس","data"=>array("schools"=>$get_all_schools)), REST_Controller::HTTP_OK);
      }
      elseif(empty($get_all_schools)){
        $done = array("status"=>"1","msg"=>"قم باضافة مدارس","data"=>null);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }
      else {
        $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
        $this->set_response($done, REST_Controller::HTTP_OK);
      }
    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'school_name',
                                 'label'   => 'school_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'school_government',
                                'label'     =>'school_government',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'school_administration',
                                 'label'   => 'school_administration',

                                 'rules'   => 'trim|xss_clean|required'

                              ),
                            array(
                                'field'     =>'school_stage',
                                'label'     =>'school_stage',
                                'rules'     =>'trim|required|xss_clean'
                              ),
							  array(
                                'field'     =>'school_type',
                                'label'     =>'school_type',
                                'rules'     =>'trim|required|xss_clean'
                              ),
							  array(
                                'field'     =>'school_sector',
                                'label'     =>'school_sector',
                                'rules'     =>'trim|required|xss_clean'
                              ),
							   array(
                                'field'     =>'school_no_classes',
                                'label'     =>'school_no_classes',
                                'rules'     =>'trim|required|xss_clean'
                              ),
                              array(
                                   'field'     =>'school_teacher_id',
                                   'label'     =>'school_teacher_id',
                                   'rules'     =>'trim|required|xss_clean'
                                 ),
                                 array(
                                      'field'     =>'school_country',
                                      'label'     =>'school_country',
                                      'rules'     =>'trim|required|xss_clean'
                                     )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
                       $result = array(
                            'school_name'=>$this->post('school_name'),
                            'school_government'=>$this->post('school_government'),
                            'school_administration'=>$this->post('school_administration'),
                            'school_stage'=>$this->post('school_stage'),
							              'school_type' =>$this->post('school_type'),
							              'school_sector'=>$this->post('school_sector'),
							              'school_no_classes' =>$this->post('school_no_classes'),
                            'school_teacher_id'=>$this->post('school_teacher_id'),
                            'school_country'=>$this->post('school_country')

                        );



                  $inserdb = $this->MainModel->insertdata('school',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     $school = $this->MainModel->getwhere('school','school_id',$insert_id, 'school_id ASC') ;

                      $this->set_response(array("status"=>"1","msg"=>"تم إضافة المدرسة بنجاح","data"=>array("school"=>$school[0])), REST_Controller::HTTP_OK);



                  }else{

                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
