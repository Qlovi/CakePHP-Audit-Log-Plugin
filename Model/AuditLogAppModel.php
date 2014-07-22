<?php

class AuditLogAppModel extends AppModel{
    /**
     * The name of the DataSource connection that this Model uses
     *
     * The value must be an attribute name that you defined in `app/Config/database.php`
     * or created using `ConnectionManager::create()`.
     *
     */
    public $useDbConfig = 'mongo';
    
}