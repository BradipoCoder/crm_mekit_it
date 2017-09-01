<?php
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

global $current_user;

$dashletData['TaskOverviewDashlet']['searchFields'] = array(
    'name' =>
        array(
            'default' => 'xxx',
        ),
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
        ),
);


