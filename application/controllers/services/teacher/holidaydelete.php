<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class holidaydelete extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {


    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'holiday_id',
                         'label'   => 'holiday_id',
                         'rules'   => 'trim|required|xss_clean'
                      ),
					  array(
                         'field'   => 'holiday_name',
                         'label'   => 'holiday_name',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'holiday_startdate',
                         'label'   => 'holiday_startdate',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'holiday_endate',
                         'label'   => 'holiday_endate',
                         'rules'   => 'trim|xss_clean'
                      ),



                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $error =array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى ","data"=>null);
                   $this->set_response($error, REST_Controller::HTTP_OK);

                }else{

				$arrayupdate =array(
					'holiday_deletefag' => '1',

				);



                $update = $this->MainModel->destroy('holiday','holiday_id' ,$this->post('holiday_id'));
                if($update){
                    $done = array("status"=>"1","msg"=>"تم حذف الاجازة بنجاح","data"=>null);
                   $this->set_response($done, REST_Controller::HTTP_OK);
                }
                else {
                  $error =array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى ","data"=>null);
                   $this->set_response($error, REST_Controller::HTTP_OK);
                }
                }
          }



}
?>
