<?php
App::uses('AppController', 'Controller');
class ReferralsController extends AppController {
	public function confirm($shortcode = null) {
		if(!empty($shortcode)) {
			$referral = $this->Referral->findByShortcode($shortcode);
			
			if(!empty($this->request->data)) {
				if($this->Referral->save($this->data)) {
					$this->Session->setFlash('Thank you for your recommendation!','success');
					$this->redirect('/');
				}
			} else {
				$this->data = $referral;
			}
			$this->set(compact('referral'));
			
		} else {
			$this->redirect('/');
		}
	}
}
?>