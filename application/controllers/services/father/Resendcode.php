<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Resendcode extends REST_Controller
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
                                 'label'    =>'parent_email',
                                 'rules'   => 'trim|xss_clean'
                            ),


                      );


              $this->form_validation->set_rules($config);
              if ($this->form_validation->run() == FALSE)
                {
                  $data = json_decode ("{}");
                  $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                      $this->set_response($done, REST_Controller::HTTP_OK);

                 }else{

                    $wherearray = array(
                            'parent_email'=>$this->post('parent_email')
                    );
                  $parent = $this->MainModel->getwherearray('father',$wherearray,'parent_id ASC') ;
                    if(empty(parent[0])){
                        $data = json_decode("{}");
                        $done = array("status"=>"0","msg"=>"لا يوجد ولى أمر مسجل بهذا البريد الإلكترونى","data"=>$data);
                        $this->set_response($done,REST_Controller::HTTP_OK);
                     }

                    if($parent[0]['parent_nsms'] == 3 AND empty($parent[0]['parent_endate'])){
                                $date = date('h:i:s');
                                $duration = 1;
                                $end_date = date('h:i:s',strtotime('+'.$duration.'minutes'));
                                $error = array("status"=>"0","msg"=>$end_date);
                                $result = array(
                                        'parent_endate'=>$end_date
                                     );
                                $updatedate = $this->MainModel->updatedata('parent','parent_id',$parent[0]['parent_id'],$result) ;
                                $this->set_response($error, REST_Controller::HTTP_OK);
                              }
                    elseif($parent[0]['parent_nsms'] == 3 AND !empty($parent[0]['parent_endate']))
                            {
                                $newdate = date('h:i:s');

                                if($newdate >= $parent[0]['parent_endate'])
                                {
                                  $digits1=5;
                                    $code1 =str_pad(rand(0, pow(10, $digits1)-1), $digits1, '0', STR_PAD_LEFT);
                                    $result = array(
                                        'parent_codesms'=>$code1,
                                        'parent_nsms' =>'1',
                                        'parent_endate' =>NULL
                                     );
                                    $updatedate = $this->MainModel->updatedata('parent','parent_id',$parent[0]['parent_id'],$result) ;
                                    $error = array("status"=>"0","msg"=>'3');
                                    $this->set_response($error, REST_Controller::HTTP_OK);

                                }
                                else{
                                   $error =  array("status"=>"0","msg"=>$parent[0]['parent_endate']);
                                    $this->set_response($error, REST_Controller::HTTP_OK);
                                }
                            }

                        else{

                        $digits=4;
                        $code =str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

                          $result = array(
                                    'parent_codesms'=>$code,
                                    'parent_nsms'=>(int)$parent[0]['parent_nsms']+1 ,
                                     'parent_status'=>'deactive',

                                  );

                      $updatedate = $this->MainModel->updatedata('parent','parent_id',$parent[0]['parent_id'],$result) ;

                        if($updatedate){
                          $done = array("status"=>"1","msg"=>"تم تغيير البيانات بنجاح","data"=>$parent[0]);
                           $this->set_response($done, REST_Controller::HTTP_OK);


                          }else{
                            $data = json_decode ("{}");
                            $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                                $this->set_response($done, REST_Controller::HTTP_OK);

                          }

                          }





                }
          }


}
?>
