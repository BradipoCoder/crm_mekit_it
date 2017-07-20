<?php
// created: 2017-06-05 07:56:38
$searchFields['Accounts'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_type' => 
  array (
    'query_type' => 'default',
    'options' => 'account_type_dom',
    'template_var' => 'ACCOUNT_TYPE_OPTIONS',
  ),
  'industry' => 
  array (
    'query_type' => 'default',
    'options' => 'industry_dom',
    'template_var' => 'INDUSTRY_OPTIONS',
  ),
  'annual_revenue' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_street',
      1 => 'shipping_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_city',
      1 => 'shipping_address_city',
    ),
    'vname' => 'LBL_CITY',
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_state',
      1 => 'shipping_address_state',
    ),
    'vname' => 'LBL_STATE',
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_postalcode',
      1 => 'shipping_address_postalcode',
    ),
    'vname' => 'LBL_POSTAL_CODE',
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_country',
      1 => 'shipping_address_country',
    ),
    'vname' => 'LBL_COUNTRY',
  ),
  'rating' => 
  array (
    'query_type' => 'default',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_office',
    ),
    'vname' => 'LBL_ANY_PHONE',
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ANY_EMAIL',
  ),
  'website' => 
  array (
    'query_type' => 'default',
  ),
  'ownership' => 
  array (
    'query_type' => 'default',
  ),
  'employees' => 
  array (
    'query_type' => 'default',
  ),
  'sic_code' => 
  array (
    'query_type' => 'default',
  ),
  'ticker_symbol' => 
  array (
    'query_type' => 'default',
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = "Accounts"
			                        and favorites.assigned_user_id = "1") OR NOT ({0}',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'billing_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'range_ft_periodo_attuale' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_ft_periodo_attuale' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_ft_periodo_attuale' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_ft_periodo_attuale_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_ft_periodo_attuale_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_ft_periodo_attuale_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'shipping_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'date_entered' => 
  array (
    'query_type' => 'default',
  ),
  'description' => 
  array (
    'query_type' => 'default',
  ),
  'email1' => 
  array (
    'query_type' => 'default',
  ),
  'phone_fax' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_street' => 
  array (
    'query_type' => 'default',
  ),
  'phone_office' => 
  array (
    'query_type' => 'default',
  ),
  'phone_alternate' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_street' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'range_imp_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_imp_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_imp_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_imp_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_imp_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_imp_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_mkt_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_mkt_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_mkt_acc_sleep_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_mkt_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_mkt_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_mkt_acc_start_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_punteggio_rating' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_punteggio_rating' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_punteggio_rating' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_punteggio_rating_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_punteggio_rating_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_punteggio_rating_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_metodo_last_update_time_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_metodo_last_update_time_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_metodo_last_update_time_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_imp_revenue_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_revenue_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_revenue_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_discount_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_discount_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_discount_2016' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_revenue_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_revenue_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_revenue_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_revenue_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_revenue_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_revenue_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_discount_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_discount_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_discount_2015' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_discount_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_discount_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_discount_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_revenue_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_revenue_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_revenue_2015_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_imp_discount_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_imp_discount_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_imp_discount_2016_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
);