<?php
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

global $current_user;

$dashletData['TaskOverviewDashlet']['searchFields'] = array
(
    'status' => array('default' => array('In Progress')),
    'priority' => array('default' => array('P1', 'P2', 'P3', 'P4')),
);

$dashletData['TaskOverviewDashlet']['columns'] = array
(
    'name' =>
        array(
            'width'   => '40%',
            'label'   => 'LBL_LIST_NAME',
            'link'    => true,
            'default' => true,
            'name'    => 'name',
            'sortable' => false,
        ),
    'status' =>
        array(
            'width'   => '20%',
            'label'   => 'LBL_STATUS',
            'sortable' => false,
        ),
    'priority' =>
        array(
            'width'   => '20%',
            'label'   => 'LBL_PRIORITY',
            'sortable' => false,
            'default' => true,
        ),
);


$dashletData['TaskOverviewDashlet']['extras'] = array
(
    'number_of_results' => 1,
);