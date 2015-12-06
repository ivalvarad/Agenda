<?php
App::uses('AppModel', 'Model');
/**
 * State Model
 *
 */
class State extends AppModel {
	public $virtualFields = array('estado' => "State.state");
	public $hasMany = array(
		'Alarm' => array(
			'className' => 'Alarm',
			'foreignKey' => 'state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
