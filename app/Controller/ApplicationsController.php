<?php
App::uses('AppController', 'Controller');
class ApplicationsController extends AppController {
	public $application = array();
	
	var $app_status = array(
		'' => 'In Progress',
		'Received' => 'Received',
		'Processed' => 'Processed',
		'Approved' => 'Approved',
		'Denied' => 'Denied'
	);
	
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
		if(($this->action != 'status') && (!empty($application['Application']['stripe_id']))) {
			$this->Session->setFlash('Your application has already been submitted. No further changes can be made.','success');
			$this->redirect(array('action'=>'status'));
		}
	}
	
	function start() {
		if(!empty($this->request->data['Application'])) {
			if(empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 1;
			}
			
			$this->Application->validate = $this->Application->validateStart;
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'personal'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
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
			
			if((!empty($this->request->data['Application']['ssn']))&&(strlen($this->request->data['Application']['ssn']) == 9)) {
				$ssn = $this->request->data['Application']['ssn'];
				$this->request->data['Application']['ssn'] = substr($ssn,0,3).'-'.substr($ssn,3,2).'-'.substr($ssn,5);
			}
			
			$this->Application->validate = $this->Application->validatePersonal;
			
			if($this->request->data['Application']['country'] == 'US') {
				$this->Application->validate['zip'] = array(
					'ruleName' => array(
						'rule' => array('postal',null,'zip'),
						'message' => 'Please use a valid zip code.'
					)
				);
				$this->Application->validate['state'] = array(
					'ruleName' => array(
						'rule' => array('notEmpty'),
						'message' => 'Please select a state.'
					)
				);
			}
			
			if(!empty($this->request->data['Application']['phone_secondary'])) {
				$this->Application->validate['phone_secondary'] = array(
					'ruleName' => array(
						'rule' => array('phone',null,'us'),
						'message' => 'Please use a valid phone number.'
					)
				);
			}
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'background'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function background() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 3;
			}
			
			$this->Application->validate = $this->Application->validateBackground;
			
			switch($this->request->data['Application']['marital_status']) {
				case 'Married':
					$this->Application->validate['spouse_first'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please enter your spouse's first name."
						)
					);
					$this->Application->validate['spouse_last'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please enter your spouse's last name."
						)
					);
					$this->Application->validate['spouse_saved'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please check yes or no."
						)
					);
					$this->Application->validate['spouse_coming'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please check yes or no."
						)
					);
					$this->Application->validate['spouse_applying'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please check yes or no."
						)
					);
					break;
				case 'Divorced':
				case 'Separated':
					$this->Application->validate['divorce_date'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please enter the date of your divorce/separation."
						)
					);
					break;
			}
			
			for($i=1;$i<=6;$i++) {
				if(!empty($this->request->data['Application']['child'.$i.'_name'])) {
					$this->Application->validate['child'.$i.'_age'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please enter this child's age."
						)
					);
					$this->Application->validate['child'.$i.'_gender'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please enter this child's gender."
						)
					);
					$this->Application->validate['child'.$i.'_coming'] = array(
						'ruleName' => array(
							'rule' => array('notEmpty'),
							'message' => "Please check yes or no."
						)
					);
				}
			}			

			$criminal = false;
			
			if(!empty($this->request->data['Application']['felony'])) {
				$this->Application->validate['felony_date'] = array(
					'ruleName' => array(
						'rule' => array('notEmpty'),
						'message' => 'Please enter the date of the felony offense.'
					)
				);
				$criminal = true;
			}
			
			if(!empty($this->request->data['Application']['misdemeanor'])) {
				$this->Application->validate['misdemeanor_date'] = array(
					'ruleName' => array(
						'rule' => array('notEmpty'),
						'message' => 'Please enter the date of the misdemeanor offense.'
					)
				);
				$criminal = true;
			}
			
			if(!empty($this->request->data['Application']['probation'])) {
				$criminal = true;
			}
			
			if($criminal) {
				$this->Application->validate['criminal_explain'] = array(
					'ruleName' => array(
						'rule' => array('notEmpty'),
						'message' => 'Please elaborate on the details if you answered yes to the previous questions.'
					)
				);
			}

			if($this->request->data['Application']['conduct_code'] === 0) {
				$this->Application->validate['conduct_reason'] = array(
					'ruleName' => array(
						'rule' => array('notEmpty'),
						'message' => 'Please elaborate on why you answered no to the Code of Conduct agreement.'
					)
				);
			}
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'education'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function education() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 4;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'spiritual'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
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
			
			$this->Application->validate = $this->Application->validateSpiritual;
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'recommendations'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
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
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'releases'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
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
			
			$this->Application->validate = $this->Application->validateReleases;
			
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById($this->request->data['Application']['id']);
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'payment'));
			} else {
				$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function payment() {
		if(!empty($this->request->data['Application'])) {
			App::import('Vendor','stripe/Stripe');
			Stripe::setApiKey("sk_test_4QXdfngcC47Y1xA1uxw3hw4r");
			try {
				$charge = Stripe_Charge::create(array(
					"amount" => 5000, // amount in cents, again
					"currency" => "usd",
					"card" => $this->request->data['stripeToken'],
					"description" => $this->application['Application']['first_name'].' '.$this->application['Application']['last_name'].' - '.$this->application['User']['email'])
				);
				$data = array(
					'Application' => array(
						'id' => $this->application['Application']['id'],
						'stripe_id' => $charge->id,
						'status' => 'Received'
					)
				);
				if($this->Application->save($data)) {
					$application = $this->Application->findById($this->request->data['Application']['id']);
					$this->Session->write('application',$application);
					
					Common::email(array(
						'to' => $this->application['User']['email'],
						'subject' => 'CFNI Application Referral Request',
						'template' => 'received',
						'variables' => array(
							'applicant_name' => $this->application['Application']['first_name'].' '.$this->application['Application']['last_name'],
						)
					),'');
					
					$this->Session->setFlash('Thank you for filling out your application. Someone will contact you.','success');
					$this->redirect(array('action'=>'status'));
				} else {
					$this->Session->setFlash('There were problems with this page of the form. See the indicated fields below.','error');
				}
			} catch(Stripe_CardError $e) {
				$this->Session->setFlash('There were problems charging the card.','error');
				debug($e);
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function status() {
		
	}
	
	public function admin_index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
		$this->set('app_status',$this->app_status);
	}

	public function admin_edit($id = null) {
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash('The application has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The application could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
			$this->request->data = $this->Application->find('first', $options);
		}
		$this->set('app_status',$this->app_status);
		$degrees = $this->Application->Degree->find('list');
		$majors = $this->Application->Major->find('list');
		$semesters = $this->Application->Semester->find('list');
		$this->set(compact('degrees','majors','semesters'));
	}


	public function admin_delete($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid Application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash('Application deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Application was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
?>