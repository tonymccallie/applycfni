<?php
App::uses('AppModel', 'Model');
class Semester extends AppModel {
	var $order = array('Semester.start' => 'desc');
	public $hasMany = array(
		'Application'
	);
	
}
?>