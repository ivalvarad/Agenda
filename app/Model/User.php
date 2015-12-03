<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	public $hasOne = 'Event';
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	
	 public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        ),
		'password_confirm' => array(
			'required' => array(
                'rule' => 'notBlank',
                'message' => 'Must retype the password'
            ),
			'compare'    => array(
				'rule'      => array('verify_password'),
				'message' => 'The passwords you entered do not match.',
			)
		)
    );
	
	public function verify_password() {
		return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_confirm'];
	}
}
