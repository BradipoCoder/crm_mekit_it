<?php
$module_name = 'mkt_possibility';
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
      'trigger_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TRIGGER_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'trigger_date',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'mkt_possibility_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'MKT_POSSIBILITY_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mkt_possibility_accounts_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
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
      'trigger_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TRIGGER_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'trigger_date',
      ),
      'mkt_possibility_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKT_POSSIBILITY_ACCOUNTSACCOUNTS_IDA',
        'name' => 'mkt_possibility_accounts_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
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
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'current_user_only',
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
