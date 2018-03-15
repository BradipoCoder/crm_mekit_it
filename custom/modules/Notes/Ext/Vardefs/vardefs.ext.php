<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-09-14 17:35:14
$dictionary['Note']['fields']['description']['inline_edit']=true;
$dictionary['Note']['fields']['description']['comments']='Full text of the note';
$dictionary['Note']['fields']['description']['merge_filter']='disabled';
$dictionary['Note']['fields']['description']['rows']='10';

 

 // created: 2017-09-18 09:50:28
$dictionary['Note']['fields']['image_c']['inline_edit']='';
$dictionary['Note']['fields']['image_c']['labelValue']='Immagine';

 

// created: 2018-02-09 15:42:59
$dictionary["Note"]["fields"]["aos_quotes_notes_1"] = array (
  'name' => 'aos_quotes_notes_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_notes_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_NOTES_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_notes_1aos_quotes_ida',
);
$dictionary["Note"]["fields"]["aos_quotes_notes_1_name"] = array (
  'name' => 'aos_quotes_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_NOTES_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_notes_1aos_quotes_ida',
  'link' => 'aos_quotes_notes_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["aos_quotes_notes_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_notes_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_NOTES_1_FROM_NOTES_TITLE',
);


 // created: 2017-09-07 10:20:52
$dictionary['Note']['fields']['name']['default']='';
$dictionary['Note']['fields']['name']['inline_edit']=true;
$dictionary['Note']['fields']['name']['comments']='Name of the note';
$dictionary['Note']['fields']['name']['merge_filter']='disabled';
$dictionary['Note']['fields']['name']['full_text_search']=array (
);

 
?>