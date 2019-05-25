<?php 
if(!defined('BASEPATH')) exit ('No direct script access allowed');



if(!function_exists('sendEmail_helper')){
	function sendEmail_helper($to,$from,$subject,$message){

	$ci =& get_instance();
	$errMsg = '';

	$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 25,
            'smtp_user' => 'solarman.darshan@gmail.com',
            'smtp_pass' => 'SolarMan1', 
            'smtp_crypto' => 'tls',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

	$ci->email->set_newline("\r\n");
	$ci->email->from($from); // change it to yours
	$ci->email->to($to);// change it to yours
	$ci->email->subject($subject);
	$ci->email->message($message);
     if($ci->email->send()){
      	return true;
     }
     else{
      	return false;
    }
    	
	}
}


if(!function_exists('send_email')){
	function send_email($to,$from,$subject,$message){
		 $ci = &get_instance();

		 echo "1";exit;
		$config['protocol']  = "smtp";
    	$config['smtp_host'] = "ssl://smtp.gmail.com";
    	$config['smtp_port'] = "465";
    	$config['smtp_user'] = "smartads.darshan@gmail.com";
    	$config['smtp_pass'] = "Darshan@1710";
    	$config['charset'] 	 = "utf-8";
        $config['mailtype']  = "html";
        $config['newline']   = "\r\n";
    	$ci->email->initialize($config);	

		 $ci->email->from($from); 
         $ci->email->to($to);
         $ci->email->subject($subject); 
         $ci->email->message($message); 
         if($ci->email->send()){
         	$retunArr['errCode'] = -1;
         	$retunArr['errMsg']	 = 'success';
         }else{
         	$retunArr['errCode'] = -2;
         	$retunArr['errMsg']  = $ci->email->print_debugger();	
         }
         print_r($retunArr);exit;
         return $retunArr;
	}
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>
