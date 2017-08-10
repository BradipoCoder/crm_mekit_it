<?php

/**
 * Created by Adam Jakab.
 * Date: 10/08/17
 * Time: 10.24
 */
class TaskUrgencyIndicatorUpdater
{
    /** @var \DBManager  */
    protected $db;
    

    
    /** @var resource */
    protected $taskQuery;
    
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    
    /**
     * Simply re-save tasks so that before_save hooks are executed
     * @return bool
     */
    public function execute()
    {
        $counter = 0;
        while($task = $this->getNextTask())
        {
            $counter++;
            //$this->log("TaskUrgencyIndicatorUpdater: " . $task->id);
            $task->save();
        }
    
        $this->log("TaskUrgencyIndicatorUpdater - Updated records: " . $counter);
        
        return true;
    }
    
    /**
     * Adam: AND assigned_user_id = '1eda4eda-43fb-df91-8975-56b1c1f35def'
     * . " AND status <> 'Completed'"
     *
     * @return bool|\Task
     */
    protected function getNextTask()
    {
        $task = false;
        
        if(!$this->taskQuery)
        {
            $sql = "SELECT id FROM tasks"
                . " WHERE deleted = 0"
                . " AND status <> 'Completed'"
            ;
    
            $this->taskQuery = $this->db->query($sql);
        }
        
        $res = $this->db->fetchByAssoc($this->taskQuery);
        
        if ($res && isset($res["id"]))
        {
            $task = new Task();
            $task->retrieve($res["id"]);
        }
        
        return $task;
    }
    
    /**
     * @param string $msg
     */
    protected function log($msg)
    {
        /** @var  \LoggerManager $logger*/
        $logger = $GLOBALS['log'];
        $logger->fatal($msg);
    }
}