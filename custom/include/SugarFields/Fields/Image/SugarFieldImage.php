<?php
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

require_once('include/SugarFields/Fields/Image/SugarFieldImage.php');

/**
 * Class CustomSugarFieldImage
 */
class CustomSugarFieldImage extends SugarFieldImage
{
    
    /**
     * @param array $parentFieldArray
     * @param array $vardef
     * @param array $displayParams
     * @param mixed $tabindex
     *
     * @return string
     */
    public function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
        $this->fillInOptions($vardef, $displayParams);
        $output = parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
        
        //print_r($vardef);
        
        //print_r($displayParams);
        
        return $output;
    }
    
    /**
     *
     * {* By setting an image field width and height to 1 (cannot do 0 in studio) you will have a reponsive display *}
     *
     * @param array $vardef
     * @param array $displayParams
     */
    private function fillInOptions(&$vardef, &$displayParams)
    {
        $is_responsive = true;
        $styles = array();
        $classes = array();
    
        $image_width = (isset($vardef["width"]) && intval($vardef["width"]) > 0 ? intval($vardef["width"]) : 0) . 'px';
        $image_height = (isset($vardef["height"]) && intval($vardef["height"]) > 0 ? intval($vardef["height"]) : 0) . 'px';
        
        if ($is_responsive)
        {
            $image_width = '100%';
            $image_height = '100%';
            $classes[] = "img-responsive";
            $styles[] = "border: 1px solid #00ff00;";
        } else {
            
        }
        
        if($image_width != '0px')
        {
            $styles[] = "max-width: " . $image_width . ";";
        }
    
        if($image_height != '0px')
        {
            $styles[] = "max-height: " . $image_height . ";";
        }
        
        

        
        $displayParams["is_responsive"] = $is_responsive;
        $displayParams["img_style"] = implode(" ", $styles);
        $displayParams["img_class"] = implode(" ", $classes);
        
    }
}

