<?php
App::uses('AbstractTransport', 'Network/Email');

class AwsTransport extends AbstractTransport {

	//MCL Config
	var $domain_priv ="-----BEGIN RSA PRIVATE KEY-----
MIIBOwIBAAJBAMeER1iFBnw+xkWdK+RVqLjnSzZYTPt3BD0NActZIxa1ZAaT66tK
tT1HGr4MS0Ud8uwJI3IRG0+wUM2xVv58ZVcCAwEAAQJAIJlIXvo9OQe4tZ8ckM4+
JxgDffmnel7T3nXFmUgTJ55putWwNg3Il4a8PxbQSPKz/pav/LdkxW7k+jOQK2tp
wQIhAOjJe3lqDcAF8X3/JlPtLhAZuqx4dMttDaG/OoDJSg6pAiEA22l7QRuDLqh6
6ceHBWgfZC1gkqBOuJRrKT6mBWCfU/8CIQCQ3jqSP7bY5pn4EF544mTFLk3m4XvF
0VMncstktF/7KQIgTGmn6zzRquYyKEi81T018YV8JJR/1fiaeXrABw9nbbECIQDd
5fqRx6DxjD2sH5GARuNivqv1ARwjCa6XG8WBD3aOvA==
-----END RSA PRIVATE KEY-----" ;
	var $domain_d='mycommunitylife.com' ;
	var $domain_s='mcl' ;

/*
	//MCLIFE.IT config
	var $domain_priv ="-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBALoCQhcveReJ1wh8CbzedLGH/4m41htSRj1pRqo4HAc7P4HTYBQn
Qq2lXQi74fNz8TlHY0j6R7a9dtKrqoWA1qkCAwEAAQJACxSXW0o4rG5JoPfCnL2j
te+kCVA5cOc1x/K9guZUxRloSDyCeTblvv+yP9a84QX2GFwRq51IAAupT2/QFwJB
AQIhAPM8lEBxiA4h29H9dTgBOpkV9tEjWAIizRRI/+4e9TFXAiEAw8Turv9ia8QW
DSxCrq7j5NaVKLmjFX2qhogF/xnNN/8CIQC4gb5vd+9d0P8/NgUh24TItSmJkUbk
L+PivFEvHtqddwIgDHisN+u/Clx4hyhNqzErBXYCFJEW6ZSS23Uo5KJxJ2MCIACr
SmgWAiPs0HVoXscGfi/XItB4dL7FMgF7VNHeKK0D
-----END RSA PRIVATE KEY-----";
	var $domain_d='mclife.it' ;
	var $domain_s='mcl' ;
*/

/*
	//GREYBACK CONFIG
	var $domain_priv = "-----BEGIN RSA PRIVATE KEY-----
MIIBOQIBAAJBALgMCL/fyGgfAWIrnI4eT0L+Gt+DURMjm3WKB+qqZe/AjgssMy5l
l98TEOnJZiC9vQI4FFYxlMhLt45+kkgsfvECAwEAAQJAYIj3YeT4Eh0JNbvYTvb4
7hOodspDET3hAcLXqi+cbib2yFrWVblzx8sBWCWNGKHg2QcYmu5NzcN/7rWCgG88
AQIhAN//UaFxCt8XVWHXthz9Bdq6WfhYM+kJsZwTid1n9b4xAiEA0leJKlwhvxQs
hUZ/WeyfoculxBlnrWW3bfUQxhRW3MECIF1x2dALpIlk5o2mu6ZkN6kDzLy5rw4s
qRd/XygqUm5BAiBHMypTFGy36XRIiNyC6/39Hpo2DwNxRoUYy2OqKSheAQIgK+77
DKkOBVOKWksBgVF0GJ8SuNMPPy+WRa9OhcrEUX8=
-----END RSA PRIVATE KEY-----" ;
	var $domain_d='greyback.net' ;
	var $domain_s='steeple' ;
*/

    public function send(CakeEmail $email) {
    	$headers = $email->getHeaders(array('from', 'sender', 'replyTo', 'readReceipt', 'returnPath', 'to', 'cc', 'subject'));
    	$subject = $headers['Subject'];
		$headers = $this->_headersToString($headers);
		$body = implode("\r\n", $email->message()); 

		App::import('Vendor','DKIM',array('file' => 'dkim'.DS.'class.mailDomainSigner.php'));
		$mds = &new mailDomainSigner($this->domain_priv,$this->domain_d,$this->domain_s);
		
		//$body = quoted_printable_encode($body);

		$body = $mds->sign(
			$headers."\r\n\r\n".$body,
			"Subject:Content-Type:MIME-Version:Content-Transfer-Encoding:Received:To:From",
			true,
			true,
			false
		);
		//die(debug($body));
        App::import('Vendor','AWS',array('file' => 'aws'.DS.'sdk.class.php'));
		$Ses = new AmazonSES();
		$response = $Ses->send_raw_email(array('Data' => base64_encode($body)));
		if($response->status == 200) {
			return true;
		} else {
			die(debug($response));
		}
    }

}