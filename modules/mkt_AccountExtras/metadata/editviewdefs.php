<?php
$module_name = 'mkt_AccountExtras';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dati_cliente',
            'studio' => 'visible',
            'label' => 'LBL_DATI_CLIENTE',
          ),
          1 => 
          array (
            'name' => 'mkt_accountextras_accounts_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mkt_accountextras_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
