<?php
$listViewDefs ['AOS_Quotes'] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'QUOTE_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_QUOTE_TYPE',
    'width' => '10%',
  ),
  'DATA_DOC_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DATA_DOC',
    'width' => '10%',
  ),
  'CASES_AOS_QUOTES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
    'id' => 'CASES_AOS_QUOTES_1CASES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ATTIVITAGENERICA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ATTIVITAGENERICA',
    'width' => '10%',
  ),
  'BILLING_ACCOUNT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ACCOUNT',
    'default' => true,
    'module' => 'Accounts',
    'id' => 'BILLING_ACCOUNT_ID',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'billing_account_id',
    ),
  ),
  'WORKHOURS_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_WORKHOURS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'NOTES_INTERNAL_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_NOTES_INTERNAL',
    'sortable' => false,
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_USER',
    'default' => true,
    'module' => 'Users',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
  ),
  'OPPORTUNITY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPPORTUNITY',
    'id' => 'OPPORTUNITY_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'SUBTOTAL_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DISCOUNT_PERCENT_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_DISCOUNT_PERCENT',
    'width' => '10%',
  ),
  'EXPIRATION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EXPIRATION',
    'default' => false,
  ),
  'STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STAGE',
    'default' => false,
  ),
  'METODO_ID_HEAD_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_METODO_ID_HEAD',
    'width' => '10%',
  ),
  'DOCUMENT_NUMBER_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_DOCUMENT_NUMBER',
    'width' => '10%',
  ),
  'DOCUMENT_YEAR_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_DOCUMENT_YEAR',
    'width' => '10%',
  ),
  'METODO_DATABASE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_METODO_DATABASE',
    'width' => '10%',
  ),
  'MACHINE_PART_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_MACHINE_PART_NUMBER',
    'width' => '10%',
  ),
  'RAS_STATUS_HINT_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_RAS_STATUS_HINT',
    'width' => '10%',
  ),
  'COLLAUDO_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COLLAUDO',
    'width' => '10%',
  ),
  'MACHINE_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_MACHINE_NAME',
    'width' => '10%',
  ),
  'BILLING_CONTACT' => 
  array (
    'width' => '11%',
    'label' => 'LBL_BILLING_CONTACT',
    'default' => false,
    'module' => 'Contacts',
    'id' => 'BILLING_CONTACT_ID',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'billing_contact_id',
    ),
  ),
  'CONTROLLISICUREZZA_C' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CONTROLLISICUREZZA',
    'width' => '10%',
  ),
  'MACHINE_WORKHOURS_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_MACHINE_WORKHOURS',
    'width' => '10%',
  ),
  'IMP_AGENT_CODE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_IMP_AGENT_CODE',
    'width' => '10%',
  ),
  'MEKIT_AGENT_CODE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MEKIT_AGENT_CODE',
    'width' => '10%',
  ),
  'DSC_PAYMENT_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DSC_PAYMENT',
    'width' => '10%',
  ),
  'AOS_QUOTES_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => false,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CITY',
    'default' => false,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => false,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PHONE_ALT',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'OWNERSHIP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OWNERSHIP',
    'default' => false,
  ),
  'EMPLOYEES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMPLOYEES',
    'default' => false,
  ),
  'TICKER_SYMBOL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TICKER_SYMBOL',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
);
?>
