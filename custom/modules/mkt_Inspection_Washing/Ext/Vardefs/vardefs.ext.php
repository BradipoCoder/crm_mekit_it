<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-08-10 13:43:23
$dictionary["mkt_Inspection_Washing"]["fields"]["mkt_inspection_washing_accounts"] = array(
    'name'         => 'mkt_inspection_washing_accounts',
    'type'         => 'link',
    'relationship' => 'mkt_inspection_washing_accounts',
    'source'       => 'non-db',
    'module'       => 'Accounts',
    'bean_name'    => 'Account',
    'vname'        => 'LBL_MKT_INSPECTION_WASHING_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id_name'      => 'mkt_inspection_washing_accountsaccounts_ida',
);
$dictionary["mkt_Inspection_Washing"]["fields"]["mkt_inspection_washing_accounts_name"] = array(
    'name'    => 'mkt_inspection_washing_accounts_name',
    'type'    => 'relate',
    'source'  => 'non-db',
    'vname'   => 'LBL_MKT_INSPECTION_WASHING_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'save'    => true,
    'id_name' => 'mkt_inspection_washing_accountsaccounts_ida',
    'link'    => 'mkt_inspection_washing_accounts',
    'table'   => 'accounts',
    'module'  => 'Accounts',
    'rname'   => 'name',
);
$dictionary["mkt_Inspection_Washing"]["fields"]["mkt_inspection_washing_accountsaccounts_ida"] = array(
    'name'         => 'mkt_inspection_washing_accountsaccounts_ida',
    'type'         => 'link',
    'relationship' => 'mkt_inspection_washing_accounts',
    'source'       => 'non-db',
    'reportable'   => false,
    'side'         => 'right',
    'vname'        => 'LBL_MKT_INSPECTION_WASHING_ACCOUNTS_FROM_MKT_INSPECTION_WASHING_TITLE',
);


// created: 2016-08-10 20:59:04



// created: 2016-08-11 06:13:34
$dictionary['mkt_Inspection_Washing']['fields']['pump_rev_brill']['required'] = false;



// created: 2016-08-11 06:14:58
$dictionary['mkt_Inspection_Washing']['fields']['limestone_presence']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['limestone_presence']['required'] = false;



// created: 2016-08-11 06:01:25



// created: 2016-08-11 06:16:42



// created: 2016-08-11 06:14:09
$dictionary['mkt_Inspection_Washing']['fields']['glass_dry_time']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['glass_dry_time']['required'] = false;



// created: 2016-08-11 06:17:30
$dictionary['mkt_Inspection_Washing']['fields']['load_liters']['required'] = false;



// created: 2016-08-11 06:13:44
$dictionary['mkt_Inspection_Washing']['fields']['pump_rev_detergent']['required'] = false;



// created: 2016-08-10 21:14:19
$dictionary['mkt_Inspection_Washing']['fields']['detergent_leftover']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['detergent_leftover']['required'] = false;



// created: 2016-08-11 06:15:26
$dictionary['mkt_Inspection_Washing']['fields']['grease_presence']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['grease_presence']['required'] = false;



// created: 2016-08-11 06:18:26
$dictionary['mkt_Inspection_Washing']['fields']['ph_pool_titolazione']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['ph_pool_titolazione']['required'] = false;



// created: 2016-08-11 06:16:28
$dictionary['mkt_Inspection_Washing']['fields']['wash_cycle_liters']['required'] = false;



// created: 2016-08-11 06:14:19
$dictionary['mkt_Inspection_Washing']['fields']['plate_dry_time']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['plate_dry_time']['required'] = false;



// created: 2016-08-11 06:18:43
$dictionary['mkt_Inspection_Washing']['fields']['ph_pool_tornasole']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['ph_pool_tornasole']['required'] = false;



// created: 2016-08-10 21:18:24
$dictionary['mkt_Inspection_Washing']['fields']['water_hardness']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['water_hardness']['required'] = false;



// created: 2016-08-11 06:07:43
$dictionary['mkt_Inspection_Washing']['fields']['name']['inline_edit'] = true;
$dictionary['mkt_Inspection_Washing']['fields']['name']['duplicate_merge'] = 'disabled';
$dictionary['mkt_Inspection_Washing']['fields']['name']['duplicate_merge_dom_value'] = '0';
$dictionary['mkt_Inspection_Washing']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['mkt_Inspection_Washing']['fields']['name']['unified_search'] = false;
$dictionary['mkt_Inspection_Washing']['fields']['name']['default'] = 'Sopralluogo lavastoviglie';



// created: 2016-08-11 06:08:29



// created: 2016-08-11 06:14:33
$dictionary['mkt_Inspection_Washing']['fields']['starch_presence']['default'] = '';
$dictionary['mkt_Inspection_Washing']['fields']['starch_presence']['required'] = false;


?>