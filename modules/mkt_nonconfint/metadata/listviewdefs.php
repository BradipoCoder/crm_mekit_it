<?php
$module_name = 'mkt_nonconfint';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'MKT_NONCONFINT_USERS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_NONCONFINT_USERS_FROM_USERS_TITLE',
    'id' => 'MKT_NONCONFINT_USERSUSERS_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
