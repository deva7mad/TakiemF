<?php
    class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {

        if($return):
        $content  = $this->view('cpanel/include/header.php', $vars, $return);
        $content .= $this->view('cpanel/include/sidebar.php', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('cpanel/include/footer.php', $vars, $return);

        return $content;
    else:
        $this->view('cpanel/include/header.php', $vars);
        $this->view('cpanel/include/sidebar.php', $vars);
        $this->view($template_name, $vars);
        $this->view('cpanel/include/footer.php', $vars);
    endif;
    }


     public function template_merchant($template_name, $vars = array(), $return = FALSE)
    {

        if($return):
        $content  = $this->view('cpanel/admin_merchant/include/header.php', $vars, $return);
        $content .= $this->view('cpanel/admin_merchant/include/sidebar.php', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('cpanel/admin_merchant/include/footer.php', $vars, $return);

        return $content;
    else:
        $this->view('cpanel/admin_merchant/include/header.php', $vars);
        $this->view('cpanel/admin_merchant/include/sidebar.php', $vars);
        $this->view($template_name, $vars);
        $this->view('cpanel/admin_merchant/include/footer.php', $vars);
    endif;
    }

    public function template_new($template_name, $vars = array(), $return = FALSE)
    {

        if($return):
        $content  = $this->view('cpanel/merchant/include/header.php', $vars, $return);
        $content .= $this->view('cpanel/merchant/include/sidebar.php', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('cpanel/merchant/include/footer.php', $vars, $return);

        return $content;
    else:
        $this->view('cpanel/merchant/include/header.php', $vars);
        $this->view('cpanel/merchant/include/sidebar.php', $vars);
        $this->view($template_name, $vars);
        $this->view('cpanel/merchant/include/footer.php', $vars);
    endif;
    }

    public function template_customer($template_name, $vars = array(), $return = FALSE)
    {

        if($return):
        $content  = $this->view('cpanel/customer/include/header.php', $vars, $return);
        $content .= $this->view('cpanel/customer/include/sidebar.php', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('cpanel/customer/include/footer.php', $vars, $return);

        return $content;
    else:
        $this->view('cpanel/customer/include/header.php', $vars);
        $this->view('cpanel/customer/include/sidebar.php', $vars);
        $this->view($template_name, $vars);
        $this->view('cpanel/customer/include/footer.php', $vars);
    endif;
    }

    



     public function fronttemplate($template_name, $vars = array(), $return = FALSE)
    {
        
        if($return):
        $content  = $this->view('front/include/header.php', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('front/include/footer.php', $vars, $return);

        return $content;
    else:
        $this->view('front/include/header.php', $vars);
        $this->view($template_name, $vars);
        $this->view('front/include/footer.php', $vars);
    endif;
    }
    public function timetoarabic($num){
        $western_arabic = array('0','1','2','3','4','5','6','7','8','9','am','pm');
        $eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩','صباحا','مساء');
        
        $str = str_replace($western_arabic, $eastern_arabic, $num);
        return $str;
    }
        public  function sendMessageThroughFCM($fields)
        {
            $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = array(
            'Authorization: key=AAAAyPQmuho:APA91bHUZz6QB2PcOkDROiEt7gmKf3QFxv8tQRZ9kn7XK6hkD1ap-xGvEo16kUexpRI-D1bU19fDGsTUBySLkrfCL69gbfmW0MCHdVfb_RDlVfjijr3cMqJIW-_IX7iN0K8Qwat3WgUa',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        if($result){
             return $result;
        }else{
             return false;
            
         }    
        }

  function sendMessageThroughFCM_abdelrahman($data) {

            $url = 'https://fcm.googleapis.com/fcm/send';

            $fields = array(
                'to' => 'fCgMRsu13vY:APA91bHzzjka6i2zs7b2mCDyUNipXcctdxsg8CS95JIor7-fFHvyGjWFHQCc-G4o0tMXlKNa7dFz_cjj7l4sDX6zgfMX0qmWEbI4DBp2VWpRgHfddwnIxcrFtXR1YkkFoOR4fPLOzNy2',
                'data' => $data,
            );

            //************   rplace this with your api key ***************//
            define("GOOGLE_API_KEY", "AAAAnz-ezR0:APA91bGvtPGaCQdYrHdFovK9f4vQIDU3cT_K4L76_u46zdcaoZsdLz2Cr0QfnrkF8GNsiTsmK_rkZ7aZNOItDxTtQb-_Q9Cx6ooMAsCQ779JiZn7EEwGb44-Z0kO59J8GLMQczl5JkdU");
            $headers = array(
                'Authorization: key=' . GOOGLE_API_KEY,
                'Content-Type: application/json'
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result2 = curl_exec($ch);

            if ($result2 === FALSE) {
                die('Curl failed: ' . curl_error($ch));
            }
            curl_close($ch);
          /* echo $result2; */
        }




}
?>