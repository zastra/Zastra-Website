<?php
	require_once "Mail.php";
	
	/*
		requires
		pear install mail
		pear install Net_SMTP
		
		The sends email via a preconfigured gmail account. act/pwd required.
	
		NOT TESTED EXTENSIVELY. PLEASE CHECK FOR EDGE CASES BEFORE PRODUCTION.
	*/	
		
	(isEmailRequestValid())?buildMessageAndSendMail():sendError();

	//echo(isEmailRequestValid()?"true":"false");

	function sendError()
	{
		echo ("\"error\":\"empty post request\"");
	}	

	function isEmailRequestValid()
	{
		return (isset($_POST) && (count($_POST)>0));
	}	

	function buildMessageAndSendMail()
	{	
		$sub = "Zastra Contact";
		$msg = "<html><head></head><body>";
		foreach($_POST as $name => $value)
		{
			$msg = $msg.$name." = ".$value."<br/>";
		}
		
		$msg = $msg."</body></html>";
		sendMail($sub,$msg);		
	}

	function sendMail($subject,$body) {
		
		$from = "Zastra Mail <praveen.selvam@gmail.com>";
	        $to = "Zastra Info <praveen.selvam@gmail.com>";

        	//$subject = "Php work email";
	        //$body = "Parameterized test email";

        	$host = "ssl://smtp.gmail.com";
	        $port = "465";

	        $username = "praveen.selvam@gmail.com";
	        $password = "#";

	        $headers = array (
        	                        'From'=>$from,
                	                'To'=>$to,
                        	        'Subject'=>$subject,
					                        'Content-Type'=>'text/html'
                        	 );
	        $smtp = Mail::factory('smtp',
        	                        array(
                	                        'host'=>$host,
                        	                'port'=>$port,
                                	        'auth'=>true,
                                        	'username'=>$username,
	                                        'password'=>$password
        	                             )
	                	             );
        	$mail = $smtp->send($to,$headers,$body);

	        if(PEAR::isError($mail))
	        {
        	        echo("{\"error\":\"".$mail->getMessage()."\"}");
	        }else{
			echo("{\"success\":\"success\"}");
		}
	}

?>
