<?php
$module_name = 'mkt_nonconfint';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tipo_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'mkt_nonconfint_users_name',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'areadinteresseimp_c',
            'studio' => 'visible',
            'label' => 'LBL_AREADINTERESSEIMP',
          ),
          1 => 
          array (
            'name' => 'areadinteressemkt_c',
            'studio' => 'visible',
            'label' => 'LBL_AREADINTERESSEMKT',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'miglioria_proposta_c',
            'studio' => 'visible',
            'label' => 'LBL_MIGLIORIA_PROPOSTA',
          ),
          1 => 
          array (
            'name' => 'data_verifica_miglioramento_c',
            'label' => 'LBL_DATA_VERIFICA_MIGLIORAMENTO',
          ),
        ),
      ),
    ),
  ),
);
?>
