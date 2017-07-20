<?php
// created: 2016-12-07 15:20:13
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_users"] = array (
  'name' => 'mkt_nonconfint_users',
  'type' => 'link',
  'relationship' => 'mkt_nonconfint_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_USERS_TITLE',
  'id_name' => 'mkt_nonconfint_usersusers_ida',
);
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_users_name"] = array (
  'name' => 'mkt_nonconfint_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'mkt_nonconfint_usersusers_ida',
  'link' => 'mkt_nonconfint_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_usersusers_ida"] = array (
  'name' => 'mkt_nonconfint_usersusers_ida',
  'type' => 'link',
  'relationship' => 'mkt_nonconfint_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_MKT_NONCONFINT_TITLE',
);
