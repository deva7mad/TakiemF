<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Maintabstudent extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacherID = $this->get('teacher_id');
      $groupID = $this->get('group_id');
      $data = array(
        'main_group_id' => $groupID,
        'main_teacher_id' => $teacherID
      );
	  $select = array('student_id','student_name','student_code','student_parent_id');
      $mainTabs = $this->MainModel->getwherearrayselected('group_tab_student',$data,'',$select);
	  //$mainTabs = $this->MainModel->getwherearray('main_tab',$data,'');
      if(!empty($mainTabs)){


       $this->set_response(array("status"=>"1","msg"=>"بيانات الطلاب","data"=>array('tabs'=>$mainTabs)), REST_Controller::HTTP_OK);

     }else{
       $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
       $this->set_response($done, REST_Controller::HTTP_OK);
     }
    }
         public function index_post()
          {

            $config = array(

                              array(
                                'field'     =>'main_group_id',
                                'label'     =>'main_group_id',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'main_tab_title',
                                 'label'   => 'main_tab_title',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                 'field'   => 'tab_sub_title_first',
                                 'label'   => 'tab_sub_title_first',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
							                array(
                                 'field'   => 'main_teacher_id',
                                 'label'   => 'main_teacher_id',
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
                       $result = array(
                          'tab_sub_title_first'=>$this->post('tab_sub_title_first'),
                          'main_group_id'=>$this->post('main_group_id'),
                          'main_tab_title' => $this->post('main_tab_title'),
                          'main_teacher_id' =>$this->post('main_teacher_id')
                        );



                  $inserdb = $this->MainModel->insertdata('main_tab',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    //creat view
                    $group = $this->MainModel->getwhere('new_tabs','main_tab_id',$insert_id,'')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافة التبويب بنجاح إلى المجموعة ","data"=>array('group'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
