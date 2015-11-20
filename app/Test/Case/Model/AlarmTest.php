<?php
App::uses('Alarm', 'Model');

/**
 * Alarm Test Case
 */
class AlarmTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alarm',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alarm = ClassRegistry::init('Alarm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alarm);

		parent::tearDown();
	}

}
