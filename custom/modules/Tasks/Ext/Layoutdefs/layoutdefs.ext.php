<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-08-09 09:56:37
$layout_defs["Tasks"]["subpanel_setup"]['mkt_worklogs_tasks'] = array (
  'order' => 100,
  'module' => 'mkt_Worklogs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKT_WORKLOGS_TASKS_FROM_MKT_WORKLOGS_TITLE',
  'get_subpanel_data' => 'mkt_worklogs_tasks',
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


//auto-generated file DO NOT EDIT
$layout_defs['Tasks']['subpanel_setup']['mkt_worklogs_tasks']['override_subpanel_name'] = 'Task_subpanel_mkt_worklogs_tasks';

?>