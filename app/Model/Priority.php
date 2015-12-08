<?php
App::uses('AppModel', 'Model');
/**
 * Priority Model
 *
 */
class Priority extends AppModel {

/**
 * Display field
 *
 * @var string
 */
public $displayField = 'name';

public $hasOne = 'Event';

public $validate = array(
    'description' => array(
        'rule' => array('minLength', 1)
        ), 'name' => array(
        'rule' => array('minLength', 1)
        )
        );
}
