<?php
 // created: 2016-12-07 15:20:13
$layout_defs["Users"]["subpanel_setup"]['mkt_nonconfint_users'] = array (
  'order' => 100,
  'module' => 'mkt_nonconfint',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKT_NONCONFINT_USERS_FROM_MKT_NONCONFINT_TITLE',
  'get_subpanel_data' => 'mkt_nonconfint_users',
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
