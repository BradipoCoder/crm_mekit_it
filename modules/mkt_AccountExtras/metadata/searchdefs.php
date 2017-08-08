<?php
$module_name = 'mkt_AccountExtras';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mkt_accountextras_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'MKT_ACCOUNTEXTRAS_ACCOUNTSACCOUNTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'mkt_accountextras_accounts_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
