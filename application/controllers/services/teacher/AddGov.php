<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class addgov extends REST_Controller
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
                                 'field'   => 'government_name',
                                 'label'   => 'government_name',
                                 'rules'   => 'trim|xss_clean|required'
                              ),
                              array(
                                'field'     =>'government_parent',
                                'label'     =>'government_parent',
                                'rules'     =>'trim|xss_clean|required'
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
                            'government_name'=>$this->post('government_name'),
                            'government_parent'=>$this->post('government_parent')
                        );



                  $inserdb = $this->MainModel->insertdata('government',$result) ;
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
