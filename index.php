<html>

<body>



<?php
	echo "Hello git";
	die();
    $mailbox = imap_open("{imap.googlemail.com:993/ssl}INBOX", "quattrozeta2@googlemail.com", "ah672dp1!");
    $mail = imap_search($mailbox, "SINCE 2017-09-05");
    
    if($mail) {
	
	$output = '';
	
	rsort($mail);
	
	foreach($mail as $m) {
		
		
		
		//$mail_headers = imap_headerinfo($mailbox, $m);
		
		//echo imap_qprint(imap_body($mailbox, $m));  -- testo della mail
		
		//echo htmlentities($mail_headers->message_id).' <---> '.$mail_headers->date;
		
		//print_r($mail_headers);
		echo $mail_headers->message_id;
		//echo imap_uid($mailbox, $m);
		echo "<br><br>";
		
		$subject = $mail_headers->subject;
		$from = $mail_headers->fromaddress;
		
		
		
		//imap_setflag_full($mailbox, $mail[0], "\\Seen \\Flagged");
		/* get information specific to this email */
		//$overview = imap_fetch_overview($inbox,$email_number,0);
		//$message = imap_fetchbody($inbox,$email_number,2);
		
		/* output the email header information */
		//$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
		//$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
		//$output.= '<span class="from">'.$overview[0]->from.'</span>';
		//$output.= '<span class="date">on '.$overview[0]->date.'</span>';
		//$output.= '</div>';
		//echo $message;
		/* output the email body */
		//$output.= '<div class="body">'.$message.'</div>';
	}
	
	//echo $output;
} 
    
    /*$mail_headers = imap_headerinfo($mailbox, $mail[0]);
    $subject = $mail_headers->subject;
    $from = $mail_headers->fromaddress;
    echo $from;
    imap_setflag_full($mailbox, $mail[0], "\\Seen \\Flagged");*/
    imap_close($mailbox);
?>




</body>

</html>
