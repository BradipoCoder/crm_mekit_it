<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-12-07 14:31:57
$dictionary['mkt_nonconfint']['fields']['description']['inline_edit']=true;
$dictionary['mkt_nonconfint']['fields']['description']['comments']='Full text of the note';
$dictionary['mkt_nonconfint']['fields']['description']['merge_filter']='disabled';

 

 // created: 2017-01-25 10:39:41
$dictionary['mkt_nonconfint']['fields']['data_verifica_miglioramento_c']['inline_edit']='1';
$dictionary['mkt_nonconfint']['fields']['data_verifica_miglioramento_c']['labelValue']='Data Verifica Miglioramento';

 

 // created: 2016-12-07 14:49:54
$dictionary['mkt_nonconfint']['fields']['tipo_c']['inline_edit']='1';
$dictionary['mkt_nonconfint']['fields']['tipo_c']['labelValue']='Tipo';

 

 // created: 2017-01-25 10:37:46
$dictionary['mkt_nonconfint']['fields']['miglioria_proposta_c']['inline_edit']='1';
$dictionary['mkt_nonconfint']['fields']['miglioria_proposta_c']['labelValue']='Miglioria Proposta';

 

// created: 2016-12-07 15:20:13
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_users"] = array (
  'name' => 'mkt_nonconfint_users',
  'type' => 'link',
  'relationship' => 'mkt_nonconfint_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_USERS_TITLE',
  'id_name' => 'mkt_nonconfint_usersusers_ida',
);
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_users_name"] = array (
  'name' => 'mkt_nonconfint_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'mkt_nonconfint_usersusers_ida',
  'link' => 'mkt_nonconfint_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["mkt_nonconfint"]["fields"]["mkt_nonconfint_usersusers_ida"] = array (
  'name' => 'mkt_nonconfint_usersusers_ida',
  'type' => 'link',
  'relationship' => 'mkt_nonconfint_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_NONCONFINT_USERS_FROM_MKT_NONCONFINT_TITLE',
);


 // created: 2016-12-07 14:45:01
$dictionary['mkt_nonconfint']['fields']['areadinteresseimp_c']['inline_edit']='1';
$dictionary['mkt_nonconfint']['fields']['areadinteresseimp_c']['labelValue']='Area d\'Interesse Imp';

 

 // created: 2016-12-07 14:45:58
$dictionary['mkt_nonconfint']['fields']['areadinteressemkt_c']['inline_edit']='1';
$dictionary['mkt_nonconfint']['fields']['areadinteressemkt_c']['labelValue']='Area d\'Interesse MKT';

 

 // created: 2016-12-07 14:31:28
$dictionary['mkt_nonconfint']['fields']['date_entered']['display_default']='now&12:00am';
$dictionary['mkt_nonconfint']['fields']['date_entered']['comments']='Date record created';
$dictionary['mkt_nonconfint']['fields']['date_entered']['merge_filter']='disabled';

 
?>