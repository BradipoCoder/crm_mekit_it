<?php
$dashletData['mkt_possibilityDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'trigger_date' => 
  array (
    'default' => '',
  ),
  'mkt_possibility_accounts_name' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['mkt_possibilityDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'trigger_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRIGGER_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'mkt_possibility_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MKT_POSSIBILITY_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
