<?php
$module_name = 'mkt_Offers_Lines';
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
            'name' => 'product',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'measure_unit',
            'studio' => 'visible',
            'label' => 'LBL_MEASURE_UNIT',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'net_total',
            'label' => 'LBL_NET_TOTAL',
          ),
          1 => 
          array (
            'name' => 'net_total_listino_42',
            'label' => 'LBL_NET_TOTAL_LISTINO_42',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_discount',
            'label' => 'LBL_TOTAL_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'discount_perc_number',
            'label' => 'LBL_DISCOUNT_PERC_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'gross_total',
            'label' => 'LBL_GROSS_TOTAL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'article_code',
            'label' => 'LBL_ARTICLE_CODE',
          ),
          1 => 
          array (
            'name' => 'article_description',
            'label' => 'LBL_ARTICLE_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
