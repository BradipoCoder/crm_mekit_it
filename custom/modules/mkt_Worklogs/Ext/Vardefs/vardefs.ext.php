<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_opportunities"] = array (
  'name' => 'mkt_worklogs_opportunities',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKT_WORKLOGS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mkt_worklogs_opportunitiesopportunities_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_opportunities_name"] = array (
  'name' => 'mkt_worklogs_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_opportunitiesopportunities_ida',
  'link' => 'mkt_worklogs_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_opportunitiesopportunities_ida"] = array (
  'name' => 'mkt_worklogs_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_OPPORTUNITIES_FROM_MKT_WORKLOGS_TITLE',
);


 // created: 2016-08-24 08:10:40
$dictionary['mkt_Worklogs']['fields']['execution_date']['massupdate']='1';

 

// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_meetings"] = array (
  'name' => 'mkt_worklogs_meetings',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_MKT_WORKLOGS_MEETINGS_FROM_MEETINGS_TITLE',
  'id_name' => 'mkt_worklogs_meetingsmeetings_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_meetings_name"] = array (
  'name' => 'mkt_worklogs_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_MEETINGS_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_meetingsmeetings_ida',
  'link' => 'mkt_worklogs_meetings',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_meetingsmeetings_ida"] = array (
  'name' => 'mkt_worklogs_meetingsmeetings_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_MEETINGS_FROM_MKT_WORKLOGS_TITLE',
);


// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_tasks"] = array (
  'name' => 'mkt_worklogs_tasks',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_MKT_WORKLOGS_TASKS_FROM_TASKS_TITLE',
  'id_name' => 'mkt_worklogs_taskstasks_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_tasks_name"] = array (
  'name' => 'mkt_worklogs_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_TASKS_FROM_TASKS_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_taskstasks_ida',
  'link' => 'mkt_worklogs_tasks',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_taskstasks_ida"] = array (
  'name' => 'mkt_worklogs_taskstasks_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_TASKS_FROM_MKT_WORKLOGS_TITLE',
);


// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_project"] = array (
  'name' => 'mkt_worklogs_project',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_project',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_MKT_WORKLOGS_PROJECT_FROM_PROJECT_TITLE',
  'id_name' => 'mkt_worklogs_projectproject_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_project_name"] = array (
  'name' => 'mkt_worklogs_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_PROJECT_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_projectproject_ida',
  'link' => 'mkt_worklogs_project',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_projectproject_ida"] = array (
  'name' => 'mkt_worklogs_projectproject_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_PROJECT_FROM_MKT_WORKLOGS_TITLE',
);


// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_users"] = array (
  'name' => 'mkt_worklogs_users',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_MKT_WORKLOGS_USERS_FROM_USERS_TITLE',
  'id_name' => 'mkt_worklogs_usersusers_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_users_name"] = array (
  'name' => 'mkt_worklogs_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_usersusers_ida',
  'link' => 'mkt_worklogs_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_usersusers_ida"] = array (
  'name' => 'mkt_worklogs_usersusers_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_USERS_FROM_MKT_WORKLOGS_TITLE',
);


// created: 2016-08-09 09:56:37
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_cases"] = array (
  'name' => 'mkt_worklogs_cases',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_MKT_WORKLOGS_CASES_FROM_CASES_TITLE',
  'id_name' => 'mkt_worklogs_casescases_ida',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_cases_name"] = array (
  'name' => 'mkt_worklogs_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_WORKLOGS_CASES_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'mkt_worklogs_casescases_ida',
  'link' => 'mkt_worklogs_cases',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["mkt_Worklogs"]["fields"]["mkt_worklogs_casescases_ida"] = array (
  'name' => 'mkt_worklogs_casescases_ida',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_CASES_FROM_MKT_WORKLOGS_TITLE',
);


 // created: 2016-08-24 08:10:52
$dictionary['mkt_Worklogs']['fields']['date_entered']['massupdate']='1';
$dictionary['mkt_Worklogs']['fields']['date_entered']['options']='';

 
?>