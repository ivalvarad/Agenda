<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	var $uses = array('Event','Category', 'Priority', 'User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('priority', $this->Event->Priority->find('first'));
		$this->set('category', $this->Event->Category->find('first'));
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
		$this->set('users', $this->User->find('all'));
	}

	public function filtro_categoria_trabajo() {
		$this->set('users', $this->User->find('all'));
		$categoriesTrabajo = $this->Event->find('all', array(
			'conditions' => array('Event.category_id' => 1), 
			));
		$this->set('categoriesTrabajo', $categoriesTrabajo);
		
		
	}
	public function filtro_categoria_estudio() {
		$this->set('users', $this->User->find('all'));
		$categoriesEstudio = $this->Event->find('all', array(
			'conditions' => array('Event.category_id' => 2), 
			));
		$this->set('categoriesEstudio', $categoriesEstudio);
		
	}
	public function filtro_categoria_social() {
		$this->set('users', $this->User->find('all'));	
		$categoriesSocial = $this->Event->find('all', array(
			'conditions' => array('Event.category_id' => 3), 
			));
		$this->set('categoriesSocial', $categoriesSocial);
	}
	public function alarm() {
		$this->set('priority', $this->Event->Priority->find('first'));
		$this->set('category', $this->Event->Category->find('first'));
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
	}

	public function filtro_prioridad_alta() {
		$this->set('users', $this->User->find('all'));	
		$prioritiesAlta = $this->Event->find('all', array(
		'conditions' => array('Event.priority_id' => 1), 
		));
	  $this->set('prioritiesAlta', $prioritiesAlta);  
	}
 	public function filtro_prioridad_media() {
		$this->set('users', $this->User->find('all'));	
		$prioritiesMedia = $this->Event->find('all', array(
		'conditions' => array('Event.priority_id' => 2), 
		));
		$this->set('prioritiesMedia', $prioritiesMedia);  
	}
 	public function filtro_prioridad_baja() {
		$this->set('users', $this->User->find('all'));	
		$prioritiesBaja = $this->Event->find('all', array(
		'conditions' => array('Event.priority_id' => 3), 
		));
		$this->set('prioritiesBaja', $prioritiesBaja);  
 }


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('usuario', $this->User->findByUsername($_SESSION['usernm']));
		$this->set('priorities', $this->Priority->find('list'));
		$this->set('categories', $this->Category->find('list'));
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('usuario', $this->User->findByUsername($_SESSION['usernm']));
		$this->set('priorities', $this->Priority->find('list'));
		$this->set('categories', $this->Category->find('list'));
		if ($this->request->is('post')) {
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->Flash->success(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event could not be saved. Please, try again.'));
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
		$this->set('usuario', $this->User->findByUsername($_SESSION['usernm']));
		$this->set('priorities', $this->Priority->find('list'));
		$this->set('categories', $this->Category->find('list'));
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Event->save($this->request->data)) {
				$this->Flash->success(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Flash->success(__('The event has been deleted.'));
		} else {
			$this->Flash->error(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
