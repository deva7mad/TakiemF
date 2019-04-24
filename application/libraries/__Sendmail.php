<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail {

        public function __construct($params)
        {
            $CI =& get_instance();
            $CI->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['wordwrap'] = TRUE;
            $CI->email->initialize($config);
          
            
            $CI->email->from($params['from'], $params['name']);
            $CI->email->to($params['to']);
            $CI->email->subject($params['subject']);
            $forgetpassword = $CI->load->view($params['template'],$params['data']  ,true);
            $CI->email->message($forgetpassword);
            $send = $CI->email->send(); 
            return ($send ? true : false);
            //$CI->email->print_debugger(array('headers'));
                          
        }
       
        
}