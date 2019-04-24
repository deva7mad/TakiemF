<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_notification {


public function send_notification($notification_type,$data,$email_to,$reciever_name){
    /** parameters:
        notification type,
        data: contain html template (for $mail->msgHTML element), and all variables needed for mail template,
        email to: destination,
        reciever name.
     */
        /**  create ci instance to load php_mailer library in our mail notification library*/
       $CI =& get_instance();
        $CI->load->library('PHP_Mailer');
      /*   require_once(APPPATH."third_party/phpmailer/PHPMailerAutoload.php");      */
        $mail = new PHPMailer();
        /** */
        /*$mail->IsSMTP();*/
       /* $mail->IsMail();*/ /*omar*/   
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 587;
        $mail->Username   = "omar@epicsyst.net";
        $mail->Password   = "Epic@lye@r";
        /** set from mail */
        $mail->SetFrom('omar@epicsyst.net', 'EPIC');
        /** */
        $mail->Subject    = "(Khassmy) " . $notification_type;
        /**  mail template
         we have already assign the mail template view to $data array:
         $data['template'] = $this->load->view(); */
        $mail->msgHTML($data['template']);
        /** mail template  */

       /* $mail->AddReplyTo('no-reply@wsiksa.com', 'NO REPLY');*/

      if(is_array($email_to)){
        foreach ($email_to as $row) { //This iterator syntax only works in PHP 5.4+
    $mail->addAddress($row);

    }   }

    else{
       $destino = $email_to;

      $mail->AddAddress($destino, $reciever_name);
    }

        $mail->Send();
      /*   $mail->clearAddresses(); */  /* for loop duplicate mail problem*/

               if(!$mail->Send()) {
                 echo 'Mailer Error: ' . $mail->ErrorInfo;


                   return false;


                } else {


                    /** Clear last email */
                    $mail->ClearAllRecipients();
                    /** Clear last email */
                    return true;

               }


}

}
?>