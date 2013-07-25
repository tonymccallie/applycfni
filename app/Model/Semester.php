<?php
App::uses('AppModel', 'Model');
class Semester extends AppModel {
	var $order = array('Semester.start' => 'asc');
	public $hasMany = array(
		'Application'
	);
	
}
?>