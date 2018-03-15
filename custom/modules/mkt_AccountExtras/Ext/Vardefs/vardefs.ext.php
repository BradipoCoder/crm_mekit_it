<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-01-12 10:20:50
$dictionary['mkt_AccountExtras']['fields']['iframe_1']['default']='https://crm.mekit.it/index.php?module=mkt_AccountExtras&action=rawdata&record={id}';

 

// created: 2017-08-04 09:15:31
$dictionary["mkt_AccountExtras"]["fields"]["mkt_accountextras_accounts"] = array (
  'name' => 'mkt_accountextras_accounts',
  'type' => 'link',
  'relationship' => 'mkt_accountextras_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'mkt_accountextras_accountsaccounts_idb',
);
$dictionary["mkt_AccountExtras"]["fields"]["mkt_accountextras_accounts_name"] = array (
  'name' => 'mkt_accountextras_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'mkt_accountextras_accountsaccounts_idb',
  'link' => 'mkt_accountextras_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mkt_AccountExtras"]["fields"]["mkt_accountextras_accountsaccounts_idb"] = array (
  'name' => 'mkt_accountextras_accountsaccounts_idb',
  'type' => 'link',
  'relationship' => 'mkt_accountextras_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);

?>