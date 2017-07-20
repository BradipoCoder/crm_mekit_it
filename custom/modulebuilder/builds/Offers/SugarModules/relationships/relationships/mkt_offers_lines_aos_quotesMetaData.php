<?php
// created: 2016-03-01 17:21:08
$dictionary["mkt_offers_lines_aos_quotes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mkt_offers_lines_aos_quotes' => 
    array (
      'lhs_module' => 'AOS_Quotes',
      'lhs_table' => 'aos_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'mkt_Offers_Lines',
      'rhs_table' => 'mkt_offers_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkt_offers_lines_aos_quotes_c',
      'join_key_lhs' => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
      'join_key_rhs' => 'mkt_offers_lines_aos_quotesmkt_offers_lines_idb',
    ),
  ),
  'table' => 'mkt_offers_lines_aos_quotes_c',
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
      'name' => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkt_offers_lines_aos_quotesmkt_offers_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkt_offers_lines_aos_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkt_offers_lines_aos_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkt_offers_lines_aos_quotes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mkt_offers_lines_aos_quotesmkt_offers_lines_idb',
      ),
    ),
  ),
);