<?php
$popupMeta = array (
    'moduleMain' => 'Calls',
    'varName' => 'Call',
    'orderBy' => 'calls.name',
    'whereClauses' => array (
  'name' => 'calls.name',
  'parent_name' => 'calls.parent_name',
  'current_user_only' => 'calls.current_user_only',
  'direction' => 'calls.direction',
  'status' => 'calls.status',
  'campagna_telefonica_c' => 'calls_cstm.campagna_telefonica_c',
  'relativo_a_campagna_c' => 'calls.relativo_a_campagna_c',
  'location_zone_c' => 'calls_cstm.location_zone_c',
  'company_status_c' => 'calls_cstm.company_status_c',
  'industry_c' => 'calls_cstm.industry_c',
  'target_c' => 'calls_cstm.target_c',
  'billing_address_city_c' => 'calls_cstm.billing_address_city_c',
  'call_period_c' => 'calls_cstm.call_period_c',
  'date_schedule_c' => 'calls_cstm.date_schedule_c',
  'date_start' => 'calls.date_start',
  'assigned_user_id' => 'calls.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'parent_name',
  5 => 'current_user_only',
  6 => 'direction',
  7 => 'campagna_telefonica_c',
  8 => 'relativo_a_campagna_c',
  9 => 'location_zone_c',
  10 => 'company_status_c',
  11 => 'industry_c',
  12 => 'target_c',
  13 => 'billing_address_city_c',
  14 => 'call_period_c',
  15 => 'date_schedule_c',
  16 => 'date_start',
  17 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_LIST_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'current_user_only' => 
  array (
    'name' => 'current_user_only',
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DIRECTION',
    'width' => '10%',
    'name' => 'direction',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'campagna_telefonica_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CAMPAGNA_TELEFONICA',
    'width' => '10%',
    'name' => 'campagna_telefonica_c',
  ),
  'relativo_a_campagna_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RELATIVO_A_CAMPAGNA',
    'id' => 'CAMPAIGN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'relativo_a_campagna_c',
  ),
  'location_zone_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOCATION_ZONE',
    'width' => '10%',
    'name' => 'location_zone_c',
  ),
  'company_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_COMPANY_STATUS',
    'width' => '10%',
    'name' => 'company_status_c',
  ),
  'industry_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'name' => 'industry_c',
  ),
  'target_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TARGET',
    'width' => '10%',
    'name' => 'target_c',
  ),
  'billing_address_city_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'width' => '10%',
    'name' => 'billing_address_city_c',
  ),
  'call_period_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CALL_PERIOD',
    'width' => '10%',
    'name' => 'call_period_c',
  ),
  'date_schedule_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_SCHEDULE',
    'width' => '10%',
    'name' => 'date_schedule_c',
  ),
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'name' => 'date_start',
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
    'width' => '10%',
  ),
),
);
