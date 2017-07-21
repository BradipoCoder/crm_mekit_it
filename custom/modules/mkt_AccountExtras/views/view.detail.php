<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mkt_AccountExtrasViewDetail extends ViewDetail {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * overwriting to use our custom template file
     */
    public function preDisplay(){
        parent::preDisplay();
        $this->dv->setup($this->module, $this->bean, $this->getMetaDataFile(), 'custom/modules/mkt_AccountExtras/include/DetailView/DetailView.tpl');
    }
    
}

