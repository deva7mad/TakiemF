<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class subtab extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $teacher_id = $this->get('tab_teacher_id');
        $tabs = $this->MainModel->getwhere('tabs','tab_teacher_id',$teacher_id,'tab_id ASC');
        $this->set_response(array("status"=>"1","msg"=>"جميع التبويبات لدى هذا المعلم","data"=>array('tab'=>$tabs)), REST_Controller::HTTP_OK);


    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'tab_id',
                                 'label'   => 'tab_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'tab_sub_name',
                                'label'     =>'tab_sub_name',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'tab_teacher_id',
                                 'label'   => 'tab_teacher_id',
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
                  $main_tab = $this->MainModel->getwhere('tabs','tab_id',$this->post('tab_id'),'tab_id ASC')[0];
                       $result = array(
                            'tab_main_name' => $main_tab['tab_main_name'],
                            'tab_sub_name'  => $this->post('tab_sub_name'),
                            'tab_evaluation' => $this->post('tab_evaluation'),
                            'tab_teacher_id' => $this->post('tab_teacher_id')
                        );




                  $inserdb = $this->MainModel->insertdata('tabs',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                     $tab = $this->MainModel->getwhere('tabs','tab_id',$insert_id,'tab_id ASC')[0];
                     $this->set_response(array("status"=>"1","msg"=>"تم إضافة التبويبات بنجاح","data"=>array('tab'=>$tab)), REST_Controller::HTTP_OK);
                  }else{
                    //$data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
