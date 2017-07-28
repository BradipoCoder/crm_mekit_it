<?php
$module_name = 'mkt_AccountExtras';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mkt_accountextras_accounts_name',
          ),
        ),
        1 => 
        array (
          0 => 'date_modified',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'client_data',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_DATA',
          ),
          1 => 
          array (
            'name' => 'client_data_txt',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT_DATA_TXT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'current_month',
            'studio' => 'visible',
            'label' => 'LBL_CURRENT_MONTH',
          ),
          1 => 
          array (
            'name' => 'current_month_txt',
            'studio' => 'visible',
            'label' => 'LBL_CURRENT_MONTH_TXT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'deadlines',
            'studio' => 'visible',
            'label' => 'LBL_DEADLINES',
          ),
          1 => 
          array (
            'name' => 'deadlines_txt',
            'studio' => 'visible',
            'label' => 'LBL_DEADLINES_TXT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'products_recent_buys',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTS_RECENT_BUYS',
          ),
          1 => 
          array (
            'name' => 'products_recent_buys_txt',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTS_RECENT_BUYS_TXT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'products_recent_non_buys',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTS_RECENT_NON_BUYS',
          ),
          1 => 
          array (
            'name' => 'products_recent_non_buys_txt',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTS_RECENT_NON_BUYS_TXT',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
