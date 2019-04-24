<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class SchoolDelete extends REST_Controller
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
                  $delete = $this->MainModel->destroy('school','school_id',$this->post('school_id'));
                   if($delete){

                  $this->set_response(array("status"=>"1","msg"=>"تم حذف المدرسة","data"=>null), REST_Controller::HTTP_OK);
                  }else{

                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
