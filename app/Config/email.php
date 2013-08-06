<?php
class EmailConfig {

	public $default = array(
		'transport' => 'Mail',
		'from' => 'you@localhost',
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);
	
	public $gmail = array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => 465,
        'username' => 'admissions@applytocfni.com',
        'password' => 'bob13013',
        'transport' => 'Smtp'
    );

	public $smtp = array(
		'transport' => 'Smtp',
		'from' => array('admissions@cfni.org' => 'Christ for the Nations Institute'),
		'host' => 'ssl://email-smtp.us-east-1.amazonaws.com',
		'port' => 465,
		'timeout' => 30,
		'username' => 'AKIAJUJN3UPSHR5TXDTA',
		'password' => 'AmkgRFn6/OrjbwWo4hNQPWU1liDHjaQF19ISXpiT0lE5',
		//'client' => null,
		'log' => true
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);

	public $fast = array(
		'from' => 'you@localhost',
		'sender' => null,
		'to' => null,
		'cc' => null,
		'bcc' => null,
		'replyTo' => null,
		'readReceipt' => null,
		'returnPath' => null,
		'messageId' => true,
		'subject' => null,
		'message' => null,
		'headers' => null,
		'viewRender' => null,
		'template' => false,
		'layout' => false,
		'viewVars' => null,
		'attachments' => null,
		'emailFormat' => null,
		'transport' => 'Smtp',
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'user',
		'password' => 'secret',
		'client' => null,
		'log' => true,
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);

}
