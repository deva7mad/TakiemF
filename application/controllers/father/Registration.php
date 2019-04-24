<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


    public function index()
    {
       $data['title'] = 'Create New Account';
        //load view
    }

    public function create()
    {

      if($this->input->post()){

            $config = array(
                      array(
                         'field'   => 'parent_name',
                         'label'   => 'parent_name',
                         'rules'   => 'trim|required|xss_clean'
                      ),
                    array(
                         'field'   => 'parent_email',
                         'label'   => 'parent_email',
                         'rules'   => 'trim|required|xss_clean'
                      ),array(
                         'field'   => 'parent_phone',
                         'label'   => 'parent_phone',
                         'rules'   => 'trim|required|xss_clean'
                      ),array(
                         'field'   => 'parent_password',
                         'label'   => 'parent_password',
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


                    $digits=4;
                    $code =str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                    $result = array(
                            'parent_name'=>$this->input->post('parent_name'),
                            'parent_email'=>$this->input->post('parent_email'),
                            'parent_password'=>md5($this->input->post('parent_password')),
                            'parent_token_web'=> md5(uniqid(rand(), true)),
                            "parent_token"=>'0',
                            'parent_status'=>'deactive', // deactive / active
                            'parent_code'=>$code,
                            'parent_no_msg'=>'1',
                            'parent_phone'=>$this->input->post("parent_phone"),

                        );
                        $insert = $this->MainModel->insertdata('father',$result);
                        if($insert){
                             $data['done'] = 'New Account created successfully';
                        }else{
                            $data['error'] = 'Please Contact Support' ;
                        }



                }


    }

    }



}
?>
