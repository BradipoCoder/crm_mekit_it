<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
//require_once('modules/mkt_Checkin/mkt_Checkin.php');

/**
 * Class TaskOverviewDashlet
 */
class TaskOverviewDashlet extends DashletGeneric
{
    /**
     * TaskOverviewDashlet constructor.
     *
     * @param string     $id
     * @param array      $def
     */
    function __construct($id, $def = [])
    {
        global $current_user, $app_strings;
    
        $this->loadLanguage('TaskOverviewDashlet', 'modules/Tasks/Dashlets/');
        
        require('custom/modules/Tasks/Dashlets/TaskOverviewDashlet/TaskOverviewDashlet.data.php');
        /** @type array $dashletData */
        

        parent::__construct($id, $def);
        $this->isConfigurable = true;
        $this->showMyItemsOnly = true;
        $this->myItemsOnly = true;
        
    
        if (empty($def['title'])) {
            $this->title = translate('LBL_MY_TASKS_OVERVIEW', 'Tasks');
        }
        
        $this->searchFields = $dashletData['TaskOverviewDashlet']['searchFields'];
        $this->columns = $dashletData['TaskOverviewDashlet']['columns'];

        $this->seedBean = new Task();
    }
    
    /**
     * Do NOT process
     * @param array $lvsParams
     * @param null  $id
     */
    public function process($lvsParams = array(), $id = null)
    {
        //parent::process($lvsParams, $id);
    }
    
    public function display()
    {
        return $this->displayCounters();
    }
    
    protected function displayCounters()
    {
        global $app_strings, $mod_strings;
        $ss = new Sugar_Smarty();
        $ss->assign('LANG', $this->dashletStrings);
        $ss->assign('title', $this->title);
        $ss->assign('id', $this->id);
        $ss->assign('counters', $this->getCounters());
        
        return $ss->fetch('custom/modules/Tasks/Dashlets/TaskOverviewDashlet/TaskOverviewDashlet.tpl');
    }
    
    /**
     * @return array
     */
    protected function getCounters()
    {
        $counters = array(
            'counter_1' => $this->getCounterData(1),
            'counter_2' => $this->getCounterData(2),
            'counter_3' => $this->getCounterData(3),
        );
        
        return $counters;
    }
    
    /**
     * @param int $number
     *
     * @return array
     */
    protected function getCounterData($number)
    {
        $options = $this->loadOptions();
        
        $title = $options["title-" . $number]
            ? $options["title-" . $number]
            : $this->dashletStrings['LBL_COUNTER_' . $number . '_TITLE'];
    
        $filterid = $options["filterid-" . $number]
            ? $options["filterid-" . $number]
            : "";
    
        $answer = array(
            'title' => $title,
            'number' => $number,
            'class' => 'data-' . $number,
            'count' => rand(1,99),
            'filterid' => $filterid,
            'link' => $this->getLinkToFilteredTasks($filterid),
        );
        
        return $answer;
    }
    
    
    /**
     * @param string $filterId
     * @param string $filterName
     *
     *
     *  index.php?action=index&module=Tasks&saved_search_select=7d3a3fe5-0a45-423f-d815-598c3bf67ef3
     *      &saved_search_select_name=000%20-%20PROSSIMI%20DA%20FARE%20-%20IN%20CORSO&orderBy=URGENCY_INDICATOR_C
     *      &sortOrder=DESC&query=true&searchFormTab=advanced_search&showSSDIV=no
     *
     * @return string
     */
    protected function getLinkToFilteredTasks($filterId, $filterName = '')
    {
        $answer = 'index.php?';
        
        $params = array(
            'action' => 'index',
            'module' => 'Tasks',
            'saved_search_select' => $filterId,
            'saved_search_select_name' => $filterName,
            'orderBy' => 'URGENCY_INDICATOR_C',
            'sortOrder' => 'DESC',
            'query' => 'true',
            'searchFormTab' => 'advanced_search',
            'showSSDIV' => 'no',
        );
        
        foreach($params as $key => $val)
        {
            if($val)
            {
                $answer .= $key . '=' . $val . '&';
            }
        }
    
        $answer = rtrim($answer, "&");
        
        return $answer;
    }
    
    
    
    public function displayOptions() {
        global $app_strings, $mod_strings;
    
        $options = $this->loadOptions();
        
        $ss = new Sugar_Smarty();
        $ss->assign('LANG', $this->dashletStrings);
        $ss->assign('title', $this->title);
        $ss->assign('id', $this->id);
        $ss->assign('counters', $this->getCounters());
        
        return $ss->fetch('custom/modules/Tasks/Dashlets/TaskOverviewDashlet/TaskOverviewDashletOptions.tpl');
    }

    
    public function saveOptions($req) {
        global $sugar_config, $timedate, $current_user, $theme;
        $options = array();
        $options['title'] = $req['title'];
        
        $fields = ["title", "filterid"];
        for($i=1; $i <= 3; $i++)
        {
            foreach($fields as $field)
            {
                $fieldName = $field . "-" . $i;
                if(isset($req[$fieldName]))
                {
                    $options[$fieldName] = $req[$fieldName];
                }
            }
        }
        
        return $options;
    }
    
}