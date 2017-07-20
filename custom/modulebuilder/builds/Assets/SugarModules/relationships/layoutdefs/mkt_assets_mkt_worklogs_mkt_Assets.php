<?php
 // created: 2016-02-12 16:11:23
$layout_defs["mkt_Assets"]["subpanel_setup"]['mkt_assets_mkt_worklogs'] = array (
  'order' => 100,
  'module' => 'mkt_Worklogs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKT_ASSETS_MKT_WORKLOGS_FROM_MKT_WORKLOGS_TITLE',
  'get_subpanel_data' => 'mkt_assets_mkt_worklogs',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
