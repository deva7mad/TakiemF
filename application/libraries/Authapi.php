<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Authapi{
  
   public function login($username, $password)
        {
           return md5('admin:REST API:1234');
           
        }
}