<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class holidayupdate extends REST_Controller
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
				$holiday_data = $this->MainModel->getwhere('holiday','holiday_id',$this->post('holiday_id'),'holiday_id ASC');
				$Name = $this->post("holiday_name");
               $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $holiday_data[0]['holiday_name'];
			   $Phone = $this->post("holiday_startdate");
               $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $holiday_data[0]['holiday_startdate'];

			   $Email = $this->post("holiday_endate");
               $Email_u  =  (isset($Email) AND !empty($Email) ) ? $Email : $holiday_data[0]['holiday_endate'];
				$arrayupdate =array(
					'holiday_name' => $Name_u,
					'holiday_startdate' => $Phone_u,
					'holiday_endate' => $Email_u
				);



                $update = $this->MainModel->updatedata('holiday','holiday_id' ,$this->post('holiday_id'),$arrayupdate);
                if($update){
                  $holidaydata = $this->MainModel->getwhere('holiday','holiday_id',$this->post('holiday_id'),'holiday_id ASC');
                // print_r($holidaydata);
                  //return;
                  unset($holidaydata[0]['holiday_deletefag']);
                  $done = array("status"=>"1","msg"=>"تم تحديث البيانات بنجاح","data"=>array('holiday'=>$holidaydata[0]));
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
