<?php
App::uses('AppController', 'Controller');
/**
 * Alarms Controller
 *
 * @property Alarm $Alarm
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AlarmsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Time');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $uses = array('Alarm', 'Event', 'Sound');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Alarm->recursive = 0;
		$this->set('alarms', $this->Paginator->paginate());
		$events = $this->Alarm->Event->find('list',array('fields' => array('id','descripcion')));
		$this->set(compact('events'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alarm->exists($id)) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		$options = array('conditions' => array('Alarm.' . $this->Alarm->primaryKey => $id));
		$this->set('alarm', $this->Alarm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alarm->create();
			if ($this->Alarm->save($this->request->data)) {
				$this->Flash->success(__('The alarm has been saved.'));
				return $this->redirect(array('action' => 'cambiar_sonido'));
			} else {
				$this->Flash->error(__('The alarm could not be saved. Please, try again.'));
			}
		}
		$events = $this->Alarm->Event->find('list');
		$this->set(compact('events'));
		$sounds = $this->Alarm->Sound->find('list',array('fields' => array('id','nombre_sonido')));
		$this->set(compact('sounds'));
		//$states = $this->Alarm->State->find('list',array('fields' => array('id','estado')));
		//$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alarm->exists($id)) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alarm->save($this->request->data)) {
				$this->Flash->success(__('The alarm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The alarm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alarm.' . $this->Alarm->primaryKey => $id));
			$this->request->data = $this->Alarm->find('first', $options);
		}
		$events = $this->Alarm->Event->find('list');
		$this->set(compact('events'));
		//$sounds = $this->Alarm->Sound->find('list');
		//$this->set(compact('sounds'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alarm->id = $id;
		if (!$this->Alarm->exists()) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alarm->delete()) {
			
			$this->Flash->success(__('The alarm has been deleted.'));
		} else {
			$this->Flash->error(__('The alarm could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function cambiar_sonido() {
		$this->Alarm->recursive = 0;
		$this->set('alarms', $this->Paginator->paginate());
		//$states = $this->Alarm->State->find('list',array('fields' => array('id','estado')));
		//$this->set('states', $this->Paginator->paginate());
	}
	
	
	public function cambio($id = null) {
		if (!$this->Alarm->exists($id)) {
			throw new NotFoundException(__('Invalid alarm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alarm->save($this->request->data)) {
				$this->Flash->success(__('The alarm has been saved.'));
				return $this->redirect(array('action' => 'cambiar_sonido'));
			} else {
				$this->Flash->error(__('The alarm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alarm.' . $this->Alarm->primaryKey => $id));
			$this->request->data = $this->Alarm->find('first', $options);
		}
		$events = $this->Alarm->Event->find('list');
		$this->set(compact('events'));
		//$states = $this->Alarm->State->find('list',array('fields' => array('id','estado')));
		//$this->set(compact('states'));
		$sounds = $this->Alarm->Sound->find('list',array('fields' => array('id','nombre_sonido')));
		$this->set(compact('sounds'));

	}
}
