<?php

    require 'vendor/autoload.php';
	
	class sendmail
	{
		public static function sendmail($to,$sub,$msg)
		{
			$key = "";
			$email = new \sendGrid\Mail();
			$email->setFrom("YourName@domain.com");
			$email->setSubject($sub);
			$email->addTo($to);
			$email->addContent("text/plain",$msg);
			
			$sendgrid = new \sendGrid($key);
			
		}
	}

?>