<?php
$xpdo_meta_map['Person']= array (
  'package' => 'sample',
  'version' => '1.1',
  'table' => 'person',
  'fields' => 
  array (
    'first_name' => '',
    'last_name' => '',
    'middle_name' => '',
    'date_modified' => 'CURRENT_TIMESTAMP',
    'dob' => NULL,
    'gender' => '',
    'blood_type' => NULL,
    'username' => NULL,
    'password' => '',
    'security_level' => 1,
  ),
  'fieldMeta' => 
  array (
    'first_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'last_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'middle_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'date_modified' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
    ),
    'dob' => 
    array (
      'dbtype' => 'date',
      'phptype' => 'date',
      'null' => true,
    ),
    'gender' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'\',\'M\',\'F\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'blood_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => true,
    ),
    'username' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'index' => 'unique',
    ),
    'password' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'password',
      'null' => false,
      'default' => '',
    ),
    'security_level' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
      'default' => 1,
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'columns' => 
      array (
        'id' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'username' => 
    array (
      'alias' => 'username',
      'primary' => false,
      'unique' => true,
      'columns' => 
      array (
        'username' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'PersonPhone' => 
    array (
      'class' => 'PersonPhone',
      'local' => 'id',
      'foreign' => 'person',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'BloodType' => 
    array (
      'class' => 'BloodType',
      'local' => 'blood_type',
      'foreign' => 'type',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
  'validation' => 
  array (
    'class' => 'validation.xPDOValidator',
    'rules' => 
    array (
      'dob' => 
      array (
        'date_format' => 
        array (
          'type' => 'preg_match',
          'rule' => '/\\d{4}-\\d{2}-\\d{2}/',
        ),
      ),
      'password' => 
      array (
        'password_length' => 
        array (
          'type' => 'xPDOValidationRule',
          'rule' => 'xPDOMinLengthValidationRule',
          'value' => '6',
        ),
      ),
    ),
  ),
);
