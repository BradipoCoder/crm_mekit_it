<?php
$popupMeta = array (
    'moduleMain' => 'mkt_possibility',
    'varName' => 'mkt_possibility',
    'orderBy' => 'mkt_possibility.name',
    'whereClauses' => array (
  'name' => 'mkt_possibility.name',
  'trigger_date' => 'mkt_possibility.trigger_date',
  'mkt_possibility_accounts_name' => 'mkt_possibility.mkt_possibility_accounts_name',
  'assigned_user_name' => 'mkt_possibility.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'trigger_date',
  5 => 'mkt_possibility_accounts_name',
  6 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'trigger_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRIGGER_DATE',
    'width' => '10%',
    'name' => 'trigger_date',
  ),
  'mkt_possibility_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MKT_POSSIBILITY_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'mkt_possibility_accounts_name',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'TRIGGER_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRIGGER_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'MKT_POSSIBILITY_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MKT_POSSIBILITY_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
),
);
