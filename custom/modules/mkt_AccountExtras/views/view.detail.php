<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mkt_AccountExtrasViewDetail extends ViewDetail {
    
    /** @var  \mkt_AccountExtras */
    public $bean;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * overwriting to use our custom template file
     */
    public function preDisplay()
    {
        parent::preDisplay();
    
        /**
         * the 'rawdata_c' IFrame field - this is not executed on QuickCRM so we need to save url in db
         * $iframeUrl = "http://[CRM_URL]/index.php?module=mkt_AccountExtras&action=rawdata&record=" . $this->bean->id;
         * $this->bean->rawdata_c = $iframeUrl;
         */
    
        /**
         * use this to set a custom tpl - will not work on mobile either:
         * $this->dv->setup($this->module, $this->bean, $this->getMetaDataFile(), 'custom/modules/mkt_AccountExtras/include/DetailView/DetailView.tpl');
         */
        
    }
    
    
    public function display()
    {
        parent::display();
    }
    
}

