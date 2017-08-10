<?php
/**
 * Created by Adam Jakab.
 * Date: 08/03/16
 * Time: 10.54
 */
require_once "custom/Extension/modules/Schedulers/Ext/ScheduledTasks/Jobs/TaskUrgencyIndicatorUpdater.php";

$job_strings[] = 'TaskUpdateUrgencyIndicators';

function TaskUpdateUrgencyIndicators()
{
    $updater = new TaskUrgencyIndicatorUpdater();
    $res = $updater->execute();
    return $res;
}
