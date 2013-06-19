<?php
App::uses('AppModel', 'Model');
class Recruiter extends AppModel {
	var $order = array('Recruiter.first_name','Recruiter.last_name');
	
	public $displayField = 'name';
	
	public $virtualFields = array(
		'name' => 'CONCAT(Recruiter.first_name," ",Recruiter.last_name)'
	);
	
	public $hasMany = array(
		'Application'
	);
	
}
?>