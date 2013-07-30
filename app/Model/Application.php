<?php
App::uses('AppModel', 'Model');
class Application extends AppModel {
	public $belongsTo = array(
		'User','Major','Degree',
		'Recruiter','Semester'
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
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your first name'
			)
		),
	);
}
?>