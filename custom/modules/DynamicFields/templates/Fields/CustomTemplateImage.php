<?php
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateImage.php');

class CustomTemplateImage extends TemplateImage
{
    /** @var string */
    public $type = 'image';
    
    /** @var int */
    protected $border;
    
    /** @var int */
    protected $width;
    
    /** @var int */
    protected $height;
    
    /** @var int */
    protected $responsive;
    
    /** @var array */
    protected $extended_options;
    
    public function __construct()
    {
        parent::__construct();
        $this->vardef_map['responsive'] = 'responsive';
        
        $this->extended_options = [
            'responsive' => 0,
            'test' => "OK",
        ];
    }
    
    /**
     * @return array
     */
    public function get_field_def()
    {
        $def = parent::get_field_def();
    
        $def['extended_options'] = $this->extended_options;
        if (isset($this->ext4))
        {
            $unserialized = &unserialize($this->ext4);
            if($unserialized)
            {
                $def['extended_options'] = $unserialized;
            }
        }
        
        return $def;
    }
    
    /**
     * @param array $values
     */
    public function set($values)
    {
        parent::set($values);
    
        if (!empty($this->ext4))
        {
            $unserialized = &unserialize($this->ext4);
            if($unserialized)
            {
                $this->extended_options = $this->ext4;
            }
        }
    }
    
    public function populateFromPost()
    {
        parent::populateFromPost();
        
        $this->extended_options = array();
        $this->extended_options["responsive"] = $this->responsive;
        
        $this->ext4 = serialize($this->extended_options);
    }
}

