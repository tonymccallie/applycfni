<?php
App::uses('AppModel', 'Model');
class Application extends AppModel {
	public $belongsTo = array(
		'User','Major',
		'Degree','Semester'
	);
	
	public $hasMany = array(
		'Referral'
	);
	
	var $validateStart = array(
		'semester_id' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose an expected entrance term.'
			)
		),
		'international' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please indicate whether or not you are an International Student.'
			)
		),
		'degree_id' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose a degree type.'
			)
		),
	);
	
//	personal, background, education, spritual, recommendations, releases
	
	var $validatePersonal = array(
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
		'mid_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your middle name'
			)
		),
		'last_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
		'address1' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please your address.'
			)
		),
		'city' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your city'
			)
		),
		'country' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your country'
			)
		),
		'phone_primary' => array(
			'ruleName' => array(
				'rule' => array('phone',null,'us'),
				'message' => 'Please use a valid phone number'
			)
		),
		'ssn' => array(
			'ruleName' => array(
				'rule' => array('ssn',null,'us'),
				'message' => 'Please use a valid Social Security Number'
			)
		),
		'birth_date' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your date of birth'
			)
		),
		'birth_city' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter city of birth'
			)
		),
		'birth_country' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your country of birth'
			)
		),
		'gender' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your gender.'
			)
		),
		'citizen_status' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'citizen_country' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose a country of citizenship.'
			)
		),
		'finances' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'veteran' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'veteran_benefits' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'recruit_campus' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'recruit_yfn' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
	);
}
?>