<?php
App::uses('AppModel', 'Model');
class Referral extends AppModel {
	var $order = array('Referral.position' => 'asc');
	public $belongsTo = array(
		'Application'
	);
}
?>