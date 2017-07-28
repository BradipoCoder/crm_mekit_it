<?php
// created: 2017-07-28 13:33:48
$dictionary["mkt_accountextras_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'mkt_accountextras_accounts' => 
    array (
      'lhs_module' => 'mkt_AccountExtras',
      'lhs_table' => 'mkt_accountextras',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkt_accountextras_accounts_c',
      'join_key_lhs' => 'mkt_accountextras_accountsmkt_accountextras_ida',
      'join_key_rhs' => 'mkt_accountextras_accountsaccounts_idb',
    ),
  ),
  'table' => 'mkt_accountextras_accounts_c',
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
      'name' => 'mkt_accountextras_accountsmkt_accountextras_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkt_accountextras_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkt_accountextras_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkt_accountextras_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkt_accountextras_accountsmkt_accountextras_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkt_accountextras_accounts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkt_accountextras_accountsaccounts_idb',
      ),
    ),
  ),
);