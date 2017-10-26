<?php
/**
 * Created by Adam Jakab.
 * Date: 26/10/17
 * Time: 16.00
 */

if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

class daysToCloseHook
{
    const DB_DATE_FORMAT = "Y-m-d";
    
    const STATE_CLOSED = 2;
    /**
     *
     * @param \aCase     $bean
     * @param string    $event
     * @param array     $arguments
     */
    public static function execute($bean, $event, $arguments)
    {
        $programmedCloseDate = $bean->date_close_prg_c;//2017-08-07 06:00:00
        $date1 = \DateTime::createFromFormat(self::DB_DATE_FORMAT, $programmedCloseDate);
        
        $now = new \DateTime();
        $date2 = $now;
        if($bean->state == self::STATE_CLOSED)
        {
            if(is_null($bean->date_close_efct_c) || empty($bean->date_close_efct_c))
            {
                $bean->date_close_efct_c = $now->format(self::DB_DATE_FORMAT);
            }
            $confrontDate = $bean->date_close_efct_c;
            $date2 = \DateTime::createFromFormat(self::DB_DATE_FORMAT, $confrontDate);
        }
        
        
        $bean->days_to_close_c = self::getDateDifferenceInDays($date1, $date2);
    }
    
    /**
     * @param \DateTime $date1
     * @param \DateTime $date2
     *
     * @return integer
     */
    private static function getDateDifferenceInDays($date1, $date2)
    {
        $answer = 0;
        
        if(is_a($date1, "DateTime") && is_a($date2, "DateTime")){
            $timestamp_1 = $date1->format("U");
            $timestamp_2 = $date2->format("U");
            $difference_seconds = $timestamp_2 - $timestamp_1;
            $difference_days = floor($difference_seconds / 60 / 60 / 24);
            $answer = $difference_days;
        }

        return $answer;
    }
}