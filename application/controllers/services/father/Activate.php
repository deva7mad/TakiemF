<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class activate extends REST_Controller
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
                                 'field'   => 'parent_id',
                                 'label'   => 'parent_id',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                              array(
                                 'field'   => 'parent_token',
                                 'label'   => 'parent_token',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                              array(
                                 'field'   => 'parent_email',
                                 'label'   => 'parent_email',
                                 'rules'   => 'trim|required|xss_clean'
                              ),
                              array(
                                 'field'   => 'parent_phone',
                                 'label'   => 'parent_phone',
                                 'rules'   => 'trim|required|xss_clean'
                              ),


                      );


              $this->form_validation->set_rules($config);
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                  $this->set_response($error, REST_Controller::HTTP_OK);

                }else{


                 $result = array(
                            'parent_no_msg'=>'0',
                            'parent_status'=>'active', // inactive / active
                            'parent_token'=>$this->post('parent_token'),
                            'parent_email' =>$this->post('parent_email'),
                            'parent_phone' =>$this->post('parent_phone')
                        );
                  $updatedate = $this->MainModel->updatedata('father','parent_id',$this->post('parent_id'),$result) ;
                   $data = array(
                        'parent_id'=>$this->post('parent_id')
                        );
                  $parent = $this->MainModel->getwherearray('father',$data, 'parent_id ASC') ;
                  if($updatedate AND $parent AND !empty($parent[0])){
                         unset($parent[0]['parent_password']);
                         unset($parent[0]['parent_token']);
                         unset($parent[0]['parent_enterdate']);
                         unset($parent[0]['parent_no_msg']);
                         unset($parent[0]['parent_token_web']);

                        $done = array("status"=>"1","msg"=>"تم تفعيل الحساب بنجاح","data"=>$parent[0]) ;
                        $this->set_response($done, REST_Controller::HTTP_OK);
                  }else{
                    $data = json_decode ("{}");
                      $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                        $this->set_response($error, REST_Controller::HTTP_OK);
                  }



                }
          }



}
?>
