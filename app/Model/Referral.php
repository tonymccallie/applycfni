<?php
App::uses('AppModel', 'Model');
class Referral extends AppModel {
	public $belongsTo = array(
		'Application'
	);
}
?>