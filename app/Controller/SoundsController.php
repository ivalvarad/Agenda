<?php
App::uses('AppController', 'Controller');
/**
 * Sounds Controller
 *
 * @property Sound $Sound
 * @property PaginatorComponent $Paginator
 */
class SoundsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session','Paginator','Flash');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sound->recursive = 0;
		$this->set('sounds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sound->exists($id)) {
			throw new NotFoundException(__('Invalid sound'));
		}
		$options = array('conditions' => array('Sound.' . $this->Sound->primaryKey => $id));
		$this->set('sound', $this->Sound->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sound->create();
			if ($this->Sound->save($this->request->data)) {
				$this->Flash->success(__('The sound has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sound could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sound->exists($id)) {
			throw new NotFoundException(__('Invalid sound'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sound->save($this->request->data)) {
				$this->Flash->success(__('The sound has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sound could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sound.' . $this->Sound->primaryKey => $id));
			$this->request->data = $this->Sound->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sound->id = $id;
		if (!$this->Sound->exists()) {
			throw new NotFoundException(__('Invalid sound'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sound->delete()) {
			$this->Flash->success(__('The sound has been deleted.'));
		} else {
			$this->Flash->error(__('The sound could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
