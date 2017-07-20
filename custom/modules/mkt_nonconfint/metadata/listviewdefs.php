<?php
$module_name = 'mkt_nonconfint';
$listViewDefs [$module_name] = 
array (
  'TIPO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'AREADINTERESSEIMP_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AREADINTERESSEIMP',
    'width' => '10%',
  ),
  'MIGLIORIA_PROPOSTA_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MIGLIORIA_PROPOSTA',
    'sortable' => false,
    'width' => '10%',
  ),
  'DATA_VERIFICA_MIGLIORAMENTO_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATA_VERIFICA_MIGLIORAMENTO',
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'AREADINTERESSEMKT_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_AREADINTERESSEMKT',
    'width' => '10%',
  ),
);
?>
