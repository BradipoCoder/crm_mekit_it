<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-02-25 16:59:05
$dictionary['Opportunity']['fields']['identificativo_c']['inline_edit']='';
$dictionary['Opportunity']['fields']['identificativo_c']['labelValue']='Identificativo Opportunità';

 

 // created: 2016-02-16 09:02:18
$dictionary['Opportunity']['fields']['dataofc_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['dataofc_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['dataofc_c']['labelValue']='Data OFC';
$dictionary['Opportunity']['fields']['dataofc_c']['enable_range_search']='1';

 

 // created: 2016-02-03 08:55:14
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2016-03-01 10:36:31
$dictionary['Opportunity']['fields']['fase_stato_vendita_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['fase_stato_vendita_c']['labelValue']='Motivazione Perso/Morto';

 

 // created: 2016-02-16 12:04:18
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['inline_edit']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['massupdate']='1';
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';

 

 // created: 2016-02-29 13:44:30
$dictionary['Opportunity']['fields']['promemoria_ricontattare_il_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['promemoria_ricontattare_il_c']['labelValue']='Promemoria ricontattare il';

 

 // created: 2016-02-16 09:15:36
$dictionary['Opportunity']['fields']['next_step']['inline_edit']=true;
$dictionary['Opportunity']['fields']['next_step']['comments']='The next step in the sales process';
$dictionary['Opportunity']['fields']['next_step']['merge_filter']='disabled';

 

 // created: 2016-02-16 12:04:46
$dictionary['Opportunity']['fields']['campagna_old_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['campagna_old_c']['labelValue']='campagna old';

 

 // created: 2016-02-16 09:04:48
$dictionary['Opportunity']['fields']['descizione_esito_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['descizione_esito_c']['labelValue']='Descrizione Esito';

 

 // created: 2016-02-16 09:06:32
$dictionary['Opportunity']['fields']['scontomedio_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['scontomedio_c']['labelValue']='Sconto Medio';

 

 // created: 2016-02-03 08:55:14
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2016-02-16 09:05:53
$dictionary['Opportunity']['fields']['numero_ofc_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['numero_ofc_c']['labelValue']='N° OFC';

 

 // created: 2016-02-12 15:27:18
$dictionary['Opportunity']['fields']['campaign_id_c']['inline_edit']=1;

 

 // created: 2016-02-03 08:55:14
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2016-08-09 09:56:37
$dictionary["Opportunity"]["fields"]["mkt_worklogs_opportunities"] = array (
  'name' => 'mkt_worklogs_opportunities',
  'type' => 'link',
  'relationship' => 'mkt_worklogs_opportunities',
  'source' => 'non-db',
  'module' => 'mkt_Worklogs',
  'bean_name' => 'mkt_Worklogs',
  'side' => 'right',
  'vname' => 'LBL_MKT_WORKLOGS_OPPORTUNITIES_FROM_MKT_WORKLOGS_TITLE',
);


 // created: 2016-03-01 17:16:26
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']='1';
$dictionary['Opportunity']['fields']['sales_stage']['default']='';
$dictionary['Opportunity']['fields']['sales_stage']['required']=false;
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';

 

 // created: 2017-03-27 14:42:13
$dictionary['Opportunity']['fields']['statovendita_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['statovendita_c']['labelValue']='Stato Vendita';

 

 // created: 2016-02-29 13:06:02
$dictionary['Opportunity']['fields']['lead_source']['len']=100;
$dictionary['Opportunity']['fields']['lead_source']['inline_edit']=true;
$dictionary['Opportunity']['fields']['lead_source']['comments']='Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lead_source']['massupdate']=0;

 

 // created: 2016-03-01 17:17:01
$dictionary['Opportunity']['fields']['datachiusuraeffettiva_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['datachiusuraeffettiva_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['datachiusuraeffettiva_c']['labelValue']='Data Chiusura Effettiva';
$dictionary['Opportunity']['fields']['datachiusuraeffettiva_c']['enable_range_search']='1';

 

 // created: 2016-03-01 17:16:41
$dictionary['Opportunity']['fields']['amount']['required']=false;
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['importable']='true';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';

 

 // created: 2017-03-26 12:05:47
$dictionary['Opportunity']['fields']['date_entered']['massupdate']='1';
$dictionary['Opportunity']['fields']['date_entered']['comments']='Date record created';
$dictionary['Opportunity']['fields']['date_entered']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_entered']['inline_edit']=true;
$dictionary['Opportunity']['fields']['date_entered']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_entered']['duplicate_merge_dom_value']='1';

 

 // created: 2016-02-12 15:27:18
$dictionary['Opportunity']['fields']['campagna_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['campagna_c']['labelValue']='Campagna';

 

 // created: 2016-02-03 08:55:14
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

// created: 2016-07-14 15:50:48
$dictionary['Opportunity']['fields']['date_closed']['display_default'] = '+2 weeks';
$dictionary['Opportunity']['fields']['date_closed']['inline_edit'] = true;
$dictionary['Opportunity']['fields']['date_closed']['comments'] = 'Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter'] = 'disabled';


?>