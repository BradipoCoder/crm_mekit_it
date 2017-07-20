<?php
// created: 2016-02-12 16:11:23
$dictionary["mkt_Worklogs"]["fields"]["mkt_assets_mkt_worklogs"] = array (
  'name' => 'mkt_assets_mkt_worklogs',
  'type' => 'link',
  'relationship' => 'mkt_assets_mkt_worklogs',
  'source' => 'non-db',
  'module' => 'mkt_Assets',
  'bean_name' => 'mkt_Assets',
  'vname' => 'LBL_MKT_ASSETS_MKT_WORKLOGS_FROM_MKT_ASSETS_TITLE',
  'id_name' => 'mkt_assets_mkt_worklogsmkt_assets_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_assets_mkt_worklogs_name"] = array (
  'name' => 'mkt_assets_mkt_worklogs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_ASSETS_MKT_WORKLOGS_FROM_MKT_ASSETS_TITLE',
  'save' => true,
  'id_name' => 'mkt_assets_mkt_worklogsmkt_assets_ida',
  'link' => 'mkt_assets_mkt_worklogs',
  'table' => 'mkt_assets',
  'module' => 'mkt_Assets',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_assets_mkt_worklogsmkt_assets_ida"] = array (
  'name' => 'mkt_assets_mkt_worklogsmkt_assets_ida',
  'type' => 'link',
  'relationship' => 'mkt_assets_mkt_worklogs',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_ASSETS_MKT_WORKLOGS_FROM_MKT_WORKLOGS_TITLE',
);
