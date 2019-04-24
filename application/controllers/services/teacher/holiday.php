<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class holiday extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     $teacher_id = $this->get('teacher_id');
     $holiday = $this->MainModel->getwhere('holiday','teacher_id',$teacher_id,'holiday_id ASC');
     if(!empty($holiday)){
       $this->set_response(array("status"=>"1","msg"=>"جميع الاجازات ","data"=>array('holiday'=>$holiday)), REST_Controller::HTTP_OK);

     }
     else {
       $this->set_response(array("status"=>"0","msg"=>"ليس لديك إجازات","data"=>null), REST_Controller::HTTP_OK);
     }

    }
         public function index_post()
          {

            $config = array(
                            array(
                              'field' => 'holiday_name',
                              'label' => 'holiday_name',
                              'rules' => 'trim|xss_clean|required'
                            ),
                            array(
                              'field' => 'holiday_startdate',
                              'label'=>'holiday_startdate',
                              'rules'=>'trim|xss_clean|required'
                            ),
                            array(
                              'field'=>'holiday_endate',
                              'label'=> 'holiday_endate',
                              'rules'=>'trim|xss_clean|required'
                            ),

                              array(
                                 'field'   => 'teacher_id',
                                 'label'   => 'teacher_id',
                                 'rules'   => 'trim|xss_clean|required'

                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$data = json_decode ("{}");
                    //$valid = trim(validation_errors());
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{

                    $result = array(
                         'holiday_name' => $this->post('holiday_name'),
                         'holiday_startdate' => $this->post('holiday_startdate'),
                         'holiday_endate'=> $this->post('holiday_endate'),
                         'teacher_id' => $this->post('teacher_id')
                     );



               $inserdb = $this->MainModel->insertdata('holiday',$result) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){


                 $period = $this->MainModel->getwhere('holiday','holiday_id',$insert_id,'holiday_id ASC');
                 //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                 $this->set_response(array("status"=>"1","msg"=>"تم إضافة اجازة جديدة بنجاح ","data"=>array('holiday'=>$period)), REST_Controller::HTTP_OK);

               }else{
                 //$data = json_decode ("{}");
                 $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                 $this->set_response($done, REST_Controller::HTTP_OK);
               }




                }
          }



}
?>
