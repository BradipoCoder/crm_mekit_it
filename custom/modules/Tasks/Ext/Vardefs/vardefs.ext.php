<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-08-09 14:30:20
$dictionary['Task']['fields']['urgency_calc_temp_c']['inline_edit']='';
$dictionary['Task']['fields']['urgency_calc_temp_c']['labelValue']='Urgency Calc Temp';

 

// created: 2016-08-09 09:56:37
$dictionary["Task"]["fields"]["mkt_worklogs_tasks"] = array (
  'name' => 'mkt_worklogs_tasks',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_tasks',
  'source' => 'non-db',
  'module' => 'mkt_Worklogs',
  'bean_name' => 'mkt_Worklogs',
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_TASKS_FROM_MKT_WORKLOGS_TITLE',
);


 // created: 2017-11-06 10:57:36
$dictionary['Task']['fields']['complexity_level_c']['inline_edit']='1';
$dictionary['Task']['fields']['complexity_level_c']['labelValue']='Livello di difficoltà';

 

 // created: 2017-08-28 16:28:05
$dictionary['Task']['fields']['date_due']['display_default']='+1 week&11:00am';
$dictionary['Task']['fields']['date_due']['inline_edit']=true;
$dictionary['Task']['fields']['date_due']['merge_filter']='disabled';
$dictionary['Task']['fields']['date_due']['required']=true;
$dictionary['Task']['fields']['date_due']['massupdate']='1';

 

 // created: 2016-02-04 17:01:47
$dictionary['Task']['fields']['fase_temporale_c']['inline_edit']='1';
$dictionary['Task']['fields']['fase_temporale_c']['labelValue']='Fase Temporale';

 

 // created: 2017-08-28 16:27:28
$dictionary['Task']['fields']['date_start']['display_default']='now&08:00am';
$dictionary['Task']['fields']['date_start']['inline_edit']=true;
$dictionary['Task']['fields']['date_start']['merge_filter']='disabled';

 

 // created: 2017-08-08 08:29:17
$dictionary['Task']['fields']['status']['default']='ToBeVerified';
$dictionary['Task']['fields']['status']['inline_edit']=true;
$dictionary['Task']['fields']['status']['merge_filter']='disabled';
$dictionary['Task']['fields']['status']['massupdate']='1';

 

 // created: 2017-08-09 14:44:16
$dictionary['Task']['fields']['urgency_indicator_c']['inline_edit']='';
$dictionary['Task']['fields']['urgency_indicator_c']['options']='numeric_range_search_dom';
$dictionary['Task']['fields']['urgency_indicator_c']['labelValue']='Livello di urgenza';
$dictionary['Task']['fields']['urgency_indicator_c']['enable_range_search']='1';

 

 // created: 2017-08-09 09:04:31
$dictionary['Task']['fields']['priority']['default']='P3';
$dictionary['Task']['fields']['priority']['inline_edit']=true;
$dictionary['Task']['fields']['priority']['merge_filter']='disabled';
$dictionary['Task']['fields']['priority']['options']='task_priority_dom';
$dictionary['Task']['fields']['priority']['massupdate']='1';

 
?>