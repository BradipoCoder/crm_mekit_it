<?php
// created: 2016-12-07 15:20:13
$dictionary["mkt_nonconfint_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mkt_nonconfint_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mkt_nonconfint',
      'rhs_table' => 'mkt_nonconfint',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkt_nonconfint_users_c',
      'join_key_lhs' => 'mkt_nonconfint_usersusers_ida',
      'join_key_rhs' => 'mkt_nonconfint_usersmkt_nonconfint_idb',
    ),
  ),
  'table' => 'mkt_nonconfint_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mkt_nonconfint_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkt_nonconfint_usersmkt_nonconfint_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkt_nonconfint_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkt_nonconfint_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkt_nonconfint_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkt_nonconfint_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mkt_nonconfint_usersmkt_nonconfint_idb',
      ),
    ),
  ),
);