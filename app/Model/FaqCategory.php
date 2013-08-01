<?php
App::uses('AppModel', 'Model');
class FaqCategory extends AppModel {
	var $order = array('FaqCategory.title' => 'asc');

	public $hasMany = array(
		'Faq' => array(
			'className' => 'Faq',
			'foreignKey' => 'category_id',
			'order' => 'Faq.question',
			'dependent' => true //true = delete child records on delete
		),
	);
}
?>