<?php
App::uses('AppController', 'Controller');
class DegreesController extends AppController {
	public function admin_index() {
		$this->Degree->recursive = 0;
		$this->set('degrees', $this->paginate());
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Degree->create();
			if ($this->Degree->save($this->request->data)) {
				$this->Session->setFlash('The degree has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The degree could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Degree->exists($id)) {
			throw new NotFoundException(__('Invalid degree'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Degree->save($this->request->data)) {
				$this->Session->setFlash('The degree has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The degree could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Degree.' . $this->Degree->primaryKey => $id));
			$this->request->data = $this->Degree->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Degree->id = $id;
		if (!$this->Degree->exists()) {
			throw new NotFoundException(__('Invalid degree'));
		}
		if ($this->Degree->delete()) {
			$this->Session->setFlash('Degree deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Degree was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
