<?php
 // created: 2017-11-08 08:27:01
$layout_defs["Users"]["subpanel_setup"]['users_cases_1'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_CASES_1_FROM_CASES_TITLE',
  'get_subpanel_data' => 'users_cases_1',
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
