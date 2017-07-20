<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2017-03-28 06:44:35
$dictionary['Task']['fields']['date_due']['display_default']='next monday&11:00am';
$dictionary['Task']['fields']['date_due']['inline_edit']=true;
$dictionary['Task']['fields']['date_due']['merge_filter']='disabled';
$dictionary['Task']['fields']['date_due']['required']=true;
$dictionary['Task']['fields']['date_due']['massupdate']='1';

 

 // created: 2016-02-04 17:01:47
$dictionary['Task']['fields']['fase_temporale_c']['inline_edit']='1';
$dictionary['Task']['fields']['fase_temporale_c']['labelValue']='Fase Temporale';

 

 // created: 2017-03-28 06:44:23
$dictionary['Task']['fields']['date_start']['display_default']='next monday&08:00am';
$dictionary['Task']['fields']['date_start']['inline_edit']=true;
$dictionary['Task']['fields']['date_start']['merge_filter']='disabled';

 

// created: 2016-08-08 08:13:49
$dictionary['Task']['fields']['status']['default']='In Progress';
$dictionary['Task']['fields']['status']['inline_edit']=true;
$dictionary['Task']['fields']['status']['merge_filter']='disabled';

 

 // created: 2016-03-04 08:20:58
$dictionary['Task']['fields']['priority']['default']='P3';
$dictionary['Task']['fields']['priority']['inline_edit']=true;
$dictionary['Task']['fields']['priority']['merge_filter']='disabled';
$dictionary['Task']['fields']['priority']['options']='case_priority_dom';

 
?>