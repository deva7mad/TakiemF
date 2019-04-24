<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


    public function index()
    {



        $data['title'] = 'Create New Account';

        $this->load->view('cpanel/teacher/registration/sign-up',$data);


    }

    public function create()
    {

      if($this->input->post()){

            $config = array(
                      array(
                         'field'   => 'teacher_name',
                         'label'   => 'teacher_name',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                    array(
                         'field'   => 'teacher_email',
                         'label'   => 'teacher_email',
                         'rules'   => 'trim|required|xss_clean'
                      ),array(
                         'field'   => 'teacher_phone',
                         'label'   => 'teacher_phone',
                         'rules'   => 'trim|required|xss_clean'
                      ),array(
                         'field'   => 'teacher_password',
                         'label'   => 'teacher_password',
                         'rules'   => 'trim|required|xss_clean'
                      )

                      );



                $this->form_validation->set_rules($config);
                $this->form_validation->set_error_delimiters('<li>','</li>');
                if ($this->form_validation->run() == FALSE)
                {
                    $data['error'] = validation_errors();
                }
                else{
                    /*if(strlen($this->input->post('merchant_mobile'))<11)
                    {
                        $data['error'] ='Wrong Phone!';
                    }*/
                    $mobile = $this->input->post('teacher_phone');
                     if($mobile<0){
                         $data['error'] = 'Wrong Number';
                     }
                    elseif (substr($mobile,0,1) != '0' AND strlen($this->input->post('teacher_phone')) == 11){
                        $data['error'] = 'Wrong Number';
                    }
                    elseif(substr($mobile,0,1) !='0' AND strlen($this->input->post('teacher_phone')) < 11)
                    {
                        $data['error'] = 'Wrong Number';
                    }
                    elseif(substr($mobile,0) =='00000000000')
                    {
                        $data['error'] = 'Wrong Number';
                    }
                    else{
                    $email = $this->input->post('teacher_email');
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $data['error'] = "Invalid email format";
                    }

                    else{
                     //if(strlen($))
                    $digits=4;
                    $code =str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                    $result = array(
                            'teacher_name'=>$this->input->post('teacher_name'),
                            'teacher_email'=>$this->input->post('teacher_email'),
                            'teacher_password'=>md5($this->input->post('teacher_password')),
                            'teacher_token_web'=> md5(uniqid(rand(), true)),
                            "teacher_token"=>'0',
                            'teacher_status'=>'deactive', // deactive / active
                            'teacher_code'=>$code,
                            'teacher_no_msg'=>'1',
                            'teacher_phone'=>$this->input->post("teacher_phone"),

                        );
                        $insert = $this->MainModel->insertdata('teacher',$result);
                        if($insert){
                             $data['done'] = 'New Account created successfully';
                        }else{
                            $data['error'] = 'Please Contact Support' ;
                        }

                        }

                }


      }

      //$this->load->view('login.php',$data);
        redirect('Site', 'refresh');

    }

    }



}
?>
