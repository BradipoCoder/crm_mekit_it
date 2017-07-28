<?php
/**
 * Created by Adam Jakab.
 * Date: 28/07/17
 * Time: 15.40
 */

$hook_version = 1;

$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] =
    Array(
        33,
        'createTxtFromJson',
        'custom/modules/mkt_AccountExtras/Hooks/createTxtFromJson.php',
        'createTxtFromJson',
        'execute',
    );