<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class profile extends REST_Controller
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
           //unset($father[0]['parent_password']);
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
                         'field'   => 'parent_id',
                         'label'   => 'parent_id',
                         'rules'   => 'trim|required|xss_clean'
                      ),
					  array(
                         'field'   => 'parent_name',
                         'label'   => 'parent_name',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'parent_phone',
                         'label'   => 'parent_phone',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'parent_email',
                         'label'   => 'parent_email',
                         'rules'   => 'trim|xss_clean'
                      ),
            array(
              'field' =>'parent_password',
              'label' =>'parent_password',
              'rules'=> 'trim|xss_clean'
            )



                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($done, REST_Controller::HTTP_OK);

                }else{
				$father_data = $this->MainModel->getwhere('father','parent_id',$this->post('parent_id'),'parent_id ASC');
				$Name = $this->post("parent_name");
               $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $father_data[0]['parent_name'];
			   $Phone = $this->post("parent_phone");
               $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $father_data[0]['parent_phone'];

			   $Email = $this->post("parent_email");
               $Email_u  =  (isset($Email) AND !empty($Email) ) ? $Email : $father_data[0]['parent_email'];
          $pass = md5($this->post('parent_password'));
          $pass_u = (isset($pass) AND !empty($pass) ) ? $pass : $father_data[0]['parent_password'];
				$arrayupdate =array(
					'parent_name' => $Name_u,
					'parent_phone' => $Phone_u,
					'parent_email' => $Email_u,
          'parent_password'=>$pass_u
				);



                $update = $this->MainModel->updatedata('father','parent_id' ,$this->post('parent_id'),$arrayupdate);
                    if($update){
                      $teacherdata = $this->MainModel->getwhere('father','parent_id',$this->post('parent_id'),'parent_id ASC');

                      unset($teacherdata[0]['parent_password']);
                      unset($teacherdata[0]['parent_token_web']);
                      unset($teacherdata[0]['parent_enterdate']);
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
