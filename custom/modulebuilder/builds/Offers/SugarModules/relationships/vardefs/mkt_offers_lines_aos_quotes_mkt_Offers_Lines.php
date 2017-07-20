<?php
// created: 2016-03-01 17:21:08
$dictionary["mkt_Offers_Lines"]["fields"]["mkt_offers_lines_aos_quotes"] = array (
  'name' => 'mkt_offers_lines_aos_quotes',
  'type' => 'link',
  'relationship' => 'mkt_offers_lines_aos_quotes',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_MKT_OFFERS_LINES_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
);
$dictionary["mkt_Offers_Lines"]["fields"]["mkt_offers_lines_aos_quotes_name"] = array (
  'name' => 'mkt_offers_lines_aos_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKT_OFFERS_LINES_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
  'link' => 'mkt_offers_lines_aos_quotes',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["mkt_Offers_Lines"]["fields"]["mkt_offers_lines_aos_quotesaos_quotes_ida"] = array (
  'name' => 'mkt_offers_lines_aos_quotesaos_quotes_ida',
  'type' => 'link',
  'relationship' => 'mkt_offers_lines_aos_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKT_OFFERS_LINES_AOS_QUOTES_FROM_MKT_OFFERS_LINES_TITLE',
);
