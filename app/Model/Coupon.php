<?php
App::uses('AppModel', 'Model');
class Coupon extends AppModel {
	public $hasMany = array(
		'Application' => array(
			'dependent' => false //true = delete child records on delete
		),
	);

	var $validate = array(
		'title' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Title is required'
			)
		),
		'type' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Type is required'
			)
		),
		'qty' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Quantity is required'
			)
		),
		'value' => array(
			'ruleName' => array(
				'rule' => array('notEmpty'),
				'message' => 'Value is required'
			)
		)
	);
}
?>