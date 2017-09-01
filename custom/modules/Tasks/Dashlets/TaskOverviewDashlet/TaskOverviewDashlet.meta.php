<?php

if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['TaskOverviewDashlet'] = array
(
    'module'      => 'Tasks',
    'title'       => translate('LBL_MY_TASKS_OVERVIEW', 'Tasks', 'Tasks overview'),
    'description' => 'Task overview',
    'category'    => 'Module Views',
);