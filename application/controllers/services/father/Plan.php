<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class Plan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

  public function index_get()
    {
      //getwherearrayselected($tablename,$data,$orderby,$selected)
        $student_id = $this->get('student_id');
        $week_id = $this->get('week_id');
        $day_id = $this->get('day_id');
        if(!empty($student_id) AND empty($week_id) AND empty($day_id)){
          $select = array('plan_week_id','plan_week');
          $data = array('plan_student_id'=>$student_id);
          $plans = $this->MainModel->getwherearrayselected('new_plans',$data,'plan_id ASC',$select);
          if(!empty($plans)){
            $new = array_unique($plans,SORT_REGULAR);
            $new_data = array();
            foreach ($new as $key => $value) {
              $new_data[] = $value;
            }
          }

          if(!empty($plans)){
            $done = array("status"=>"1","msg"=>"جميع الخطط الأسبوعية","data"=>$new_data);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"لا توجد خطط أسبوعية","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
        }
        elseif (!empty($week_id) AND !empty($student_id) AND empty($day_id)) {
          $select = array('plan_day_id','plan_day');
          $data = array('plan_student_id'=>$student_id,'plan_week_id'=>$week_id);
          $plans = $this->MainModel->getwherearrayselected('new_plans',$data,'plan_id ASC',$select);
          if(!empty($plans)){
            $new = array_unique($plans,SORT_REGULAR);
            $new_data = array();
            foreach ($new as $key => $value) {
              $new_data[] = $value;
            }
          }
          if(!empty($plans)){
            $done = array("status"=>"1","msg"=>"جميع ايام الاسبوع","data"=>$new_data);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"لا توجد خطط أسبوعية","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
        }
        elseif (!empty($week_id) AND !empty($student_id) AND !empty($day_id)) {
          $select = array('plan_day_id','plan_day');
          $data = array('plan_student_id'=>$student_id,'plan_week_id'=>$week_id,'plan_day_id'=>$day_id);
          $plans = $this->MainModel->getwherearray('new_plans',$data,'plan_id ASC');
          if(!empty($plans)){
            $done = array("status"=>"1","msg"=>"جميع الفترات","data"=>$plans);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
          else{
            $done = array("status"=>"0","msg"=>"لا توجد خطط أسبوعية","data"=>[]);
            $this->set_response($done, REST_Controller::HTTP_OK);
          }
        }




    }
 public function index_post()
 {

        $config = array(
                    array(
                         'field'   => 'student_id',
                         'label'   => 'student_id',
                         'rules'   => 'trim|required|xss_clean'
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
                  $delete_child = $this->MainModel->destroy('students','student_id',$this->post('student_id'));
                  if($delete_child){
                    $data = json_decode ("{}");
                    $done = array("status"=>"1","msg"=>"تم حذف البيانات بنجاح","data"=>$data);
                    $this->set_response($done, REST_Controller::HTTP_OK);

                  }
                  else{
                    $data = json_decode ("{}");
                    $done = array("status"=>"0","msg"=>"برجاء المحاولة مرة اخرى","data"=>$data);
                    $this->set_response($done, REST_Controller::HTTP_OK);
                  }

                    }

                }




}
?>
