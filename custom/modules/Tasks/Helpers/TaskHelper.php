<?php

/**
 * Created by Adam Jakab.
 * Date: 06/09/17
 * Time: 12.40
 */
class TaskHelper
{
    /**
     * @param array $status
     * @param array $orderBy
     * @param int   $max
     *
     * @return array|int
     */
    public static function getMyTasksByStatus($status = array(), $orderBy = ['c.urgency_indicator_c', 'DESC'], $max = 1)
    {
        $answer = [];
        
        /** @var \DBManager $db */
        global $db;
        
        /** \User $current_user */
        global $current_user;
        
        $sql = 'SELECT *'
            . ' FROM tasks AS t'
            . ' INNER JOIN tasks_cstm AS c ON t.id = c.id_c'
            . ' WHERE t.deleted = 0'
            . ' AND t.assigned_user_id = \'' . $current_user->id . '\''
            . ' AND t.status IN (\''.implode('\', \'', $status).'\')'
            . ' ORDER BY ' . implode(" ", $orderBy)
            . ($max ? ' LIMIT ' . $max : '')
        ;
        $result = $db->query($sql);
        
        while ($data= $db->fetchByAssoc($result))
        {
            $answer[] = $data;
        }
        
        return $answer;
    }
    
    /**
     * @param array $status
     *
     * @return int
     */
    public static function getMyTasksCountByStatus($status = array())
    {
        $answer = 0;
        
        /** @var \DBManager $db */
        global $db;
    
        /** \User $current_user */
        global $current_user;
        
        $sql = 'SELECT COUNT(*) AS COUNT'
            . ' FROM tasks AS t'
            . ' WHERE t.deleted = 0'
            . ' AND t.assigned_user_id = \'' . $current_user->id . '\''
            . ' AND t.status IN (\''.implode('\', \'', $status).'\')'
        ;
        $result = $db->query($sql);
        $data= $db->fetchByAssoc($result);
        if(isset($data["COUNT"])) {
            $answer = (int)$data["COUNT"];
        }
        
        return $answer;
    }
    
}