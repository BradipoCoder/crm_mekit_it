<?php
$searchdefs ['Project'] = 
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
      'priority' => 
      array (
        'type' => 'enum',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_PRIORITY',
        'name' => 'priority',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_STATUS',
        'name' => 'status',
      ),
      'tipo_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'name' => 'tipo_c',
      ),
      'assigned_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_id',
      ),
      'area_dinteresse_mekit_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_AREA_DINTERESSE_MEKIT',
        'width' => '10%',
        'name' => 'area_dinteresse_mekit_c',
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'estimated_start_date' => 
      array (
        'name' => 'estimated_start_date',
        'default' => true,
        'width' => '10%',
      ),
      'estimated_end_date' => 
      array (
        'name' => 'estimated_end_date',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ASSIGNED_USER_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'codice_commessa_metodo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODICE_COMMESSA_METODO',
        'width' => '10%',
        'name' => 'codice_commessa_metodo_c',
      ),
      'esito_progetto_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESITO_PROGETTO',
        'width' => '10%',
        'name' => 'esito_progetto_c',
      ),
      'tipo_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'name' => 'tipo_c',
      ),
      'assigned_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_id',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED_BY',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
