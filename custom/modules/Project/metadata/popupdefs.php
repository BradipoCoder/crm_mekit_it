<?php
$popupMeta = array (
    'moduleMain' => 'Project',
    'varName' => 'PROJECT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'project.name',
  'status' => 'project.status',
  'estimated_start_date' => 'project.estimated_start_date',
  'estimated_end_date' => 'project.estimated_end_date',
  'priority' => 'project.priority',
  'assigned_user_name' => 'project.assigned_user_name',
  'codice_commessa_metodo_c' => 'project_cstm.codice_commessa_metodo_c',
  'esito_progetto_c' => 'project_cstm.esito_progetto_c',
  'tipo_c' => 'project_cstm.tipo_c',
  'area_dinteresse_imp_c' => 'project_cstm.area_dinteresse_imp_c',
  'area_dinteresse_mekit_c' => 'project_cstm.area_dinteresse_mekit_c',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'status',
  2 => 'estimated_start_date',
  3 => 'estimated_end_date',
  4 => 'priority',
  5 => 'assigned_user_name',
  6 => 'codice_commessa_metodo_c',
  7 => 'esito_progetto_c',
  8 => 'tipo_c',
  9 => 'area_dinteresse_imp_c',
  10 => 'area_dinteresse_mekit_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'estimated_start_date' => 
  array (
    'name' => 'estimated_start_date',
    'width' => '10%',
  ),
  'estimated_end_date' => 
  array (
    'name' => 'estimated_end_date',
    'width' => '10%',
  ),
  'priority' => 
  array (
    'name' => 'priority',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ASSIGNED_USER_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
  'codice_commessa_metodo_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODICE_COMMESSA_METODO',
    'width' => '10%',
    'name' => 'codice_commessa_metodo_c',
  ),
  'esito_progetto_c' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_ESITO_PROGETTO',
    'width' => '10%',
    'name' => 'esito_progetto_c',
  ),
  'tipo_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'name' => 'tipo_c',
  ),
  'area_dinteresse_imp_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_AREA_DINTERESSE_IMP',
    'width' => '10%',
    'name' => 'area_dinteresse_imp_c',
  ),
  'area_dinteresse_mekit_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_AREA_DINTERESSE_MEKIT',
    'width' => '10%',
    'name' => 'area_dinteresse_mekit_c',
  ),
),
);
