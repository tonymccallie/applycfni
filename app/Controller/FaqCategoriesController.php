<?php
App::uses('AppController', 'Controller');
class FaqCategoriesController extends AppController {	
	public function admin_index() {
		$this->FaqCategory->recursive = 0;
		$this->set('categories', $this->paginate());
	}
	
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FaqCategory->create();
			if ($this->FaqCategory->save($this->request->data)) {
				$this->Session->setFlash('The category has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The category could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->FaqCategory->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FaqCategory->save($this->request->data)) {
				$this->Session->setFlash('The category has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The category could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('FaqCategory.' . $this->FaqCategory->primaryKey => $id));
			$this->request->data = $this->FaqCategory->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->FaqCategory->id = $id;
		if (!$this->FaqCategory->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->FaqCategory->delete()) {
			$this->Session->setFlash('FaqCategory deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('FaqCategory was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
?>