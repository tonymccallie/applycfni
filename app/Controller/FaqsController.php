<?php
App::uses('AppController', 'Controller');
class FaqsController extends AppController {
	public function index() {
		$faqs = $this->Faq->find('all');
		$this->set(compact('faqs'));
	}
	
	public function admin_index() {
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->paginate());
	}
	
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Faq->create();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('The faq has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The faq could not be saved. Please, try again.','error');
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Faq->exists($id)) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('The faq has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The faq could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
			$this->request->data = $this->Faq->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->Faq->delete()) {
			$this->Session->setFlash('Faq deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Faq was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
?>