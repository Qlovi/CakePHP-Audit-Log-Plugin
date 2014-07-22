<?php

App::uses('AuditLogAppModel', 'AuditLog.Model');

/**
 * Audit Model
 *
 * @property Entity $Entity
 * @property Source $Source
 * @property AuditDelta $AuditDelta
 */
class Audit extends AuditLogAppModel {

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'AuditDelta' => array(
            'className' => 'AuditLog.AuditDelta',
            'foreignKey' => 'audit_id',
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
