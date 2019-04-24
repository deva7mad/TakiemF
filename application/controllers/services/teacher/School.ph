<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class registration extends REST_Controller
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
                                 'field'   => 'Name',
                                 'label'   => 'Name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'Email',
                                'label'     =>'Email',
                                'rules'     =>'trim|xss_clean|required'
                              ),
                              
                              array(
                                 'field'   => 'Password',
                                 'label'   => 'Password',
                                 /*'rules'   => 'trim|xss_clean|required|in_list[email,sms]'*/
                                 'rules'   => 'trim|xss_clean'  //temporary before moaz edit it
                              ),
                            array(
                                'field'     =>'Phone',
                                'label'     =>'Phone',
                                'rules'     =>'trim|xss_clean'
                              )


                      );


              $this->form_validation->set_rules($config);                    
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
              $this->response([
                    'Operation' => "validation",
                    "Message"=>"Customer Already Register"]
                     , REST_Controller::HTTP_NOT_FOUND);

                }else{                           

     
                       

                       $result = array(
                            'Name'=>$this->post('Name'),
                            'Email'=>$this->post('Email'),
                            'Phone'=>$this->post('Phone'),
                            'Password'=>md5($this->post('Password')),
                            
                        );



                  $inserdb = $this->MainModel->insertdata('teacher',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){


               
                    $this->set_response(array("Operation"=>"4","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                  
                  }else{
                        $error = array('Operation'=>"Error" ,'Message'=>"Please Try Again") ;
                        $this->set_response($error, REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                  }

                }     //   omar
          }



}
?>