<?php
// created: 2017-11-30 09:13:51
$sugar_config = array (
  'SAML_X509Cert' => '',
  'SAML_loginurl' => '',
  'addAjaxBannedModules' => 
  array (
    0 => 'ResourceCalendar',
    1 => 'AOBH_BusinessHours',
    2 => 'mkt_nonconfint',
    3 => 'Spots',
    4 => 'mkt_Inspection_Washing',
    5 => 'mkt_AccountExtras',
    6 => 'mkt_Codici_Ateco',
    7 => 'AOR_Reports',
    8 => 'mkt_Assets',
    9 => 'mkt_Commercial_Zones',
    10 => 'mkt_Offers_Lines',
    11 => 'mkt_Worklogs',
    12 => 'Devel',
    13 => 'mkt_Offers',
    14 => 'jjwg_Address_Cache',
    15 => 'SugarChimpActivity',
    16 => 'jjwg_Areas',
    17 => 'jjwg_Markers',
    18 => 'jjwg_Maps',
    19 => 'AOW_WorkFlow',
    20 => 'AOS_Quotes',
    21 => 'AOS_Products',
    22 => 'AOS_Product_Categories',
    23 => 'AOS_PDF_Templates',
    24 => 'AOS_Invoices',
    25 => 'AOS_Contracts',
    26 => 'FP_events',
    27 => 'AOR_Scheduled_Reports',
    28 => 'FP_Event_Locations',
    29 => 'Reminders_Invitees',
    30 => 'Reminders',
    31 => 'AOK_KnowledgeBase',
    32 => 'AOK_Knowledge_Base_Categories',
    33 => 'AM_ProjectTemplates',
    34 => 'Bugs',
    35 => 'Cases',
    36 => 'ProspectLists',
    37 => 'Prospects',
    38 => 'Opportunities',
    39 => 'Accounts',
    40 => 'Contacts',
    41 => 'Leads',
    42 => 'Notes',
    43 => 'Tasks',
    44 => 'Meetings',
    45 => 'Calls',
    46 => 'Home',
    47 => 'SecurityGroups',
    48 => 'ModuleBuilder',
    49 => 'ModuleBuilder',
  ),
  'admin_access_control' => false,
  'admin_export_only' => false,
  'aod' => 
  array (
    'enable_aod' => false,
  ),
  'aop' => 
  array (
    'distribution_method' => 'roundRobin',
    'case_closure_email_template_id' => '',
    'joomla_account_creation_email_template_id' => '',
    'case_creation_email_template_id' => '',
    'contact_email_template_id' => '',
    'user_email_template_id' => '',
    'enable_aop' => false,
    'joomla_url' => '',
    'enable_portal' => false,
    'distribution_user_id' => '',
    'distribution_options' => 
    array (
      0 => 'all',
      1 => '',
      2 => '',
    ),
    'support_from_address' => '',
    'support_from_name' => '',
    'case_status_changes' => 'null',
  ),
  'aos' => 
  array (
    'version' => '5.3.3',
    'contracts' => 
    array (
      'renewalReminderPeriod' => '14',
    ),
    'lineItems' => 
    array (
      'totalTax' => false,
      'enableGroups' => true,
    ),
    'invoices' => 
    array (
      'initialNumber' => '1',
    ),
    'quotes' => 
    array (
      'initialNumber' => '1',
    ),
  ),
  'authenticationClass' => '',
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'show_completed_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 1,
    'allowed_cron_users' => 
    array (
      0 => 'crm.mekit.it',
    ),
  ),
  'currency' => '',
  'dashlet_auto_refresh_min' => '-1',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'm/d/Y',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => 'crm.mekit.it',
    'db_password' => '_0EgJo493Z$jYap[Dn4[0KGgf[iEBnu0',
    'db_name' => 'crm_mekit_it',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
    'collation' => 'utf8_general_ci',
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '￥',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '₨',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '₩',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '฿',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXN',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'EUR',
  'default_currency_name' => 'Euro',
  'default_currency_significant_digits' => 2,
  'default_currency_symbol' => '€',
  'default_date_format' => 'd/m/Y',
  'default_decimal_seperator' => ',',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'it_IT',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => 10,
  'default_module' => 'Home',
  'default_module_favicon' => false,
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => '.',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 493,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'SuiteP',
  'default_time_format' => 'H:i',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'no',
  'developerMode' => true,
  'disable_convert_lead' => false,
  'disable_export' => false,
  'disable_persistent_connections' => false,
  'disabled_themes' => ',',
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => false,
  'email_default_editor' => 'html',
  'email_xss' => 'YToxOntzOjY6InNjcmlwdCI7czo2OiJzY3JpcHQiO30=',
  'enable_action_menu' => false,
  'enable_line_editing_detail' => true,
  'enable_line_editing_list' => true,
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'hide_history_contacts_emails' => 
  array (
    'Cases' => false,
    'Accounts' => false,
    'Opportunities' => false,
  ),
  'hide_subpanels' => false,
  'history_max_viewed' => 50,
  'host_name' => 'crm.mekit.it',
  'http_referer' => 
  array (
    'actions' => 
    array (
      0 => 'index',
      1 => 'ListView',
      2 => 'DetailView',
      3 => 'EditView',
      4 => 'oauth',
      5 => 'authorize',
      6 => 'Authenticate',
      7 => 'Login',
      8 => 'SupportPortal',
      9 => 'usersquickcrm',
      10 => 'rawdata',
    ),
  ),
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100000,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => 1,
  'js_lang_version' => 16,
  'languages' => 
  array (
    'en_us' => 'English (US)',
    'it_IT' => 'Italiano',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'list_max_entries_per_page' => '150',
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => 'logs',
  'log_file' => 'suitecrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'fatal',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'suitecrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 10,
      'suffix' => '',
    ),
  ),
  'max_dashlets_homepage' => '15',
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'outfitters_licenses' => 
  array (
    'SugarChimp' => 'a4dd4272963552d7150f296154231cc8',
  ),
  'passwordsetting' => 
  array (
    'SystemGeneratedPasswordON' => '0',
    'generatepasswordtmpl' => '9246fc01-7852-cd0c-c67f-56b1c00d59ac',
    'lostpasswordtmpl' => '93d8d459-a789-007b-3166-56b1c01d005b',
    'forgotpasswordON' => '0',
    'linkexpiration' => true,
    'linkexpirationtime' => 24,
    'linkexpirationtype' => 60,
    'systexpiration' => 1,
    'systexpirationtime' => 7,
    'systexpirationtype' => '0',
    'systexpirationlogin' => '',
    'minpwdlength' => 6,
    'oneupper' => false,
    'onelower' => false,
    'onenumber' => false,
  ),
  'portal_view' => 'single_user',
  'quickcrm_max' => 10,
  'quickcrm_server_version' => '4.9.7',
  'quickcrm_trial' => false,
  'quickcrm_users' => '47568719-7091-9a00-37b0-57befd7accdb,1eda4eda-43fb-df91-8975-56b1c1f35def,b3d47a29-5c78-d735-a818-56af15794fe6,86e119dd-5ddb-44de-c069-531ddc6cfc78,1cbb3f4e-669d-fdcd-18dd-5326d07684cc,821f5a69-10b2-b430-e8c5-5575acdc323b,bbe923ec-d288-b3a3-5b0c-5370bd2b9e40,68e8a0f8-9b93-ca9d-ca04-5370bec42a09,c7c3a077-f70f-48dc-6bd7-57ada904525a,c2a7e157-2965-bc01-7cb6-587c7bd7343b',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 20000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'securitysuite_additive' => true,
  'securitysuite_filter_user_list' => true,
  'securitysuite_inbound_email' => false,
  'securitysuite_inherit_assigned' => true,
  'securitysuite_inherit_creator' => true,
  'securitysuite_inherit_parent' => true,
  'securitysuite_popup_select' => true,
  'securitysuite_strict_rights' => true,
  'securitysuite_user_popup' => false,
  'securitysuite_user_role_precedence' => true,
  'securitysuite_version' => '6.5.17',
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'site_url' => 'http://crm.mekit.it',
  'slow_query_time_msec' => '100',
  'stack_trace_errors' => false,
  'sugar_version' => '6.5.24',
  'sugarbeet' => false,
  'suitecrm_version' => '7.8.0',
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 15,
  'translation_string_prefix' => false,
  'unique_key' => '7efe505e0f38a82968e5e0f75982d862',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
    13 => 'phtml',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'vcal_time' => '2',
  'verify_client_ip' => false,
);