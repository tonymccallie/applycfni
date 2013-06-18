<?php
App::uses('AppController', 'Controller');
class SemestersController extends AppController {
	public function admin_index() {
		$this->Semester->recursive = 0;
		$this->set('semesters', $this->paginate());
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Semester->create();
			if ($this->Semester->save($this->request->data)) {
				$this->Session->setFlash('The semester has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The semester could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Semester->exists($id)) {
			throw new NotFoundException(__('Invalid semester'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Semester->save($this->request->data)) {
				$this->Session->setFlash('The semester has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The semester could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Semester.' . $this->Semester->primaryKey => $id));
			$this->request->data = $this->Semester->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Semester->id = $id;
		if (!$this->Semester->exists()) {
			throw new NotFoundException(__('Invalid semester'));
		}
		if ($this->Semester->delete()) {
			$this->Session->setFlash('Semester deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Semester was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
