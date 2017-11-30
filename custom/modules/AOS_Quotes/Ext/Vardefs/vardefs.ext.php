<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-11-30 14:36:24
$dictionary['AOS_Quotes']['fields']['workhours_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['workhours_c']['options']='numeric_range_search_dom';
$dictionary['AOS_Quotes']['fields']['workhours_c']['labelValue']='Manodopera(ore)';
$dictionary['AOS_Quotes']['fields']['workhours_c']['enable_range_search']='1';

 

 // created: 2016-03-01 10:50:45
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-11-30 15:02:35
$dictionary['AOS_Quotes']['fields']['ras_status_hint_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['ras_status_hint_c']['labelValue']='Suggerimento stato RAS';

 

 // created: 2016-03-03 12:02:39
$dictionary['AOS_Quotes']['fields']['term']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['term']['merge_filter']='disabled';

 

 // created: 2017-11-30 14:44:48
$dictionary['AOS_Quotes']['fields']['machine_part_number_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['machine_part_number_c']['labelValue']='Matricola macchinario';

 

 // created: 2017-11-30 14:45:12
$dictionary['AOS_Quotes']['fields']['machine_name_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['machine_name_c']['labelValue']='Nome macchinario';

 

 // created: 2016-02-26 11:47:58
$dictionary['AOS_Quotes']['fields']['metodo_database_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['metodo_database_c']['labelValue']='Azienda Metodo';

 

 // created: 2016-03-01 10:48:25
$dictionary['AOS_Quotes']['fields']['discount_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['discount_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount']['enable_range_search']=false;

 

 // created: 2016-03-01 10:50:23
$dictionary['AOS_Quotes']['fields']['tax_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['tax_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount']['enable_range_search']=false;

 

 // created: 2016-02-29 14:59:31
$dictionary['AOS_Quotes']['fields']['document_number_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['document_number_c']['labelValue']='Numero Documento';

 

 // created: 2016-03-03 17:59:38
$dictionary['AOS_Quotes']['fields']['expiration']['display_default']='';
$dictionary['AOS_Quotes']['fields']['expiration']['required']=false;
$dictionary['AOS_Quotes']['fields']['expiration']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['expiration']['merge_filter']='disabled';

 

// created: 2017-11-30 14:19:48
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1"] = array (
  'name' => 'cases_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'cases_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
  'id_name' => 'cases_aos_quotes_1cases_ida',
);
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1_name"] = array (
  'name' => 'cases_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_aos_quotes_1cases_ida',
  'link' => 'cases_aos_quotes_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["cases_aos_quotes_1cases_ida"] = array (
  'name' => 'cases_aos_quotes_1cases_ida',
  'type' => 'link',
  'relationship' => 'cases_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CASES_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


 // created: 2016-03-01 09:08:10
$dictionary['AOS_Quotes']['fields']['document_year_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['document_year_c']['options']='numeric_range_search_dom';
$dictionary['AOS_Quotes']['fields']['document_year_c']['labelValue']='Anno Documento';
$dictionary['AOS_Quotes']['fields']['document_year_c']['enable_range_search']='1';

 

 // created: 2017-11-30 12:45:39
$dictionary['AOS_Quotes']['fields']['data_doc_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['data_doc_c']['options']='date_range_search_dom';
$dictionary['AOS_Quotes']['fields']['data_doc_c']['labelValue']='Data Documento';
$dictionary['AOS_Quotes']['fields']['data_doc_c']['enable_range_search']='1';

 

 // created: 2016-03-01 10:51:33
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-03-03 15:44:01
$dictionary['AOS_Quotes']['fields']['discount_percent_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['discount_percent_c']['options']='numeric_range_search_dom';
$dictionary['AOS_Quotes']['fields']['discount_percent_c']['labelValue']='Sconto(%)';
$dictionary['AOS_Quotes']['fields']['discount_percent_c']['enable_range_search']='1';

 

 // created: 2016-03-03 17:27:02
$dictionary['AOS_Quotes']['fields']['total_amt']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['total_amt']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['total_amt']['enable_range_search']=false;

 

 // created: 2016-02-25 15:30:08
$dictionary['AOS_Quotes']['fields']['opportunity']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['opportunity']['merge_filter']='disabled';

 

 // created: 2016-03-01 10:49:50
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount']['enable_range_search']=false;

 

 // created: 2017-11-30 14:41:56
$dictionary['AOS_Quotes']['fields']['notes_internal_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['notes_internal_c']['labelValue']='Note interne';

 

 // created: 2016-03-01 10:49:31
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['shipping_amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-03-01 10:48:42
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['discount_amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-11-30 14:46:23
$dictionary['AOS_Quotes']['fields']['machine_workhours_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['machine_workhours_c']['options']='numeric_range_search_dom';
$dictionary['AOS_Quotes']['fields']['machine_workhours_c']['labelValue']='Ore lavoro Macchinario';
$dictionary['AOS_Quotes']['fields']['machine_workhours_c']['enable_range_search']='1';

 

 // created: 2016-03-01 09:07:05
$dictionary['AOS_Quotes']['fields']['metodo_id_head_c']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['metodo_id_head_c']['labelValue']='Metodo ID Consecutivo';

 

 // created: 2016-03-01 10:50:06
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['subtotal_amount_usdollar']['enable_range_search']=false;

 

 // created: 2017-11-30 09:24:36
$dictionary['AOS_Quotes']['fields']['name']['default']='Foglio lavoro';
$dictionary['AOS_Quotes']['fields']['name']['inline_edit']='';
$dictionary['AOS_Quotes']['fields']['name']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['name']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['name']['unified_search']=false;

 

 // created: 2016-03-01 10:49:12
$dictionary['AOS_Quotes']['fields']['shipping_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['shipping_amount']['merge_filter']='disabled';

 

 // created: 2016-02-26 13:23:23
$dictionary['AOS_Quotes']['fields']['imp_agent_code_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['imp_agent_code_c']['labelValue']='Agente IMP';

 

 // created: 2016-02-26 13:24:49
$dictionary['AOS_Quotes']['fields']['mekit_agent_code_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['mekit_agent_code_c']['labelValue']='Agente Mekit';

 

 // created: 2016-03-01 10:51:19
$dictionary['AOS_Quotes']['fields']['total_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['total_amount']['merge_filter']='disabled';

 

 // created: 2017-11-30 14:58:20
$dictionary['AOS_Quotes']['fields']['stage']['required']=true;
$dictionary['AOS_Quotes']['fields']['stage']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['stage']['merge_filter']='disabled';

 

 // created: 2017-11-30 09:38:13
$dictionary['AOS_Quotes']['fields']['quote_type']['type']='enum';
$dictionary['AOS_Quotes']['fields']['quote_type']['options']='aos_quote_type';
$dictionary['AOS_Quotes']['fields']['quote_type']['len']='100';
$dictionary['AOS_Quotes']['fields']['quote_type']['required']=1;
$dictionary['AOS_Quotes']['fields']['quote_type']['name']='quote_type';
$dictionary['AOS_Quotes']['fields']['quote_type']['vname']='LBL_QUOTE_TYPE';
$dictionary['AOS_Quotes']['fields']['quote_type']['massupdate']=0;
$dictionary['AOS_Quotes']['fields']['quote_type']['comments']='';
$dictionary['AOS_Quotes']['fields']['quote_type']['help']='';
$dictionary['AOS_Quotes']['fields']['quote_type']['importable']='true';
$dictionary['AOS_Quotes']['fields']['quote_type']['duplicate_merge']='disabled';
$dictionary['AOS_Quotes']['fields']['quote_type']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Quotes']['fields']['quote_type']['audited']='1';
$dictionary['AOS_Quotes']['fields']['quote_type']['reportable']='true';
$dictionary['AOS_Quotes']['fields']['quote_type']['inline_edit']=false;
$dictionary['AOS_Quotes']['fields']['quote_type']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['quote_type']['studio']='visible';
$dictionary['AOS_Quotes']['fields']['quote_type']['default']='fol';

 

 // created: 2016-03-03 12:02:47
$dictionary['AOS_Quotes']['fields']['dsc_payment_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['dsc_payment_c']['labelValue']='Condizioni di Pagamento';

 
?>