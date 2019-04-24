<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class note extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
        $teacher_id = $this->get('note_teacher_id');
        $tabs = $this->MainModel->getwhere('notes','note_teacher_id',$teacher_id,'note_id ASC');
        if(!empty($tabs)){
          $this->set_response(array("status"=>"1","msg"=>"جميع الملاحظات","data"=>array('notes'=>$tabs)), REST_Controller::HTTP_OK);

        }
        else {
          $this->set_response(array("status"=>"0","msg"=>"لا يوجد ملاحظات","data"=>null), REST_Controller::HTTP_OK);

        }


    }
         public function index_post()
          {

            $config = array(
                            array(
                                 'field'   => 'note_student_id',
                                 'label'   => 'note_student_id',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'note_teacher_id',
                                'label'     =>'note_teacher_id',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'note_group_id',
                                 'label'   => 'note_group_id',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                 'field'   => 'note_type',
                                 'label'   => 'note_type',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                 'field'   => 'note_content',
                                 'label'   => 'note_content',
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
                       $note = array(
                         'note_student_id' => $this->post('note_student_id'),
                         'note_teacher_id' => $this->post('note_teacher_id'),
                         'note_group_id' => $this->post('note_group_id'),
                         'note_type' => $this->post('note_type'),
                         'note_content' =>$this->post('note_content')
                        );




                  $inserdb = $this->MainModel->insertdata('notes',$note) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){
                     //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                     $note = $this->MainModel->getwhere('notes','note_id',$insert_id,'note_id ASC')[0];
                     $this->set_response(array("status"=>"1","msg"=>"تم إضافة الملاحظة","data"=>array('note'=>$note)), REST_Controller::HTTP_OK);
                  }else{
                      //$data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                      $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
