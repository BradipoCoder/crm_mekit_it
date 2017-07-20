<?php
/*
All LBL_* are defined in: custom/modules/Meetings/language/it_IT.lang.php
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * 'where' => "(calls.status != 'Held' AND calls.status != 'Not Held')",
 */


$subpanel_layout = [
    'where' => "(calls.status = 'Planned')",
    'fill_in_additional_fields'	=> false,
    'list_fields' => [
        'object_image'=>[
            'vname' => 'LBL_OBJECT_IMAGE',
            'widget_class' => 'SubPanelIcon',
            'width' => '2%',
        ],
        'name' => [
            'vname' => 'LBL_LIST_SUBJECT',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '58%',
        ],
        'status' => [
            'widget_class' => 'SubPanelActivitiesStatusField',
            'vname' => 'LBL_LIST_STATUS',
            'width' => '15%',
        ],
        'date_schedule_c'=> [
            'force_default' => '(SELECT date_schedule_c FROM calls_cstm WHERE calls_cstm.id_c = calls.id) AS',
            'force_exists' => true,
            'vname' => 'LBL_LIST_SCHEDULE_DATE',
            'width' => '10%',
            'alias' => 'date_start',
            'sort_by' => 'date_start',
        ],
        'assigned_user_name' => [
            'name' => 'assigned_user_name',
            'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'target_record_key' => 'assigned_user_id',
            'target_module' => 'Employees',
            'width' => '10%',
        ],
        'edit_button' => [
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'width' => '5%',
        ],
    ]
];
