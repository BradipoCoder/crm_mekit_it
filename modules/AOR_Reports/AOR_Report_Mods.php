<?php
/**
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2016 SalesAgility Ltd.
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

/**
 * Created by Adam Jakab.
 * Date: 20/09/16
 * Time: 11.09
 *
 * Make AOR_Report extend this class:
 * require_once("modules/AOR_Reports/AOR_Report_Mods.php");
 * class AOR_Report extends AOR_Report_Mods {
 *
 *
 * add @530
 * //after: $report_sql = $this->build_report_query($_group_value, $extra);
 * $this->setReportSql($report_sql);
 *
 * add: @544
 * //after: $result = $this->db->query($count_query);
 * if ($this->db->lastDbError() !== FALSE){$this->setReportError($this->db->lastDbError());}
 *
 */

/**
 * Class AOR_Report_Mods
 *
 * @package AOR_Reports
 */
class AOR_Report_Mods extends Basic
{
    
    /** @var  string */
    protected $report_sql;
    
    /** @var  string */
    protected $report_error;
    
    /**
     * @return string
     */
    public function getReportSql()
    {
        return $this->report_sql;
    }
    
    /**
     * @param string $report_sql
     */
    protected function setReportSql($report_sql)
    {
        $this->report_sql = $report_sql;
    }
    
    /**
     * @return string
     */
    public function getReportError()
    {
        return $this->report_error;
    }
    
    /**
     * @param string $report_error
     */
    protected function setReportError($report_error)
    {
        $this->report_error = $report_error;
    }
    
}