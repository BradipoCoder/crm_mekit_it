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
    
//        $deadlines = $this->bean->deadlines;
//        $deadlines = '<code>' . '@@@-' . $deadlines . '-@@@' . '</code>';
//        $this->bean->deadlines = $deadlines;
        
        
        $this->dv->setup($this->module, $this->bean, $this->getMetaDataFile(), 'custom/modules/mkt_AccountExtras/include/DetailView/DetailView.tpl');
    }
    
    
    public function display()
    {
        parent::display();
        /*
        if(empty($this->bean->id)){
            sugar_die($GLOBALS['app_strings']['ERROR_NO_RECORD']);
        }
        $this->dv->process();
        print $this->dv->display();
        */
    }
    
}

