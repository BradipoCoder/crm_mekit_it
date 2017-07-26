<?php
// created: 2017-07-25 07:36:15
$dictionary["Account"]["fields"]["mkt_accountextras_accounts"] = array (
  'name' => 'mkt_accountextras_accounts',
  'type' => 'link',
  'relationship' => 'mkt_accountextras_accounts',
  'source' => 'non-db',
  'module' => 'mkt_AccountExtras',
  'bean_name' => 'mkt_AccountExtras',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_MKT_ACCOUNTEXTRAS_TITLE',
  'id_name' => 'mkt_accountextras_accountsmkt_accountextras_ida',
);
$dictionary["Account"]["fields"]["mkt_accountextras_accounts_name"] = array (
  'name' => 'mkt_accountextras_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_MKT_ACCOUNTEXTRAS_TITLE',
  'save' => true,
  'id_name' => 'mkt_accountextras_accountsmkt_accountextras_ida',
  'link' => 'mkt_accountextras_accounts',
  'table' => 'mkt_accountextras',
  'module' => 'mkt_AccountExtras',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["mkt_accountextras_accountsmkt_accountextras_ida"] = array (
  'name' => 'mkt_accountextras_accountsmkt_accountextras_ida',
  'type' => 'link',
  'relationship' => 'mkt_accountextras_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MKT_ACCOUNTEXTRAS_ACCOUNTS_FROM_MKT_ACCOUNTEXTRAS_TITLE',
);
