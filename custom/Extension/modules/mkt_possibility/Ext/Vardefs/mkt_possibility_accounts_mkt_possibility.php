<?php
// created: 2017-08-25 15:26:46
$dictionary["mkt_possibility"]["fields"]["mkt_possibility_accounts"] = array (
  'name' => 'mkt_possibility_accounts',
  'type' => 'link',
  'relationship' => 'mkt_possibility_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'mkt_possibility_accountsaccounts_ida',
);
$dictionary["mkt_possibility"]["fields"]["mkt_possibility_accounts_name"] = array (
  'name' => 'mkt_possibility_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'mkt_possibility_accountsaccounts_ida',
  'link' => 'mkt_possibility_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mkt_possibility"]["fields"]["mkt_possibility_accountsaccounts_ida"] = array (
  'name' => 'mkt_possibility_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'mkt_possibility_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_MKT_POSSIBILITY_TITLE',
);
