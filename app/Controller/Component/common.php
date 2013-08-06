<?php
/**
 * Common Class
 *
 * Place for commonly used functions
 *
 */
class Common {
/**
 * truncate function.
 * 
 * @param mixed $string
 * @param int $limit. (default: 100)
 * @param string $break. (default: " ")
 * @param string $pad. (default: "...")
 * @param string $tags. (default: "")
 * @return void
 * @access public
 * @static
 */
	static function truncate($string, $limit = 100, $break=" ", $pad="...", $tags = "") {
		// return with no change if string is shorter than $limit 
		$string = strip_tags($string,$tags);
		if(strlen($string) <= $limit) return $string; 

		// is $break present between $limit and the end of the string?  
		if(false !== ($breakpoint = strpos($string, $break, $limit))) { 
			if($breakpoint < strlen($string) - 1) { 
				$string = substr($string, 0, $breakpoint) . $pad; 
			} 
		} 
		return $string; 
	}

/**
 * slug function.
 * 
 * @param mixed $string
 * @return void
 * @access public
 * @static
 */
	static function slug($string) {
		$string = strtolower(trim($string));
		$string = preg_replace('/[^a-z0-9-]/i', '-', $string); 
		$string = preg_replace('/-[-]*/i', '-', $string);

		$currentMaximumURLLength = 100;

		if (strlen($string) > $currentMaximumURLLength) {
			$string = substr($string, 0, $currentMaximumURLLength);
		} 
		return $string;
	}

/**
 * dateFix function.
 * 
 * @param array $date. (default: array())
 * @return void
 * @access public
 * @static
 */
	static function dateFix(&$date = array()) {
		$out = "";

		if(!empty($date['date'])) {
			if(!empty($date['time'])) {
				$out = date('Y-m-d H:i:00',strtotime($date['date']." ".$date['time']));
			} else {
				$out = date('Y-m-d',strtotime($date['date']));
			}
		} else {
			if(!empty($date['time'])) {
				$out = date('H:i:00',strtotime($date['date']));
			}
		}

		if((empty($date['date']))&&(empty($date['time']))) {
			$out = null;
		}
		$date = $out;
	}

/**
 * dateBuild function.
 * 
 * @static
 * @param string $date. (default: "")
 * @return void
 * @access public
 * @static
 */
	static function dateBuild(&$date = "") {
		if(!empty($date)) {
			$dateObj = strtotime($date);
			$date = array(
				'date' => date('m/d/Y',$dateObj),
				'time' => date('h:ia',$dateObj),
			);
		} else {
			$date = array(
				'date' => "",
				'time' => ""
			);
		}

		return $date;
	}

/**
 * permFix function.
 * 
 * @static
 * @param array &$perms. (default: array())
 * @return void
 * @access public
 * @static
 */
	static function permFix(&$perms = array()) {
		$strPerms = "";
		if(!empty($perms)) {
			foreach($perms as $perm => $role) {
				$strPerms.=$role.":*,";
			}
			$perms = substr($strPerms,0,strlen($strPerms)-1);
		} else {
			$perms = "";
		}
	}


/**
 * permBuild function.
 * 
 * @static
 * @param string &$perms. (default: "")
 * @return void
 * @access public
 * @static
 */
	static function permBuild(&$perms = "") {
		$arData = explode(",",$perms);
		$arPerms = array();
		foreach($arData as $perm) {
			$arPerm = explode(":",$perm);
			$arPerms[] = $arPerm[0];
		}
		$perms = $arPerms;
	}


/**
 * getPositions function.
 * 
 * @param mixed $template
 * @return array
 * @access public
 */
	function getPositions($template) {
		$placeholders = $positions = array();
		preg_match_all('(###[A-Za-z0-9_\-]*###)',$template,$placeholders,PREG_SET_ORDER);

		foreach($placeholders as $key=>$val) {
			$placeholders[$key] = substr($val[0],3,strlen($val[0])-6);
			$positions[$placeholders[$key]] = "";
		}
		return $positions;
	}


/**
 * Request Allowed
 *
 * @param string $object 
 * @param string $property 
 * @param string $rules 
 * @param string $default 
 * @return void
 * @access public
 */
	function requestAllowed($object, $property, $rules, $default = false) {
		$allowed = $default;

		preg_match_all('/\s?([^:,]+):([^,:]+)/is', $rules, $matches, PREG_SET_ORDER);

		foreach ($matches as $match) {
			list($rawMatch, $allowedObject, $allowedProperty) = $match;
			$rawMatch = trim($rawMatch);
			$allowedObject = trim($allowedObject);
			$allowedProperty = trim($allowedProperty);
			$allowedObject = str_replace('*', '.*', $allowedObject);
			$allowedProperty = str_replace('*', '.*', $allowedProperty);

			$negativeCondition = false;
			if (substr($allowedObject, 0, 1) == '!') {
				$allowedObject = substr($allowedObject, 1);
				$negativeCondition = true;
			}

			if (preg_match('/^'.$allowedObject.'$/i', $object) && preg_match('/^'.$allowedProperty.'$/i', $property)) {
				$allowed = !$negativeCondition;
			}
		}
		return $allowed;
	}

/**
 * currentUrl function.
 * 
 * @access public
 * @return void
 */
	function currentUrl() {
		$pageURL = 'http';
		$pageURL .= "://";
		if(!empty($_SERVER['SERVER_PORT'])) {
			if($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$this->webroot;
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].$this->webroot;
			}
		} else {
			$pageURL .= 'www.grouppost.com'.$this->webroot;
		}
		return $pageURL;
	}


/**
 * generateRandom function.
 * 
 * @access public
 * @param int $length. (default: 10)
 * @return void
 */
	function generateRandom($length = 10, $numbers = false) {
		$random = "";
		
		// define possible characters
		$possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
		if($numbers) {
			$possible = "0123456789"; 
		}
		
		// set up a counter
		$i = 0; 
		
		// add random characters to $password until $length is reached
		while ($i < $length) { 
		
		// pick a random character from the possible ones
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		
		// we don't want this character if it's already in the password
		if (!strstr($random, $char)) { 
		$random .= $char;
		$i++;
		}
		
		}
		
		// done!
		return $random;
	}


/**
 * email function.
 * 
 * @access public
 * @param array $config. (default: array())
 * @return void
 */
	function email($config = array(), $message = "") {
		$settings = array(
			'to' => 'UNSET TO <info@greyback.net>',
			'cc' => array(),
			'bcc' => array(),
			'from' => array('admissions@cfni.org'=>'Christ for the Nations Institute'),
			'subject' => 'SUBJECT',
			'title' => 'TITLE',
			'template' => 'simple',
			'variables' => array()
		);

		$config = am($settings,$config);
		
		$config['variables']['currentUrl'] = Common::currentUrl();
		
		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail();
		$email->config('smtp');
		$email->from($config['from'])
			->to($config['to'])
			->subject($config['subject'])
			->template($config['template'])
			->emailFormat('html')
			->viewVars($config['variables']);
		if(!empty($config['replyTo'])) {
			$email->replyTo($config['replyTo']);
		}
		$email->send($message);
	}
	
	function link($url = "", $code = false) {
		App::uses('Link','Model');
		$Link = new Link();
		$link = $Link->lookup(array('link'=>$url),'short');
		if($link) {
			$short = $link;
		} else {
			$short = Common::generateRandom(6);
			$data = array(
				'Link' => array(
					'link' => $url,
					'short' => $short
				)
			);
			$Link->save($data);
		}
		if($code) {
			return $short;
		} else {
			return 'http://mclife.it/'.$short;
		}
	}

	function states($label = "") {
		return array(
			'AL'=>'Alabama','AK'=>'Alaska','AZ'=>'Arizona','AR'=>'Arkansas',
			'CA'=>'California','CO'=>'Colorado','CT'=>'Connecticut','DE'=>'Delaware',
			'DC'=>'District Of Columbia','FL'=>'Florida','GA'=>'Georgia','HI'=>'Hawaii',
			'ID'=>'Idaho','IL'=>'Illinois','IN'=>'Indiana','IA'=>'Iowa','KS'=>'Kansas',
			'KY'=>'Kentucky','LA'=>'Louisiana','ME'=>'Maine','MD'=>'Maryland','MA'=>'Massachusetts',
			'MI'=>'Michigan','MN'=>'Minnesota','MS'=>'Mississippi','MO'=>'Missouri','MT'=>'Montana',
			'NE'=>'Nebraska','NV'=>'Nevada','NH'=>'New Hampshire','NJ'=>'New Jersey',
			'NM'=>'New Mexico','NY'=>'New York','NC'=>'North Carolina','ND'=>'North Dakota',
			'OH'=>'Ohio','OK'=>'Oklahoma','OR'=>'Oregon','PA'=>'Pennsylvania','RI'=>'Rhode Island',
			'SC'=>'South Carolina','SD'=>'South Dakota','TN'=>'Tennessee','TX'=>'Texas',
			'UT'=>'Utah','VT'=>'Vermont','VA'=>'Virginia','WA'=>'Washington','WV'=>'West Virginia',
			'WI'=>'Wisconsin','WY'=>'Wyoming'
		);
	}
	
	function countries() {
		return array(
			'us' => 'United States',
			'af' => 'Afganistan', 'al' => 'Albania', 'dz' => 'Algeria', 'as' => 'American Samoa', 
			'ad' => 'Andorra', 'ao' => 'Angola', 'ai' => 'Anguilla', 'aq' => 'Antarctica', 'ag' => 'Antigua and Barbuda', 
			'ar' => 'Argentina', 'am' => 'Armenia', 'aw' => 'Aruba', 'au' => 'Australia', 'at' => 'Austria', 
			'az' => 'Azerbaijan', 
			'bs' => 'Bahamas', 
			'bh' => 'Bahrain', 
			'bd' => 'Bangladesh', 
			'bb' => 'Barbados', 
			'by' => 'Belarus', 
			'be' => 'Belgium', 
			'bz' => 'Belize', 
			'bj' => 'Benin', 
			'bm' => 'Bermuda', 
			'bt' => 'Bhutan', 
			'bo' => 'Bolivia', 
			'ba' => 'Bosnia and Herzegowina', 
			'bw' => 'Botswana', 
			'bv' => 'Bouvet Island', 
			'br' => 'Brazil', 
			'io' => 'British Indian Ocean Territory', 
			'bn' => 'Brunei Darussalam', 
			'bg' => 'Bulgaria', 
			'bf' => 'Burkina Faso', 
			'bi' => 'Burundi', 
			'kh' => 'Cambodia', 
			'cm' => 'Cameroon', 
			'ca' => 'Canada', 
			'cv' => 'Cape Verde', 
			'ky' => 'Cayman Islands', 
			'cf' => 'Central African Republic', 
			'td' => 'Chad', 
			'cl' => 'Chile', 
			'cn' => 'China', 
			'cx' => 'Christmas Island', 
			'cc' => 'Cocos Keeling Islands', 
			'co' => 'Colombia', 
			'km' => 'Comoros', 
			'cg' => 'Congo', 
			'cd' => 'Congo, Democratic Republic of the', 
			'ck' => 'Cook Islands', 
			'cr' => 'Costa Rica', 
			'ci' => 'Cote d\'Ivoire', 
			'hr' => 'Croatia Hrvatska', 
			'cu' => 'Cuba', 
			'cy' => 'Cyprus', 
			'cz' => 'Czech Republic', 
			'dk' => 'Denmark', 
			'dj' => 'Djibouti', 
			'dm' => 'Dominica', 
			'do' => 'Dominican Republic', 
			'tp' => 'East Timor', 
			'ec' => 'Ecuador', 
			'eg' => 'Egypt', 
			'sv' => 'El Salvador', 
			'gq' => 'Equatorial Guinea', 
			'er' => 'Eritrea', 
			'ee' => 'Estonia', 
			'et' => 'Ethiopia', 
			'fk' => 'Falkland Islands Malvinas', 
			'fo' => 'Faroe Islands', 
			'fj' => 'Fiji', 
			'fi' => 'Finland', 
			'fr' => 'France', 
			'fx' => 'France, Metropolitan', 
			'gf' => 'French Guiana', 
			'pf' => 'French Polynesia', 
			'tf' => 'French Southern Territories', 
			'ga' => 'Gabon', 
			'gm' => 'Gambia', 
			'ge' => 'Georgia', 
			'de' => 'Germany', 
			'gh' => 'Ghana', 
			'gi' => 'Gibraltar', 
			'gr' => 'Greece', 
			'gl' => 'Greenland', 
			'gd' => 'Grenada', 
			'gp' => 'Guadeloupe', 
			'gu' => 'Guam', 
			'gt' => 'Guatemala', 
			'gn' => 'Guinea', 
			'gw' => 'Guinea-Bissau', 
			'gy' => 'Guyana', 
			'ht' => 'Haiti', 
			'hm' => 'Heard and Mc Donald Islands', 
			'va' => 'Holy See (Vatican City State)', 
			'hn' => 'Honduras', 
			'hk' => 'Hong Kong', 
			'hu' => 'Hungary', 
			'is' => 'Iceland', 
			'in' => 'India', 
			'id' => 'Indonesia', 
			'ir' => 'Iran, Islamic Republic of', 
			'iq' => 'Iraq', 
			'ie' => 'Ireland', 
			'il' => 'Israel', 
			'it' => 'Italy', 
			'hm' => 'Jamaica', 
			'jp' => 'Japan', 
			'jo' => 'Jordan', 
			'kz' => 'Kazakhstan', 
			'ke' => 'Kenya', 
			'ki' => 'Kiribati', 
			'kp' => 'Korea, Democratic People\'s Republic of', 
			'kr' => 'Korea, Republic of', 
			'kw' => 'Kuwait', 
			'kg' => 'Kyrgyzstan', 
			'la' => 'Lao People\'s Democratic Republic', 
			'lv' => 'Latvia', 
			'lb' => 'Lebanon', 
			'ls' => 'Lesotho', 
			'lr' => 'Liberia', 
			'ly' => 'Libyan Arab Jamahiriya', 
			'li' => 'Liechtenstein', 
			'lt' => 'Lithuania', 
			'lu' => 'Luxembourg', 
			'mo' => 'Macau', 
			'mk' => 'Macedonia, The Former Yugoslav Republic of', 
			'mg' => 'Madagascar', 
			'mw' => 'Malawi', 
			'my' => 'Malaysia', 
			'mv' => 'Maldives', 
			'ml' => 'Mali', 
			'mt' => 'Malta', 
			'mh' => 'Marshall Islands', 
			'mq' => 'Martinique', 
			'mr' => 'Mauritania', 
			'mu' => 'Mauritius', 
			'yt' => 'Mayotte', 
			'mx' => 'Mexico', 
			'fm' => 'Micronesia, Federated States of', 
			'md' => 'Moldova, Republic of', 
			'mc' => 'Monaco', 
			'mn' => 'Mongolia', 
			'ms' => 'Montserrat', 
			'ma' => 'Morocco', 
			'mz' => 'Mozambique', 
			'mm' => 'Myanmar', 
			'na' => 'Namibia', 
			'nr' => 'Nauru', 
			'np' => 'Nepal', 
			'nl' => 'Netherlands', 
			'an' => 'Netherlands Antilles', 
			'nc' => 'New Caledonia', 
			'nz' => 'New Zealand', 
			'ni' => 'Nicaragua', 
			'ne' => 'Niger', 
			'ng' => 'Nigeria', 
			'nu' => 'Niue', 
			'nf' => 'Norfolk Island', 
			'mp' => 'Northern Mariana Islands', 
			'no' => 'Norway', 
			'om' => 'Oman', 
			'pk' => 'Pakistan', 
			'pw' => 'Palau', 
			'pa' => 'Panama', 
			'pg' => 'Papua New Guinea', 
			'py' => 'Paraguay', 
			'pe' => 'Peru', 
			'ph' => 'Philippines', 
			'pn' => 'Pitcairn', 
			'pl' => 'Poland', 
			'pt' => 'Portugal', 
			'pr' => 'Puerto Rico', 
			'qa' => 'Qatar', 
			're' => 'Reunion', 
			'ro' => 'Romania', 
			'ru' => 'Russian Federation', 
			'rw' => 'Rwanda', 
			'kn' => 'Saint Kitts and Nevis', 
			'lc' => 'Saint LUCIA', 
			'vc' => 'Saint Vincent and the Grenadines', 
			'ws' => 'Samoa', 
			'sm' => 'San Marino', 
			'st' => 'Sao Tome and Principe', 
			'sa' => 'Saudi Arabia', 
			'sn' => 'Senegal', 
			'sc' => 'Seychelles', 
			'sl' => 'Sierra Leone', 
			'sg' => 'Singapore', 
			'sk' => 'Slovakia (Slovak Republic)', 
			'si' => 'Slovenia', 
			'sb' => 'Solomon Islands', 
			'so' => 'Somalia', 
			'za' => 'South Africa', 
			'gs' => 'South Georgia and the South Sandwich Islands', 
			'es' => 'Spain', 
			'lk' => 'Sri Lanka', 
			'sh' => 'St. Helena', 
			'pm' => 'St. Pierre and Miquelon', 
			'sd' => 'Sudan', 
			'sr' => 'Suriname', 
			'sj' => 'Svalbard and Jan Mayen Islands', 
			'sz' => 'Swaziland', 
			'se' => 'Sweden', 
			'ch' => 'Switzerland', 
			'sy' => 'Syrian Arab Republic', 
			'tw' => 'Taiwan, Province of China', 
			'tj' => 'Tajikistan', 
			'tz' => 'Tanzania, United Republic of', 
			'th' => 'Thailand', 
			'tg' => 'Togo', 
			'tk' => 'Tokelau', 
			'to' => 'Tonga', 
			'tt' => 'Trinidad and Tobago', 
			'tn' => 'Tunisia', 
			'tr' => 'Turkey', 
			'tm' => 'Turkmenistan', 
			'tc' => 'Turks and Caicos Islands', 
			'tv' => 'Tuvalu', 
			'ug' => 'Uganda', 
			'ua' => 'Ukraine', 
			'ae' => 'United Arab Emirates', 
			'gb' => 'United Kingdom', 
			'us' => 'United States', 
			'um' => 'United States Minor Outlying Islands', 
			'uy' => 'Uruguay', 
			'uz' => 'Uzbekistan', 
			'vu' => 'Vanuatu', 
			've' => 'Venezuela', 
			'vn' => 'Viet Nam', 
			'vg' => 'Virgin Islands (British)', 
			'vi' => 'Virgin Islands (U.S.)', 
			'wf' => 'Wallis and Futuna Islands', 
			'eh' => 'Western Sahara', 
			'ye' => 'Yemen', 
			'yu' => 'Yugoslavia', 
			'zm' => 'Zambia', 
			'zw' => 'Zimbabwe'
		);
	}
}
?>
