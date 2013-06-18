<?php
App::uses('AppController', 'Controller');
class MajorsController extends AppController {
	public function admin_index() {
		$this->Major->recursive = 0;
		$this->set('majors', $this->paginate());
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Major->create();
			if ($this->Major->save($this->request->data)) {
				$this->Session->setFlash('The major has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The major could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Major->exists($id)) {
			throw new NotFoundException(__('Invalid major'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Major->save($this->request->data)) {
				$this->Session->setFlash('The major has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The major could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Major.' . $this->Major->primaryKey => $id));
			$this->request->data = $this->Major->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Major->id = $id;
		if (!$this->Major->exists()) {
			throw new NotFoundException(__('Invalid major'));
		}
		if ($this->Major->delete()) {
			$this->Session->setFlash('Major deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Major was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
