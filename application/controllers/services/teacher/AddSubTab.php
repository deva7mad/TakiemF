<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class AddSubTab extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
     $teacherID = $this->get('teacher_id');
     $groupID = $this->get('group_id');
     $mainID = $this->get('main_id');
     //getwherearrayselected($tablename,$data,$orderby,$selected)
     $data = array(
       'sub_main_id' =>$mainID,
       'sub_group_id' => $groupID,
       'sub_teacher_id' => $teacherID
     );
     $selected = array('sub_tab_id','sub_tab_title','evaluation_id');
     $sub_tabs = $this->MainModel->getwherearrayselected('sub_tab',$data,'',$selected);

       //$selected = array('main_tab_id','main_group_id','main_tab_title','main_teacher_id');
     //$mainTabs = $this->MainModel->getwherearray('all_tabs',$data,'');
     $data1 = array(
       'main_tab_id' => $mainID,
       'main_group_id' => $groupID,
       'main_teacher_id' => $teacherID
     );
     $select2 = array('tab_sub_title_first','evaluation_id');
     $mainTabs = $this->MainModel->getwherearrayselected('main_tab',$data1,'',$select2);
     $tags = array_map(function($mainTabs) {
       return array(
         'sub_tab_id' => '0',
         'sub_tab_title' => $mainTabs['tab_sub_title_first'],
         'evaluation_id' => $mainTabs['evaluation_id'],

        );
      },$mainTabs);


     if(!empty($mainTabs) AND empty($sub_tabs)){
      $this->set_response(array("status"=>"1","msg"=>"جميع التوبيبات الفرعية","data"=>array('tabs'=>$tags)), REST_Controller::HTTP_OK);
    }elseif(!empty($mainTabs) AND !empty($sub_tabs)){
      $new_arr = array_merge($tags,$sub_tabs);
      $this->set_response(array("status"=>"1","msg"=>"جميع التوبيبات الفرعية","data"=>array('tabs'=>$new_arr)), REST_Controller::HTTP_OK);

    }
    else{
      //$data = json_decode ("{}");
      $done = array("status"=>"0","msg"=>"عفوا ، لا توجد توبيبات فرعية","data"=>null);
      $this->set_response($done, REST_Controller::HTTP_OK);
    }
    }
         public function index_post()
          {

            $config = array(

                              array(
                                'field'     =>'sub_main_id',
                                'label'     =>'sub_main_id',
                                'rules'     =>'trim|xss_clean|required'
                              ),

                              array(
                                 'field'   => 'tab_sub_title_first',
                                 'label'   => 'tab_sub_title_first',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
                              array(
                                 'field'   => 'evaluation_id',
                                 'label'   => 'evaluation_id',
                                 'rules'   => 'trim|xss_clean|required'

                              ),
							                array(
                                 'field'   => 'sub_teacher_id',
                                 'label'   => 'sub_teacher_id',
                                 'rules'   => 'trim|xss_clean|required'

                              ),/*
                              array(
                                'field' => 'sub_tab_evaluation',
                                'label' => 'sub_tab_evaluation',
                                'rules'=>'trim|xss_clean|required'
                              ),*/
                              array(
                                'field' => 'sub_group_id',
                                'label'=> 'sub_group_id',
                                'rules' =>'trim|xss_clean|required'
                              )
                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  //$data = json_decode ("{}");
                  $done = trim(validation_errors());
                //$done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);
                }else{
                       $result = array(
                         'sub_main_id'=>$this->post('sub_main_id'),
                         'sub_tab_title'=>$this->post('tab_sub_title_first'),
                         'evaluation_id'=>$this->post('evaluation_id'),
                         //'sub_tab_evaluation'=>$this->post('sub_tab_evaluation'),
                         'sub_group_id'=>$this->post('sub_group_id'),
                         'sub_teacher_id'=>$this->post('sub_teacher_id')
                            );



                  $inserdb = $this->MainModel->insertdata('sub_tab',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){

                    //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                    //creat view
                    //$group = $this->MainModel->getwhere('new_tabs_sub','sub_tab_id',$insert_id,'')[0];
                    $group = $this->MainModel->getwhere('sub_tab','sub_tab_id',$insert_id,'')[0];
                    $this->set_response(array("status"=>"1","msg"=>"تم إضافةالتبويب الفرعى","data"=>array('group'=>$group)), REST_Controller::HTTP_OK);

                  }else{
                    //$data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                }
          }



}
?>
