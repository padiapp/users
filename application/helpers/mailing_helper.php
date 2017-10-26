<?php
function setmailconfig(){
	return array(
		'smtp_host'=>'mail.padi.net.id',
		'smtp_port'=>'25',
		'protocol'=>'smtp',
		'mailtype'=>'html',
	);
}
function mailaccounts(){
	return array(
		'developermail' => 'PadiApp<puji@padi.net.id>',
		'supportmail' => 'PadiApp@padi.net.id<support@padi.net.id>',
		'bccmail'=>'pw.prayitno@gmail.com',
	);
}
