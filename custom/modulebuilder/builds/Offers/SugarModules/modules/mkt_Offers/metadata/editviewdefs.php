<?php
$module_name = 'mkt_Offers';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
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
          0 => 
          array (
            'name' => 'document_number',
            'label' => 'LBL_DOCUMENT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'document_date',
            'label' => 'LBL_DOCUMENT_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'imp_agent_code',
            'studio' => 'visible',
            'label' => 'LBL_IMP_AGENT_CODE',
          ),
          1 => 
          array (
            'name' => 'mekit_agent_code',
            'studio' => 'visible',
            'label' => 'LBL_MEKIT_AGENT_CODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'totale_imponibile_euro',
            'label' => 'LBL_TOTALE_IMPONIBILE_EURO',
          ),
          1 => 
          array (
            'name' => 'totale_netto_listino_42',
            'label' => 'LBL_TOTALE_NETTO_LISTINO_42',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'discount_mean_string',
            'label' => 'LBL_DISCOUNT_MEAN_STRING',
          ),
          1 => 
          array (
            'name' => 'payment_dsc',
            'label' => 'LBL_PAYMENT_DSC',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
