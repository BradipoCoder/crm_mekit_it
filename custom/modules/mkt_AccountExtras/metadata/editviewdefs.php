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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description_2_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description_3_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION_3',
          ),
        ),
        4 => 
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
