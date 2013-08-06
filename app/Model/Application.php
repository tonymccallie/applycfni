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
		/*
'international' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please indicate whether or not you are an International Student.'
			)
		),
*/
		'degree_id' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose a degree type.'
			)
		),
	);
	
	var $validatePersonal = array(
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
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
				'message' => 'Please enter your address.'
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
				'message' => 'Please use a valid Social Security Number in the format 555-55-5555'
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
	
	var $validateBackground = array(
		'marital_status' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Marital status is required.'
			)
		),
		'felony' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'misdemeanor' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'probation' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'conduct_code' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
	);
	
	var $validateEducation = array(
		'field' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Message is required'
			)
		)
	);
	
	var $validateSpiritual = array(
		'salvation_date' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter a date.'
			)
		),
		'testimony' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your testimony.'
			)
		),
		'holy_spirit' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'christian_service' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please describe your history of ministry involvement.'
			)
		),
		'church_attend' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'church_member' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please check yes or no.'
			)
		),
		'church_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your church name.'
			)
		),
		'church_affiliation' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your church affiliation.'
			)
		),
		'church_pastor' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your church pastor.'
			)
		),
	);
	
	var $validateReleases = array(
		'standards_release' => array(
			'ruleName' => array(
				'rule' => array('comparison', '!=', 0),
				'message' => 'Please choose I Agree to continue or contact the admissions office if you have questions.'
			)
		),
		'truthful_release' => array(
			'ruleName' => array(
				'rule' => array('comparison', '!=', 0),
				'message' => 'Please choose I Agree to continue or contact the admissions office if you have questions.'
			)
		),
		'background_check' => array(
			'ruleName' => array(
				'rule' => array('comparison', '!=', 0),
				'message' => 'Please choose I Agree to continue or contact the admissions office if you have questions.'
			)
		),
		'signature_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your full name.'
			)
		),
	);
}
?>