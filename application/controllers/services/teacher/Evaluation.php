<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class evaluation extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

  public function index_get()
    {
      $teacher_id = $this->get('teacher_id');
      $eva = $this->MainModel->getwhere('evaluations','teacher_id',$teacher_id,'');
      if(!empty($eva)){
        $done = array("status"=>"1","msg"=>"جميع التقييمات لديك","data"=>array('evaluations'=>$eva));
        $this->set_response($done,REST_Controller::HTTP_OK);
      }else{
        $done = array("status"=>"0","msg"=>"عفوا لا يوجد لديك تقييمات","data"=>null);
         $this->set_response($done,REST_Controller::HTTP_OK);
      }
    }
         public function index_post()
          {

            $config = array(
                          array(
                            'field' =>'e_type',
                            'label'=>'e_type',
                            'rules'=>'trim|xss_clean|required'
                          ),
                          array(
                            'field' => 'e_txt_one',
                            'label' => 'e_txt_one',
                            'rules' => 'trim|xss_clean|required'
                          ),
                          array(
                            'field' =>'e_txt_two',
                            'label'=>'e_txt_two',
                            'rules'=>'trim|xss_clean'
                          ),
                          array(
                            'field' =>'e_txt_three',
                            'label'=>'e_txt_three',
                            'rules'=>'trim|xss_clean'
                          ),
                          array(
                            'field' =>'e_txt_four',
                            'label'=>'e_txt_four',
                            'rules'=>'trim|xss_clean'
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
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{

                    $result = array(
                         'e_type' => $this->post('e_type'),
                         'e_txt_one' => $this->post('e_txt_one'),
                         'e_txt_two' => $this->post('e_txt_two'),
                         'e_txt_three' => $this->post('e_txt_three'),
                         'e_txt_four' => $this->post('e_txt_four'),
                         'teacher_id' =>$this->post('teacher_id')
                     );



               $inserdb = $this->MainModel->insertdata('evaluations',$result) ;
               $insert_id = $this->db->insert_id();


                if($inserdb){


                 $period = $this->MainModel->getwhere('evaluations','e_id',$insert_id,'e_id ASC')[0];
                 //$this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                 $this->set_response(array("status"=>"1","msg"=>"تم إضافة تقييم جديد بنجاح","data"=>array('evaluation'=>$period)), REST_Controller::HTTP_OK);

               }else{
                 //$data = json_decode ("{}");
                 $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>null);
                 $this->set_response($done, REST_Controller::HTTP_OK);
               }




                }
          }



}
?>
