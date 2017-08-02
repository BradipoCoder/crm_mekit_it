<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/SugarView.php');


class mkt_AccountExtrasViewRawdata extends SugarView {
    
    /** @var  \mkt_AccountExtras */
    public $bean;
    
    public function __construct()
    {
        parent::__construct();
        $this->options = array_merge($this->options, [
            'show_header' => false,
            'show_title' => false,
            'show_subpanels' => false,
            'show_search' => false,
            'show_footer' => false,
            'show_javascript' => false,
            'view_print' => false,
        ]);
        
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
        
        /*
        $this->dv->setup($this->module, $this->bean, $this->getMetaDataFile(), 'custom/modules/mkt_AccountExtras/include/DetailView/DetailView.tpl');
        */
    }
    
    
    public function display()
    {
        if(empty($this->bean->id)){
            throw new \Exception("No bean id!");
        }
    
        $ss = new Sugar_Smarty();
        $ss->assign("testvar1", $this->bean->deadlines_txt);
        
        /*
            $this->dv->process();
            print $this->dv->display();
        */
        
        $themeObject = SugarThemeRegistry::current();
        $tplPath = 'custom/modules/mkt_AccountExtras/tpls/rawdata.tpl';
        $ss->display($tplPath);
    }
    
}

