<?php
$module_name = 'AOS_Quotes';
$_module_name = 'aos_quotes';
$searchdefs [$module_name] = 
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
      'quote_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_QUOTE_TYPE',
        'width' => '10%',
        'name' => 'quote_type',
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
    ),
    'advanced_search' => 
    array (
      'quote_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_QUOTE_TYPE',
        'width' => '10%',
        'name' => 'quote_type',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'metodo_database_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_METODO_DATABASE',
        'width' => '10%',
        'name' => 'metodo_database_c',
      ),
      'document_year_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_DOCUMENT_YEAR',
        'width' => '10%',
        'name' => 'document_year_c',
      ),
      'document_number_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_DOCUMENT_NUMBER',
        'width' => '10%',
        'name' => 'document_number_c',
      ),
      'data_doc_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATA_DOC',
        'width' => '10%',
        'name' => 'data_doc_c',
      ),
      'billing_contact' => 
      array (
        'name' => 'billing_contact',
        'default' => true,
        'width' => '10%',
      ),
      'billing_account' => 
      array (
        'name' => 'billing_account',
        'default' => true,
        'width' => '10%',
      ),
      'workhours_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_WORKHOURS',
        'width' => '10%',
        'name' => 'workhours_c',
      ),
      'ras_status_hint_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RAS_STATUS_HINT',
        'width' => '10%',
        'name' => 'ras_status_hint_c',
      ),
      'machine_part_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MACHINE_PART_NUMBER',
        'width' => '10%',
        'name' => 'machine_part_number_c',
      ),
      'total_amount' => 
      array (
        'name' => 'total_amount',
        'default' => true,
        'width' => '10%',
      ),
      'cases_aos_quotes_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
        'id' => 'CASES_AOS_QUOTES_1CASES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cases_aos_quotes_1_name',
      ),
      'expiration' => 
      array (
        'name' => 'expiration',
        'default' => true,
        'width' => '10%',
      ),
      'opportunity' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_OPPORTUNITY',
        'id' => 'OPPORTUNITY_ID',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'opportunity',
      ),
      'stage' => 
      array (
        'name' => 'stage',
        'default' => true,
        'width' => '10%',
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
      'attivitagenerica_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ATTIVITAGENERICA',
        'width' => '10%',
        'name' => 'attivitagenerica_c',
      ),
      'imp_agent_code_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IMP_AGENT_CODE',
        'width' => '10%',
        'name' => 'imp_agent_code_c',
      ),
      'mekit_agent_code_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MEKIT_AGENT_CODE',
        'width' => '10%',
        'name' => 'mekit_agent_code_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
