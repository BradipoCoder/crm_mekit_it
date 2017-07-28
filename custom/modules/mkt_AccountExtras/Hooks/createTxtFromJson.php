<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class createTxtFromJson
{
    
    /**
     *
     * @param \mkt_AccountExtras $bean
     * @param string $event
     * @param array $arguments
     */
    public static function execute($bean, $event, $arguments)
    {
          
        // CLIENT DATA
        if ($data = unserialize(base64_decode($bean->client_data)))
        {
            $txt = "";
            foreach($data as $k => $v)
            {
                $txt .= $k . ": " . $v . "\n";
            }
            
            $bean->client_data_txt = $txt;
        }
    
        // CURRENT MONTH
        if ($data = unserialize(base64_decode($bean->current_month)))
        {
            $bean->current_month_txt = self::createFixedLengthTxtTableFromData($data);
        }

    }
    
    /**
     * @todo: add array to map/rename columns
     * @todo: create first row from column names
     * @todo: modify other rows to contain values only
     * @todo: for each column get longest (optionally max truncate value)
     * @todo: create table by padding with &nbsp;
     *
     *
     * @param array $data
     *
     * @return string
     */
    private static function createFixedLengthTxtTableFromData($data)
    {
        $answer = "";
        
        foreach($data as $row)
        {
            foreach($row as $k => $v)
            {
                $answer .= $k . ": " . $v . " § ";
            }
            $answer .= "\n";
        }
        
        return $answer;
    }
}

