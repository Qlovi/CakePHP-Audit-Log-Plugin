<?php
App::uses('Audit', 'AuditLog.Model');

/**
 * Audit Test Case
 *
 */
class AuditTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.audit_log.audit',
		'plugin.audit_log.entity',
		'plugin.audit_log.source',
		'plugin.audit_log.audit_delta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Audit = ClassRegistry::init('AuditLog.Audit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Audit);

		parent::tearDown();
	}

}
