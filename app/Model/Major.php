<?php
App::uses('AppModel', 'Model');
class Major extends AppModel {
	var $order = array('Major.title'=>'asc');
	public $hasMany = array(
		'Application'
	);	
}
?>