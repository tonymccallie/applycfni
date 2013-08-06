<?php
App::uses('AppController', 'Controller');
class ReferralsController extends AppController {
	public function confirm($shortcode = null) {
		if(!empty($shortcode)) {
			$referral = $this->Referral->findByShortcode($shortcode);
			
			if(!empty($referral['Referral']['completed'])) {
				$this->Session->setFlash('This recommendation has already been completed. Thank you!','success');
				$this->redirect('/');
			}
			
			if(!empty($this->request->data)) {
				
				$validation = $this->Referral->validateForm;
				
				//if pastoral
				if($this->request->data['Referral']['position'] == 0) {
					$validation = am($validation,$this->Referral->validatePastor);
				}
				
				$this->Referral->validate = $validation;
				
				//conditionals
				$activities = false;
				if(!empty($this->request->data['Referral']['smoke'])) {
					$activities = true;
				}
				if(!empty($this->request->data['Referral']['drink'])) {
					$activities = true;
				}
				if(!empty($this->request->data['Referral']['drugs'])) {
					$activities = true;
				}
				if($activities) {
					$this->Referral->validate['lifestyle_comments'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => 'Please comment on these activities.'
						)
					);
				}
				
				switch($this->request->data['Referral']['recommend']) {
					case 'I recommend with reservation':
					case 'I cannot recommend':
						$this->Referral->validate['recommend_explain'] = array(
							'ruleName' => array(
								'rule' => array('notEmpty'),
								'message' => 'Please explain your selection.'
							)
						);
						break;
				}
				
				
				$this->request->data['Referral']['completed'] = date('Y-m-d H:i:s');
				
				if($this->Referral->save($this->data)) {
				
					Common::email(array(
						'to' => 'admissions@cfni.org',
						'subject' => 'CFNI Referral Completion',
						'template' => 'referral_complete',
						'variables' => array(
							'referral_name' => $this->request->data['Referral']['first_name'].' '.$this->request->data['Referral']['last_name'],
							'referral_id' => $this->request->data['Referral']['id']
						)
					),'');
				
					$this->Session->setFlash('Thank you for your recommendation!','success');
					$this->redirect('/');
				} else {
					$this->Session->setFlash('There were some errors, please see below.','error');
				}
			} else {
				$this->data = $referral;
			}
			$this->set(compact('referral'));
			
		} else {
			$this->redirect('/');
		}
	}
	
	public function admin_index() {
		$this->Referral->recursive = 0;
		$paginate = array(
			'conditions' => array(
				'Referral.last_name NOT' => ''
			)
		);
		
		$this->paginate = $paginate;
		$this->set('referrals', $this->paginate());
	}

	public function admin_edit($id = null) {
		if (!$this->Referral->exists($id)) {
			throw new NotFoundException(__('Invalid referral'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Referral->save($this->request->data)) {
				$this->Session->setFlash('The referral has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The referral could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Referral.' . $this->Referral->primaryKey => $id));
			$this->request->data = $this->Referral->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Referral->id = $id;
		if (!$this->Referral->exists()) {
			throw new NotFoundException(__('Invalid Referral'));
		}
		if ($this->Referral->delete()) {
			$this->Session->setFlash('Referral deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Referral was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
?>