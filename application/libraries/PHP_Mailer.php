<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PHP_Mailer {

  public function __construct()
    {
       require_once(APPPATH.'PHPMailer/PHPMailerAutoload.php');

    }

   /* public function PHP_Mailer() {
        require_once(APPPATH.'PHPMailer/PHPMailerAutoload.php');
    }*/
}
