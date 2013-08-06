<?php
App::uses('AppModel', 'Model');
class Referral extends AppModel {
	var $order = array('Referral.position' => 'asc');
	public $belongsTo = array(
		'Application'
	);
	
	var $validate = array(
		'first_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'First name is required'
			)
		),
		'last_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'First name is required'
			)
		),
		'ruleTitle' => array(
			'rule' => array('email'),
			'message' => 'Please use a valid email address.'
		),
	);
	
	var $validateForm = array(
		'phone' => array(
			'ruleName' => array(
				'rule' => array('phone',null,'us'),
				'message' => 'Please use a valid phone number'
			)
		),
		'how_long' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please indicate how long you\'ve known the applicant'
			)
		),
		'relationship' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose your relationship to the applicant'
			)
		),
		'how_well' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose how well you know the applicant'
			)
		),
		'saved' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose.'
			)
		),
		'christian_service' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please give any examples you can think of.'
			)
		),
		'christian_service' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please give any examples you can think of.'
			)
		),
		'smoke' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose yes or no.'
			)
		),
		'drink' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose yes or no.'
			)
		),
		'drugs' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose yes or no.'
			)
		),
		'peers' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose.'
			)
		),
		'strengths' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please describe the applicant\'s strengths.'
			)
		),
		'weaknesses' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please describe the applicant\'s weaknesses.'
			)
		),
		'concerns' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please describe any concerns you have about the applicant.'
			)
		),
		'recommend' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please choose an answer.'
			)
		),
		'honest' => array(
			'ruleName' => array(
				'rule' => array('comparison', '!=', 0),
				'message' => 'Please choose I Agree to continue or contact the admissions office if you have questions.'
			)
		),
	);
	
	var $validatePastor = array(
		'church_name' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Church name is required'
			)
		),
		'title' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Your title is required'
			)
		),
		'denomination' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Denomination is required'
			)
		),
		'address1' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'The church address is required'
			)
		),
		'denomination' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Denomination is required'
			)
		),
		'city' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter the church\'s city'
			)
		),
		'state' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter the church\'s state'
			)
		),
		'zip' => array(
			'ruleName' => array(
				'rule' => array('postal',null,'us'),
				'message' => 'Please enter a vild zip code'
			)
		),
		'country' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter the church\'s country'
			)
		),
		'involvement' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please make a selection'
			)
		),
	);
}
?>