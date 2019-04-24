<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class session extends REST_Controller
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
                                 'field'   => 'session_name',
                                 'label'   => 'session_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'session_start_time',
                                'label'     =>'session_start_time',
                                'rules'     =>'trim|xss_clean|required'
                              ),
                              
                              array(
                                 'field'   => 'session_end_time',
                                 'label'   => 'session_end_time',
                                 'rules'   => 'trim|xss_clean|required'
                                 
                              )
                      );


              $this->form_validation->set_rules($config);                    
             $this->form_validation->set_error_delimiters('','');
            if ($this->form_validation->run() == FALSE)
                {
              $this->response([
                    'Operation' => "validation"]
                     , REST_Controller::HTTP_NOT_FOUND);

                }else{                           
                       $result = array(
                            'session_name'=>$this->post('session_name'),
                            'session_start_time'=>$this->post('session_start_time'),
                            'session_end_time'=>$this->post('session_end_time')
                        );



                  $inserdb = $this->MainModel->insertdata('session',$result) ;
                  $insert_id = $this->db->insert_id();


                   if($inserdb){


               
                    $this->set_response(array("Operation"=>"success","Id"=>"$insert_id"), REST_Controller::HTTP_OK);
                  
                  }else{
                        $error = array('Operation'=>"Error" ,'Message'=>"Please Try Again") ;
                        $this->set_response($error, REST_Controller::HTTP_NOT_FOUND); 
                  }

                }     
          }



}
?>