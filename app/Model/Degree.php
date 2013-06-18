<?php
App::uses('AppModel', 'Model');
class Degree extends AppModel {
	var $order = array('Degree.title');

	public $hasMany = array(
		'Application',
	);
}
?>