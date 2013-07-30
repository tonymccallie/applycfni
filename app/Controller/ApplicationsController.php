<?php
App::uses('AppController', 'Controller');
class ApplicationsController extends AppController {
	public $application = array();
	function index() {
		
	}
	
	function beforeFilter() {
		$application = $this->Session->read('application');
		if(empty($application)) {
			$application_id = $this->Application->lookup(array(
				'user_id' => Authsome::get('id')
			));
			$application = $this->Application->findById($application_id);
			$this->Session->write('application',$application);
		}
		$this->application = $application;
		$this->set(compact('application'));
	}
	
	function start() {
		if(!empty($this->request->data['Application'])) {
			if(empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 1;
			}
			
			$this->Application->validate = $this->Application->validateStart;
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'personal'));
			}
		} else {
			$this->request->data = $this->application;
		}
		$degrees = $this->Application->Degree->find('list');
		$majors = $this->Application->Major->find('list');
		$semesters = $this->Application->Semester->find('list');
		$this->set(compact('degrees','majors','semesters'));
	}
	
	function personal() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 2;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'background'));
			}
		} else {
			$this->request->data = $this->application;
		}
		$recruiters = $this->Application->Recruiter->find('list');
		$this->set(compact('recruiters'));
	}
	
	function background() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 3;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'education'));
			}
		} else {
			$this->request->data = $this->application;
		}
		$recruiters = $this->Application->Recruiter->find('list');
		$this->set(compact('recruiters'));
	}
	
	function education() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 4;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'spiritual'));
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function spiritual() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 5;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'recommendations'));
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function recommendations() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 6;
			}
			
			//send emails
			$url = Common::currentUrl().'referrals/confirm/';
			
			$emailCount = 0;
			
			foreach($this->request->data['Referral'] as $k => $referral) {
				$sendEmail = false;
				$newCode = false;
				if(empty($this->application['Referral'][$k]['email'])) {
					$sendEmail = true;
					$newCode = true;
				} else {
					if($this->application['Referral'][$k]['email'] != $referral['email']) {
						$sendEmail = true;
						$newCode = true;
					}
					
					if(empty($referral['sent'])) {
						$sendEmail = true;
						$newCode = true;
					}
					
					if(!empty($referral['resend'])) {
						$sendEmail = true;
					}
					
					if(empty($this->application['Referral'][$k]['shortcode'])) {
						$newCode = true;
					}
				}
				
				if($newCode) {
					$this->request->data['Referral'][$k]['shortcode'] = Common::generateRandom(10);
				} else {
					$this->request->data['Referral'][$k]['shortcode'] = $this->application['Referral'][$k]['shortcode'];
				}
				
				if($sendEmail) {
					Common::email(array(
						'to' => $referral['email'],
						'subject' => 'CFNI Application Referral Request',
						'template' => 'referral',
						'variables' => array(
							'referral_name' => $referral['first_name'].' '.$referral['last_name'],
							'applicant_name' => $this->application['Application']['first_name'].' '.$this->application['Application']['last_name'],
							'url' => $url.$this->request->data['Referral'][$k]['shortcode']
						)
					),'');
					$this->request->data['Referral'][$k]['sent'] = date('Y-m-d H:i:s');
					$emailCount++;
				}
			}
			
			if($this->Application->saveAll($this->request->data)) {
				if($emailCount) {
					if($emailCount > 1) {
						$emailPlural = 'emails';
					} else {
						$emailPlural = 'email';
					}
					$this->Session->setFlash($emailCount.' '.$emailPlural.' sent.','success');
				}
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'releases'));
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function releases() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 7;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->Session->setFlash('Thanks!');
				$this->redirect(array('controller'=>'users','action'=>'dashboard'));
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function status() {
		
	}
}
?>