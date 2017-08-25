<?php 
 //WARNING: The contents of this file are auto-generated


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


/**
 * Created by Adam Jakab.
 * Date: 08/03/16
 * Time: 10.54
 */


$job_strings[] = 'MekitSchedulerCustomJob';

function MekitSchedulerCustomJob(){

    //do something


    // Must return true
    return true;
}
?>