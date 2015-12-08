<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 */
class Event extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $virtualFields = array('descripcion' => "Event.description");
	public $displayField = 'description';
	
	public $hasOne = 'Alarm';
	
    public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id'
		),
		'Priority' => array(
			'className' => 'Priority',
			'foreignKey' => 'priority_id'
		)
	);
}
