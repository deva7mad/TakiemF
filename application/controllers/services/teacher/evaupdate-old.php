<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class evaupdate extends REST_Controller
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
                         'field'   => 'e_id',
                         'label'   => 'e_id',
                         'rules'   => 'trim|required|xss_clean'
                      ),
					  array(
                         'field'   => 'e_type',
                         'label'   => 'e_type',
                         'rules'   => 'trim|xss_clean'
                      ),
					  array(
                         'field'   => 'e_text',
                         'label'   => 'e_text',
                         'rules'   => 'trim|xss_clean'
                      )
                 ) ;

               $this->form_validation->set_rules($config);
               $this->form_validation->set_error_delimiters('','');
               if ($this->form_validation->run() == FALSE)
                {
                  $error =array("status"=>"0","msg"=>"برجاء المحاولة مرة أخرى ","data"=>null);
                   $this->set_response($error, REST_Controller::HTTP_OK);

                }else{
				$holiday_data = $this->MainModel->getwhere('evaluations','e_id',$this->post('e_id'),'e_id ASC');
				$Name = $this->post("e_type");
        $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $holiday_data[0]['e_type'];
			  $Phone = $this->post("e_text");
        $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $holiday_data[0]['e_text'];
			   	$arrayupdate =array(
					'e_type' => $Name_u,
					'e_txt' => $Phone_u,
						);



                $update = $this->MainModel->updatedata('evaluations','e_id' ,$this->post('e_id'),$arrayupdate);
                if($update){
                  $holidaydata = $this->MainModel->getwhere('evaluations','e_id',$this->post('e_id'),'e_id ASC');
                // print_r($holidaydata);
                  //return;
                  unset($holidaydata[0]['e_deleteflag']);
                  $done = array("status"=>"1","msg"=>"تم تحديث البيانات بنجاح","data"=>array('evalution'=>$holidaydata[0]));
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
