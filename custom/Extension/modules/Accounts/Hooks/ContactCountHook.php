<?php

if (!defined('sugarEntry') || !sugarEntry)
  {
  die('Not A Valid Entry Point');
}
/**
 * Created by Adam Jakab.
 * Date: 25/08/17
 * Time: 10.54
 */
class ContactCountHook
{
    /**
     * @var array
     */
    private static $messages = [];
    
    /**
     *
     * @param \Account $account
     * @param string   $event
     * @param array    $arguments
     */
    public static function execute(\Account $account, $event, $arguments)
    {
        self::$messages = [];
        
        $acqMailCount = self::getAcqMailCount($account);
        
        //this is a YES(1) / NO(0) dropdown field
        $account->imp_has_acq_contact_mail_c = $acqMailCount >= 1 ? 1 : 0;
        
        /*
        if ($account->id == "33b153e5-4f6f-8e39-311c-56c45792f905")
        {
            print("<br />ACQ MAIL COUNT: " . $account->imp_has_acq_contact_mail_c);
            die("\n<br />-");
        }*/
        
    }

    
    /**
     * Count Emails for ACQ contacts
     *
     * @param \Account $account
     *
     * @return int
     */
    private static function getAcqMailCount(\Account $account)
    {
        /** @var \DBManager $db */
        global $db;
        
        $answer = 0;
        
        $sql = "
        SELECT COUNT(*) AS cnt
        FROM email_addr_bean_rel AS r
        INNER JOIN email_addresses AS m ON m.id = r.email_address_id AND m.deleted = 0 AND m.invalid_email = 0
        INNER JOIN contacts AS c ON c.id = r.bean_id AND r.bean_module = 'Contacts' AND r.deleted = 0
        INNER JOIN accounts_contacts_imp_acq AS acq ON acq.contact_id = c.id AND c.deleted = 0 AND acq.deleted = 0
        WHERE acq.account_id = '" . $account->id . "'
        ";
        
        $query = $db->query($sql);
        $res = $db->fetchByAssoc($query);
        
        if ($res && isset($res["cnt"]))
        {
            $answer = $res["cnt"];
        }
        
        return $answer;
    }

}


