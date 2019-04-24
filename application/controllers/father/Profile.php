<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    public function index()
    {
        $data['title'] = 'تقييم';
        $parent_id = $this->session->userdata('parent_id');
        $parent_info = $this->MainModel->getwhere('father','parent_id',$parent_id,'parent_id ASC')[0];
        $data['parent_name'] = $parent_info['parent_name'];
        $data['parent_email'] = $parent_info['parent_email'];
        $data['parent_phone'] =$parent_info['parent_phone'];
    }

    public function update(){
      if($this->input->post()){

            $config = array(
                     array(
                         'field'   => 'parent_name',
                         'label'   => 'parent_name',
                         'rules'   => 'trim|xss_clean'
                      ),
                     array(
                         'field'   => 'parent_email',
                         'label'   => 'parent_email',
                         'rules'   => 'trim|xss_clean'
                      ),array(
                         'field'   => 'parent_password',
                         'label'   => 'parent_password',
                         'rules'   => 'trim|xss_clean'
                      ),array(
                         'field'   => 'parent_phone',
                         'label'   => 'parent_phone',
                         'rules'   => 'trim|xss_clean'
                      )                      );



                $this->form_validation->set_rules($config);
                $this->form_validation->set_error_delimiters('<li>','</li>');
                if ($this->form_validation->run() == FALSE)
                {
                    $data['error'] = validation_errors();
                }else{
                      $parent_data = $this->MainModel->getwhere('father','parent_id',$this->session->userdata('parent_id'),'parent_id ASC');
                      $Name = $this->input->post("parent_name");
                             $Name_u  =  (isset($Name) AND !empty($Name) ) ? $Name : $parent_data[0]['parent_name'];
              			   $Phone = $this->input->post("parent_phone");
                             $Phone_u  =  (isset($Phone) AND !empty($Phone) ) ? $Phone : $parent_data[0]['parent_phone'];

              			   $Email = $this->input->post("parent_email");
                             $Email_u  =  (isset($Email) AND !empty($Email) ) ? $Email : $parent_data[0]['parent_email'];
                      $pass = md5($this->input->post('parent_password'));
                      $Email_u2  =  (isset($pass) AND !empty($pass) ) ? $pass : $parent_data[0]['parent_password'];
                      $arrayupdate =array(
              					'parent_name' => $Name_u,
              					'parent_phone' => $Phone_u,
              					'parent_email' => $Email_u,
                        'parent_password'=> $Email_u2
              				);

                      $update = $this->MainModel->updatedata('father','parent_id' ,$this->session->userdata('parent_id'),$arrayupdate);
                          if($update){
                             $data['done'] = 'Profile is updated Successfully';
                        }else{
                            $data['error'] = 'Error in update' ;
                        }

                }


      }
    }
    }



?>
