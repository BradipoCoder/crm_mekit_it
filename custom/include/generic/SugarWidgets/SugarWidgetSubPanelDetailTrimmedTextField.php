<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 *
 * Notes:
 * to make this work I needed to make sure of the following things:
 * 1) in metadata field definition I had to use a key that does NOT correspond to an existing field
 * 2) through 'varname' key I had to define the column that points to the field I want to display
 * 3) make sure the column defined in 'varname' key is defined in the layout either to be displayed or like this:
 *      'description' => array(
 *           'usage' => 'query_only',
 *       ),
 *
 *
 * example:
 *  'trimmed_description' => array(
 *   'vname'        => 'LBL_DESCRIPTION',
 *   'varname'       => 'description',
 *   'widget_class' => 'SubPanelDetailTrimmedTextField',
 *   'strip_char_length' => 64,
 *   'sortable'     => false,
 *   'width'        => '50%',
 *   ),
 *
 * Class SugarWidgetSubPanelDetailTrimmedTextField
 */
class SugarWidgetSubPanelDetailTrimmedTextField extends SugarWidgetField
{
        
    /**
     * @param array $layout_def
     *
     * @return string
     */
    function displayList($layout_def)
    {
        global $focus;
        $answer =  [];
        
        //print_r($layout_def);
    
        $strip_char_length = isset($layout_def['strip_char_length']) ? intval($layout_def['strip_char_length']) : 32;
        $strip_char_length = $strip_char_length ? $strip_char_length : 32;
        
        $key = isset($layout_def['varname']) ? strtoupper($layout_def['varname']) : false;
        $value = isset($layout_def['fields'][$key]) ? $layout_def['fields'][$key] : "";
        $save_value = strip_tags(preg_replace('#["]#i', '', $value));
        $trimmed_value = substr($value, 0 , $strip_char_length);
        
        $answer[] = '<button type="button" class="btn btn-xs" title="'.$save_value.'">';
        $answer[] = '<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>';
        $answer[] = '</button>';
    
        $answer[] = $trimmed_value;
        
        $answer = implode("", $answer);
        return $answer;
    }
}
