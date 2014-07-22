<?php

App::uses('AuditLogAppModel', 'AuditLog.Model');

/**
 * AuditDelta Model
 *
 * @property Audit $Audit
 */
class AuditDelta extends AuditLogAppModel {

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Audit' => array(
            'className' => 'AuditLog.Audit',
            'foreignKey' => 'audit_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
