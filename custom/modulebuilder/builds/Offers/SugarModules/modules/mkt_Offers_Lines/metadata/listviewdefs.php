<?php
$module_name = 'mkt_Offers_Lines';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRODUCT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MKT_OFFERS_LINES_AOS_QUOTES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MKT_OFFERS_LINES_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
    'id' => 'MKT_OFFERS_LINES_AOS_QUOTESAOS_QUOTES_IDA',
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
);
?>
