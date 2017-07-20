<?php
// created: 2016-02-12 16:11:23
$dictionary["mkt_assets_mkt_worklogs"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mkt_assets_mkt_worklogs' => 
    array (
      'lhs_module' => 'mkt_Assets',
      'lhs_table' => 'mkt_assets',
      'lhs_key' => 'id',
      'rhs_module' => 'mkt_Worklogs',
      'rhs_table' => 'mkt_worklogs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkt_assets_mkt_worklogs_c',
      'join_key_lhs' => 'mkt_assets_mkt_worklogsmkt_assets_ida',
      'join_key_rhs' => 'mkt_assets_mkt_worklogsmkt_worklogs_idb',
    ),
  ),
  'table' => 'mkt_assets_mkt_worklogs_c',
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
      'name' => 'mkt_assets_mkt_worklogsmkt_assets_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkt_assets_mkt_worklogsmkt_worklogs_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkt_assets_mkt_worklogsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkt_assets_mkt_worklogs_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkt_assets_mkt_worklogsmkt_assets_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkt_assets_mkt_worklogs_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mkt_assets_mkt_worklogsmkt_worklogs_idb',
      ),
    ),
  ),
);