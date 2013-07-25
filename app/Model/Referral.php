<?php
App::uses('AppModel', 'Model');
class Referral extends AppModel {
	var $order = array('Application.position' => 'asc');
	public $belongsTo = array(
		'Application'
	);
}
?>