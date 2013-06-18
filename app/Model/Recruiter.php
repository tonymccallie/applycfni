<?php
App::uses('AppModel', 'Model');
class Recruiter extends AppModel {
	var $order = array('Recruiter.first_name','Recruiter.last_name');
	public $hasMany = array(
		'Application'
	);
	
}
?>