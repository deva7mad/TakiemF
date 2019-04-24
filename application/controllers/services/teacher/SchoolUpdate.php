<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class schoolupdate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $school_id = $this->get('school_id');
	  $school_data = $this->MainModel->getwhere('school','school_id',$school_id,'school_id ASC');
	  if(!empty($school_data[0])){
					  $this->set_response(array("status"=>"1","msg"=>"بيانات المدرسة","data"=>$school_data[0]), REST_Controller::HTTP_OK);
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
                                 'field'   => 'school_id',
                                 'label'   => 'school_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'school_government',
                                'label'     =>'school_government',
                                'rules'     =>'trim|xss_clean'
                              ),
                              array(
                                   'field'   => 'school_name',
                                   'label'   => 'school_name',
                                   'rules'   => 'trim|xss_clean'
                                ),
                                array(
                                   'field'   => 'school_administration',
                                   'label'   => 'school_administration',
                                   'rules'   => 'trim|xss_clean'

                                ),
                              array(
                                  'field'     =>'school_stage',
                                  'label'     =>'school_stage',
                                  'rules'     =>'trim|xss_clean'
                                ),
  							             array(
                                  'field'     =>'school_type',
                                  'label'     =>'school_type',
                                  'rules'     =>'trim|xss_clean'
                                ),
  							            array(
                                  'field'     =>'school_sector',
                                  'label'     =>'school_sector',
                                  'rules'     =>'trim|xss_clean'
                                ),
  							            array(
                                  'field'     =>'school_no_classes',
                                  'label'     =>'school_no_classes',
                                  'rules'     =>'trim|xss_clean'
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
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{

					$school_data = $this->MainModel->getwhere('school','school_id',$this->post('school_id'),'school_id ASC');
					$school_gov = $this->post("school_government");
					$school_gov_new  =  (isset($school_gov) AND !empty($school_gov) ) ? $school_gov : $school_data[0]['school_government'];
          $school_name = $this->post("school_name");
					$school_name_new  =  (isset($school_name) AND !empty($school_name) ) ? $school_name : $school_data[0]['school_name'];
          $school_administration = $this->post("school_administration");
					$school_administration_new  =  (isset($school_administration) AND !empty($school_administration) ) ? $school_administration : $school_data[0]['school_administration'];
          $school_stage = $this->post("school_stage");
					$school_stage_new  =  (isset($school_stage) AND !empty($school_stage) ) ? $school_stage : $school_data[0]['school_stage'];
          $school_type = $this->post("school_type");
					$school_type_new  =  (isset($school_type) AND !empty($school_type) ) ? $school_type : $school_data[0]['school_type'];
          $school_sector = $this->post("school_sector");
					$school_sector_new  =  (isset($school_sector) AND !empty($school_sector) ) ? $school_sector : $school_data[0]['school_sector'];
          $school_no_classes = $this->post("school_no_classes");
					$school_no_classes_new  =  (isset($school_no_classes) AND !empty($school_no_classes) ) ? $school_no_classes : $school_data[0]['school_no_classes'];
          $school_country = $this->post("school_country");
          $school_country_new  =  (isset($school_country) AND !empty($school_country) ) ? $school_country : $school_data[0]['school_country'];

                       $result = array(

                            'school_government'=>$school_gov_new ,
                            "school_name"=> $school_name_new,
                            "school_administration"=>$school_administration_new ,
                            "school_stage"=>$school_stage_new,
                            "school_type"=>$school_type_new,
                            "school_sector"=>$school_sector_new,
                            "school_no_classes"=>$school_no_classes_new,
                            "school_country" =>$school_country_new

                        );



                  $update = $this->MainModel->updatedata('school','school_id' ,$this->post('school_id'),$result);

                   if($update){
                     $school = $this->MainModel->getwhere('school','school_id',$this->post('school_id'), 'school_id ASC') ;

                  $this->set_response(array("status"=>"1","msg"=>"تم تحديث بيانات المدرسة بنجاح","data"=>array("school"=>$school[0])), REST_Controller::HTTP_OK);
                  }else{

                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
