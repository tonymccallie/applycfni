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
		$this->set(compact('degrees','majors'));
	}
	
	function personal() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 2;
			}
			if($this->Application->save($this->request->data)) {
				$application = $this->Application->findById();
				$this->Session->write('application',$application);
				$this->redirect(array('action'=>'education'));
			}
		} else {
			$this->request->data = $this->application;
		}
	}
	
	function education() {
		if(!empty($this->request->data['Application'])) {
			if(!empty($this->application['Application']['step_completed'])) {
				$this->request->data['Application']['step_completed'] = 3;
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
				$this->request->data['Application']['step_completed'] = 4;
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
				$this->request->data['Application']['step_completed'] = 5;
			}
			if($this->Application->save($this->request->data)) {
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
				$this->request->data['Application']['step_completed'] = 6;
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
}
?>