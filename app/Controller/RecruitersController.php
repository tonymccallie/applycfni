<?php
App::uses('AppController', 'Controller');
class RecruitersController extends AppController {
	public function admin_index() {
		$this->Recruiter->recursive = 0;
		$this->set('recruiters', $this->paginate());
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Recruiter->create();
			if ($this->Recruiter->save($this->request->data)) {
				$this->Session->setFlash('The recruiter has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The recruiter could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Recruiter->exists($id)) {
			throw new NotFoundException(__('Invalid recruiter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recruiter->save($this->request->data)) {
				$this->Session->setFlash('The recruiter has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The recruiter could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Recruiter.' . $this->Recruiter->primaryKey => $id));
			$this->request->data = $this->Recruiter->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Recruiter->id = $id;
		if (!$this->Recruiter->exists()) {
			throw new NotFoundException(__('Invalid recruiter'));
		}
		if ($this->Recruiter->delete()) {
			$this->Session->setFlash('Recruiter deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Recruiter was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
