<?php
// created: 2017-11-30 14:19:48
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1"] = array (
  'name' => 'cases_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'cases_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
  'id_name' => 'cases_aos_quotes_1cases_ida',
);
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1_name"] = array (
  'name' => 'cases_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_aos_quotes_1cases_ida',
  'link' => 'cases_aos_quotes_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1cases_ida"] = array (
  'name' => 'cases_aos_quotes_1cases_ida',
  'type' => 'link',
  'relationship' => 'cases_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);
