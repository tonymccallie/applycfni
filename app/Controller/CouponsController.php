<?php
App::uses('AppController', 'Controller');
class CouponsController extends AppController {
	public function admin_index() {		
		$paginate = array(
			'conditions' => array(),
			'contain' => array(),
			'limit' => 50
		);
		
		if(!empty($this->request->data['Coupon']['search'])) {
			$paginate['conditions'] = array(
				'OR' => array(
					'Coupon.code LIKE' => '%'.$this->request->data['Coupon']['search'].'%',
					'Coupon.title LIKE' => '%'.$this->request->data['Coupon']['search'].'%',
					'Coupon.descr LIKE' => '%'.$this->request->data['Coupon']['search'].'%',
				)
			);
		}
		
		$this->paginate = $paginate;
		
		$this->set('coupons', $this->paginate());
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			if($this->Coupon->validates($this->request->data)) {
				if($this->request->data['Coupon']['multiple']) {
					for($i = 1; $i <= $this->request->data['Coupon']['qty']; $i++) {
						$this->Coupon->create();
						$data = $this->request->data;
						$data['Coupon']['qty'] = 1;
						$data['Coupon']['code'] = Common::generateRandom(6);
						$data['Coupon']['title'] = $data['Coupon']['title'].'-'.$i;
						$this->Coupon->save($data);
					}
					$this->Session->setFlash('The coupons have been created','success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->request->data['Coupon']['code'] = Common::generateRandom(6);
					$this->Coupon->create();
					if ($this->Coupon->save($this->request->data)) {
						$this->Session->setFlash('The coupon has been created','success');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('The coupon could not be saved. Please, try again.','error');
					}
				}
			}
		}
	}


	public function admin_edit($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash('The coupon has been saved','success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The coupon could not be saved. Please, try again.','error');
			}
		} else {
			$options = array('conditions' => array('Coupon.' . $this->Coupon->primaryKey => $id));
			$this->request->data = $this->Coupon->find('first', $options);
		}
	}


	public function admin_delete($id = null) {
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->Coupon->delete()) {
			$this->Session->setFlash('Coupon deleted','success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Coupon was not deleted','error');
		$this->redirect(array('action' => 'index'));
	}
}
