<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/vendor/autoload.php';
use \Osms\Osms;
class Sms {
  
   public function __construct($params)
        {
            $config = array(
            'clientId' => 'YTcaFGCcLin0uRfc2LQrKcfi26KzNQmA',
            'clientSecret' => 'IYO5zHZJoHr1uDmM'
            );
              
                $osms = new Osms($config);
                // retrieve an access token
                $response = $osms->getTokenFromConsumerKey();
                  if (!empty($response['access_token'])) {
                        $senderAddress = 'tel:+20237493619';
                        $receiverAddress = 'tel:+2'.$params['number']; // 01201055935
                        $message = 'khassmy.com verification code : '.$params['code'];
                        $senderName = $params['sendername'] ;
                    
                       $sendSMS = $osms->sendSMS($senderAddress, $receiverAddress, $message, $senderName);
                       if($sendSMS){
                        return true ;
                       }else{
                        return false ;
                       }
                    } else {
                       return false ;
                    }
        }
}