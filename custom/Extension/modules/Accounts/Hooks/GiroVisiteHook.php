<?php
/**
 * Created by Adam Jakab.
 * Date: 28/07/17
 * Time: 15.40
 *
 * @see: http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Module_Framework/Logic_Hooks/Introduction/
 * @see: http://support.sugarcrm.com/Documentation/Sugar_Developer/Sugar_Developer_Guide_6.5/Module_Framework/Logic_Hooks/Module_Hooks/
 *
 *
 *
 */
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

class GiroVisiteHook
{
    private static $messages = [];

    /** @var array - check these number of days for each profit level */
    protected static $profitLevels = [
        'A' => 90,
        'B' => 180,
        'C' => 365,
    ];

    protected static $agentCodes = [];

    /**
     *
     * @param \Account $account
     * @param string   $event
     * @param array    $arguments
     */
    public static function execute(\Account $account, $event, $arguments)
    {

        //die("GV-KO");

        self::$messages = [];

        $account->gv_cont_1_c = self::getCount1($account);
        $account->gv_cont_2_c = self::getCount2($account);
        $account->gv_cont_3_c = self::getCount3($account);
        $account->gv_cont_tot_c = $account->gv_cont_1_c + $account->gv_cont_2_c + $account->gv_cont_3_c;

        $account->gv_cont_meetings_c = self::getCountOverallMeetings($account);

        /*
        if ($account->id == "b9bef524-1784-ed42-3266-5a294740cca9")
        {
            print("<br />CNT-1: " . $account->gv_cont_1_c);
            print("<br />CNT-2: " . $account->gv_cont_2_c);
            print("<br />CNT-3: " . $account->gv_cont_3_c);
            print("<br />CNT-X: " . $account->gv_cont_meetings_c);
            die("\n<br />-");
        }
        */
    }

    /**
     * Count Meetings - ever
     *
     * @param \Account $account
     *
     * @return int
     */
    private static function getCountOverallMeetings(\Account $account)
    {
        /** @var \DBManager $db */
        global $db;

        $answer = 0;

        /*
        if (!in_array($account->imp_profitability_c, array_keys(self::$profitLevels)))
        {
            return $answer;
        }
        */

        $agentCode = $account->imp_agent_code_c;
        $agentId = self::getUserIdForAgentCode($agentCode);

        if (!$agentId)
        {
            return $answer;
        }

        $sql = "SELECT COUNT(*) AS cnt FROM meetings AS m"
            . " WHERE m.deleted = 0"
            . " AND m.parent_type = 'Accounts'"
            . " AND m.parent_id = '" . $account->id . "'"
            . " AND m.assigned_user_id = '" . $agentId . "'"
        ;

        $query = $db->query($sql);
        $res = $db->fetchByAssoc($query);

        if ($res && isset($res["cnt"]))
        {
            $answer = $res["cnt"];
        }

        return $answer;
    }

    /**
     * Count Opportunities
     *
     * @param \Account $account
     *
     * @return int
     */
    private static function getCount3(\Account $account)
    {
        /** @var \DBManager $db */
        global $db;

        $answer = 0;

        /*
        if (!in_array($account->imp_profitability_c, array_keys(self::$profitLevels)))
        {
            return $answer;
        }
        */

        $daysToCheck = self::$profitLevels[$account->imp_profitability_c];
        $agentCode = $account->imp_agent_code_c;
        $agentId = self::getUserIdForAgentCode($agentCode);

        if (!$agentId)
        {
            return $answer;
        }

        $now = new \DateTime();
        $someDaysAgo = date('Y-m-d', strtotime('-' . $daysToCheck . ' days', strtotime($now->format("Y-m-d"))));

        //print("user: " . $agentId);
        //print("date: " . $someDaysAgo);

        $sql = "SELECT COUNT(*) AS cnt FROM opportunities AS o"//COUNT(*) AS cnt
            . " INNER JOIN opportunities_cstm AS c ON o.id = c.id_c"
            . " INNER JOIN accounts_opportunities AS ao ON o.id = ao.opportunity_id"
            . " WHERE o.deleted = 0"
            . " AND ao.account_id = '" . $account->id . "'"
            . " AND o.assigned_user_id = '" . $agentId . "'"
            . " AND ("
            . " c.statovendita_c IN (1, 2, 3)"
            . " OR ("
            . " c.statovendita_c NOT IN (1, 2, 3)"
            . " AND o.date_closed >= '" . $someDaysAgo . "'"
            . " )"
            . " )"
        ;

        $query = $db->query($sql);
        $res = $db->fetchByAssoc($query);

        if ($res && isset($res["cnt"]))
        {
            $answer = $res["cnt"];
        }

        return $answer;
    }

    /**
     * Count Meetings
     *
     * @param \Account $account
     *
     * @return int
     */
    private static function getCount2(\Account $account)
    {
        /** @var \DBManager $db */
        global $db;

        $answer = 0;

        /*
        if (!in_array($account->imp_profitability_c, array_keys(self::$profitLevels)))
        {
            return $answer;
        }
        */

        $daysToCheck = self::$profitLevels[$account->imp_profitability_c];
        $agentCode = $account->imp_agent_code_c;
        $agentId = self::getUserIdForAgentCode($agentCode);

        if (!$agentId)
        {
            return $answer;
        }

        $now = new \DateTime();
        $someDaysAgo = date('Y-m-d', strtotime('-' . $daysToCheck . ' days', strtotime($now->format("Y-m-d"))));

        $sql = "SELECT COUNT(*) AS cnt FROM meetings AS m"
            . " WHERE m.deleted = 0"
            . " AND m.parent_type = 'Accounts'"
            . " AND m.parent_id = '" . $account->id . "'"
            . " AND m.assigned_user_id = '" . $agentId . "'"
            . " AND m.date_start >= '" . $someDaysAgo . "'"
        ;

        $query = $db->query($sql);
        $res = $db->fetchByAssoc($query);

        if ($res && isset($res["cnt"]))
        {
            $answer = $res["cnt"];
        }

        return $answer;
    }

    /**
     * Count Calls
     *
     * @param \Account $account
     *
     * @return int
     */
    private static function getCount1(\Account $account)
    {
        /** @var \DBManager $db */
        global $db;

        $answer = 0;

        /*
        if (!in_array($account->imp_profitability_c, array_keys(self::$profitLevels)))
        {
            return $answer;
        }
        */

        $daysToCheck = self::$profitLevels[$account->imp_profitability_c];
        $agentCode = $account->imp_agent_code_c;
        $agentId = self::getUserIdForAgentCode($agentCode);

        if (!$agentId)
        {
            return $answer;
        }

        $now = new \DateTime();
        $someDaysAgo = date('Y-m-d', strtotime('-' . $daysToCheck . ' days', strtotime($now->format("Y-m-d"))));

        $sql = "SELECT COUNT(*) AS cnt FROM calls AS c"
            . " WHERE c.deleted = 0"
            . " AND c.parent_type = 'Accounts'"
            . " AND c.parent_id = '" . $account->id . "'"
            . " AND c.assigned_user_id = '" . $agentId . "'"
            . " AND c.date_start >= '" . $someDaysAgo . "'"
        ;

        $query = $db->query($sql);
        $res = $db->fetchByAssoc($query);

        if ($res && isset($res["cnt"]))
        {
            $answer = $res["cnt"];
        }

        return $answer;
    }

    /**
     * @param string $agentCode
     *
     * @return bool|string
     */
    protected static function getUserIdForAgentCode($agentCode)
    {
        /** @var \DBManager $db */
        global $db;

        $answer = isset(self::$agentCodes[$agentCode]) ? self::$agentCodes[$agentCode] : false;

        if (!$answer)
        {
            $sql = "SELECT u.id FROM users AS u"
                . " INNER JOIN users_cstm AS c ON u.id = c.id_c"
                . " WHERE u.deleted = 0"
                . " AND c.imp_agent_code_c = '" . $agentCode . "'";

            $query = $db->query($sql);

            $res = $db->fetchByAssoc($query);

            if ($res && isset($res["id"]))
            {
                $answer = $res["id"];
                self::$agentCodes[$agentCode] = $answer;
            }
        }

        //print("<br />AGENT-IDS: " . print_r(self::$agentCodes, true));

        return $answer;
    }
}


