<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-08-10 13:43:23
$layout_defs["Accounts"]["subpanel_setup"]['mkt_inspection_washing_accounts'] = array(
    'order'             => 100,
    'module'            => 'mkt_Inspection_Washing',
    'subpanel_name'     => 'default',
    'sort_order'        => 'asc',
    'sort_by'           => 'id',
    'title_key'         => 'LBL_MKT_INSPECTION_WASHING_ACCOUNTS_FROM_MKT_INSPECTION_WASHING_TITLE',
    'get_subpanel_data' => 'mkt_inspection_washing_accounts',
    'top_buttons'       =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode'         => 'MultiSelect',
                ),
        ),
);


/**
 * Creating 10 subpanels for relationships between accounts and contacts
 */
use Mekit\SugarCrm\SecurityGroup AS MekitSecurityGroup;

$___ORDER = 30;
foreach (array('imp', 'mekit') as $___GROUP) {
    if(MekitSecurityGroup::isCurrentUserInGroup($___GROUP)) {
        foreach (array('adm', 'dir', 'acq', 'com', 'opr') as $___POSITION) {
            $___REL_NAME = 'accounts_contacts_' . $___GROUP . '_' . $___POSITION;
            $___LABEL = strtoupper('LBL_' . $___REL_NAME . '_CONTACTS');//LBL_ACCOUNTS_CONTACTS_IMP_ADM_CONTACTS
            $layout_defs["Accounts"]["subpanel_setup"][$___REL_NAME] = array(
                'order' => $___ORDER++,
                'module' => 'Contacts',
                'subpanel_name' => 'default',
                'sort_order' => 'asc',
                'sort_by' => 'id',
                'title_key' => $___LABEL,
                'get_subpanel_data' => $___REL_NAME,
                'top_buttons' => array(
                    0 => array('widget_class' => 'SubPanelTopButtonQuickCreate'),
                    1 => array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect')
                ),
            );
        }
    }
}


/**
 * Excluding default contacts sub-panel
 */
if(isset($layout_defs["Accounts"]["subpanel_setup"]["contacts"])) {
    unset($layout_defs["Accounts"]["subpanel_setup"]["contacts"]);
}


 // created: 2017-08-25 15:26:46
$layout_defs["Accounts"]["subpanel_setup"]['mkt_possibility_accounts'] = array (
  'order' => 100,
  'module' => 'mkt_possibility',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKT_POSSIBILITY_ACCOUNTS_FROM_MKT_POSSIBILITY_TITLE',
  'get_subpanel_data' => 'mkt_possibility_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_mekit_adm']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_mekit_adm';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_mekit_com']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_mekit_com';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_imp_com']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_imp_com';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_mekit_opr']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_mekit_opr';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_mekit_acq']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_mekit_acq';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_imp_opr']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_imp_opr';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_imp_adm']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_imp_adm';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_imp_acq']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_imp_acq';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['documents']['override_subpanel_name'] = 'Account_subpanel_documents';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['opportunities']['override_subpanel_name'] = 'Account_subpanel_opportunities';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_mekit_dir']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_mekit_dir';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_contacts_imp_dir']['override_subpanel_name'] = 'Account_subpanel_accounts_contacts_imp_dir';

?>