<?php
$module_name = 'mkt_AccountExtras';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'MKT_ACCOUNTEXTRAS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'MKT_ACCOUNTEXTRAS_ACCOUNTSACCOUNTS_IDB',
    'width' => '10%',
    'default' => false,
  ),
);
?>
