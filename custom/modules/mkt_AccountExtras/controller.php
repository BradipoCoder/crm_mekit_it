<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/Controller/SugarController.php');



class mkt_AccountExtrasController extends SugarController {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * http://crm2.mekit.it/index.php?module=mkt_AccountExtras&action=rawdata&record=a00dd761-611a-6a67-f141-597b0b76c1a6
     */
    function action_rawdata() {
        $this->view = "rawdata";
    }
}