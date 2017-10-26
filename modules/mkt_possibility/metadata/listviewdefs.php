<?php
$module_name = 'mkt_possibility';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  'TRIGGER_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRIGGER_DATE',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
