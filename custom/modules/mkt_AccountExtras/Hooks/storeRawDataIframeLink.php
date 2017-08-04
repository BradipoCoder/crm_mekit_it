<?php
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

/**
 *
 *
 * Class storeRawDataIframeLink
 */
class storeRawDataIframeLink
{
    
    /**
     *
     * Disabled because this field has auto-create url configuration in module builder/studio
     *
     * @param \mkt_AccountExtras $bean
     * @param string             $event
     * @param array              $arguments
     */
    public static function execute($bean, $event, $arguments)
    {
        if (!$bean->id)
        {
            return;
        }
    
        //$iframeUrl = "http://crm2.mekit.it/index.php?module=mkt_AccountExtras&action=rawdata&record=" . $bean->id;
        //$bean->rawdata_c = $iframeUrl;
    }
}

