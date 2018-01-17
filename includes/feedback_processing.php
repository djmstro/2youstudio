<?php
		$name = "";
		$tel = "";
		$email = "";
		$textarea = "";
		$optionsRadios1 = "";
		$optionsRadios2 = "";

		$to = "info@2youstudio.com";
		$from = "";
		$subject = "";
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "От: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
		mail ($to, $subject, $headers, $name, $tel, $email, $textarea, $optionsRadios1, $optionsRadios2)
?>