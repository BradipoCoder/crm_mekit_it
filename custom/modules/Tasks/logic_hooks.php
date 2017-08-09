<?php
/**
 * Created by Adam Jakab.
 * Date: 28/07/17
 * Time: 15.40
 *
 * @see: http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Module_Framework/Logic_Hooks/Introduction/
 * @see: http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Module_Framework/Logic_Hooks/Module_Hooks/
 *
 * 'process_record' - list view
 * 'after_retrieve' - detail view
 *
 *  before_save
 *
 *
 *
 */

//die("LOADED HOOK");

$hook_version = 1;

$hook_array = [];
$hook_array['after_retrieve'] = [];
$hook_array['process_record'] = [];
$hook_array['before_save'] = [];

$hook_array['before_save'][] =
    Array(
        32,
        'urgency indicators',
        'custom/Extension/modules/Tasks/Hooks/urgencyIndicatorHook.php',
        'urgencyIndicatorHook',
        'execute',
    );
