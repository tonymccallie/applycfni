<?php
App::uses('AppModel', 'Model');
class Application extends AppModel {
	public $belongsTo = array(
		'User','Major','Degree'
	);
}
?>