<?php
App::uses('AppController', 'Controller');
class ReferralsController extends AppController {
	public function confirm($shortcode = null) {
		if(!empty($shortcode)) {
			
		} else {
			$this->redirect('/');
		}
	}
}
?>