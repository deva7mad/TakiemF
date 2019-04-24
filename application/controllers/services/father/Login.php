<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class login extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
               // Set the response and exit
                $this->response([
                    'Operation' => "error",
                    'Message' => 'Please Post Data'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'parent_email',
                         'label'   => 'parent_email',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                       array(
                         'field'   => 'parent_password',
                         'label'   => 'parent_password',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                      array(
                          'field'     =>'parent_token',
                          'label'     =>'parent_token',
                          'rules'     =>'trim|required|xss_clean'
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
                  $parent_email = $this->MainModel->getwhere('father','parent_email',$this->post('parent_email'),'parent_id ASC');
                  if(empty($parent_email[0])){
                    $data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"عفواٌ هذا البريد الإلكترونى غير مسجل","data"=>$data);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }
                  else{


                 $data = array(
                            'parent_email'=>$this->post('parent_email'),
                            'parent_password'=>md5($this->post('parent_password')),
                            //'parent_token'=> $this->post('parent_token')
							);

                  $father = $this->MainModel->getwherearray('father',$data, 'parent_id ASC') ;

            if(!empty($father[0]) AND ($father[0]['parent_status'] == 'active') AND $father[0]['parent_token']==$this->post('parent_token')){
                    unset($father[0]['parent_password']);
                    unset($father[0]['parent_token_web']);
                    unset($father[0]['parent_enterdate']);
                    $done = array("status"=>"1","msg"=>"تم تسجيل الدخول بنجاح","data"=>$father[0]) ;
                               $this->set_response($done, REST_Controller::HTTP_OK);
				  }
          elseif (!empty($father[0]) AND $father[0]['parent_token']!=$this->post('parent_token')) {
            $token = array(
              'parent_token'=>$this->post('parent_token')
            );
            $updatetoken = $this->MainModel->updatedataarray('father',$data,$token);
            if($updatetoken){
            $father1 = $this->MainModel->getwherearray('father',$data, 'parent_id ASC') ;
                unset($father1[0]['parent_password']);
              unset($father1[0]['parent_token_web']);
              unset($father1[0]['parent_enterdate']);
              $done = array("status"=>"1","msg"=>"تم تسجيل الدخول بنجاح","data"=>$father1[0]) ;
              $this->set_response($done, REST_Controller::HTTP_OK);
            }
            else{
                       $data = json_decode ("{}");
                       $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                       $this->set_response($done, REST_Controller::HTTP_OK);
                     }

          }
				  else{
            $data = json_decode ("{}");
            $done = array("status"=>"0","msg"=>"برجاء التأكد من كلمة المرور","data"=>$data);
                       $this->set_response($done, REST_Controller::HTTP_OK);
				  }


}




                }
          }



}
?>
