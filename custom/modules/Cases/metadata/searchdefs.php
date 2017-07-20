<?php
$searchdefs ['Cases'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'state' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATE',
        'width' => '10%',
        'name' => 'state',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'ref_part_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REF_PART_NUMBER',
        'width' => '10%',
        'name' => 'ref_part_number_c',
      ),
      'ref_part_unique_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REF_PART_UNIQUE_NUMBER',
        'width' => '10%',
        'name' => 'ref_part_unique_number_c',
      ),
      'numerotag_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMEROTAG',
        'width' => '10%',
        'name' => 'numerotag_c',
      ),
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'case_number' => 
      array (
        'name' => 'case_number',
        'default' => true,
        'width' => '10%',
      ),
      'state' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATE',
        'width' => '10%',
        'name' => 'state',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'numerotag_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMEROTAG',
        'width' => '10%',
        'name' => 'numerotag_c',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'origine_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ORIGINE',
        'width' => '10%',
        'name' => 'origine_c',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'area_dinteresse_imp_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_AREA_DINTERESSE_IMP',
        'width' => '10%',
        'name' => 'area_dinteresse_imp_c',
      ),
      'case_area_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CASE_AREA',
        'width' => '10%',
        'name' => 'case_area_c',
      ),
      'ref_part_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REF_PART_NUMBER',
        'width' => '10%',
        'name' => 'ref_part_number_c',
      ),
      'ref_part_description_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REF_PART_DESCRIPTION',
        'width' => '10%',
        'name' => 'ref_part_description_c',
      ),
      'ref_part_unique_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_REF_PART_UNIQUE_NUMBER',
        'width' => '10%',
        'name' => 'ref_part_unique_number_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'date_close_prg_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_CLOSE_PRG',
        'width' => '10%',
        'name' => 'date_close_prg_c',
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
