<?php
App::uses('AppModel', 'Model');
/**
 * Sound Model
 *
 * @property Alarm $Alarm
 */
class Sound extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $virtualFields = array('nombre_sonido' => "Sound.sound");
	public $hasMany = array(
		'Alarm' => array(
			'className' => 'Alarm',
			'foreignKey' => 'sound_id',
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
