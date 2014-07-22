<?php
App::uses('AuditDelta', 'AuditLog.Model');

/**
 * AuditDelta Test Case
 *
 */
class AuditDeltaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.audit_log.audit_delta',
		'plugin.audit_log.audit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AuditDelta = ClassRegistry::init('AuditLog.AuditDelta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AuditDelta);

		parent::tearDown();
	}

}
