<?php
 // created: 2016-03-01 17:21:08
$layout_defs["AOS_Quotes"]["subpanel_setup"]['mkt_offers_lines_aos_quotes'] = array (
  'order' => 100,
  'module' => 'mkt_Offers_Lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKT_OFFERS_LINES_AOS_QUOTES_FROM_MKT_OFFERS_LINES_TITLE',
  'get_subpanel_data' => 'mkt_offers_lines_aos_quotes',
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
