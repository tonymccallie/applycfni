<?php
App::uses('AppModel', 'Model');
class Faq extends AppModel {
	var $order = array('Faq.question' => 'asc');

	public $belongsTo = array(
		'FaqCategory' => array(
			'className' => 'FaqCategory',
			'foreignKey' => 'category_id'
		),
	);
}
?>