<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/SugarView.php');


class mkt_AccountExtrasViewRawdata extends SugarView {

    /** @var  \mkt_AccountExtras */
    public $bean;

    public function __construct()
    {
        parent::__construct();
        $this->options = array_merge($this->options, [
            'show_header' => false,
            'show_title' => false,
            'show_subpanels' => false,
            'show_search' => false,
            'show_footer' => false,
            'show_javascript' => false,
            'view_print' => false,
        ]);

    }

    /**
     * overwriting to use our custom template file
     */
    public function preDisplay()
    {
        parent::preDisplay();
    }


    public function display()
    {
        if(empty($this->bean->id)){
            throw new \Exception("No bean id!");
        }

        $ss = new Sugar_Smarty();
        $this->addToSmartyCssPath($ss);
        $this->addToSmartyClientData($ss);
        $this->addToSmartyCurrentMonth($ss);
        $this->addToSmartyDeadlines($ss);
        $this->addToSmartyProducts($ss);

        $tplPath = 'custom/modules/mkt_AccountExtras/tpls/rawdata.tpl';
        $ss->display($tplPath);
    }


    /**
     * @param \Sugar_Smarty $ss
     */
    protected function addToSmartyProducts($ss)
    {
        $answer_prod_acq = [];
        $answer_prod_non_acq = [];

        $data_prod_acq = unserialize(base64_decode($this->bean->products_recent_buys));
        $data_prod_non_acq = unserialize(base64_decode($this->bean->products_recent_non_buys));


        if(true)//if($data_prod_acq && $data_prod_non_acq)
        {
            $answer_prod_acq = $this->convertObjectToArray($data_prod_acq);
            $answer_prod_non_acq = $this->convertObjectToArray($data_prod_non_acq);

            $answer_prod_acq = $this->recentBuysUniqueArticles($answer_prod_acq);
            $answer_prod_acq = $this->removeNPAProducts($answer_prod_acq, $answer_prod_non_acq);





            //-------------------------------------------------------------------------------- PA ---
            foreach ($answer_prod_acq as &$row)
            {
                $discount = (1 - floatval($row['PrezzoUnitNettoEuro']) / floatval($row['PrezzoListino42'])) * 100;
                $row['discount'] = number_format($discount, 2);

                //unisci DesArt + CodArt
                $row["DesArt"] .= " [" . $row["CodArt"] . "]";
            }

            $formatKeys = [
                "QtaGest",
                "PrezzoUnitNettoEuro",
                "PrezzoListino42",
                "discount"
            ];
            $answer_prod_acq = $this->reformatNumberMulti($answer_prod_acq, $formatKeys);

            $removeKeys = [
                'CodArt',
                'QtaGestRes',
                'TotNettoRigaEuro',
                'TotNettoRigaEuroRes',
                'TotRigaListino42',
                'TotRigaListino42Res',
                'IdTesta',
                'IdRiga',
                'IdTestaUltimoAcq',
                'CodGruppoArticolo',
                'DesGruppoArticolo',
                'CodCategoriaArticolo',
                'DesCategoriaArticolo',
                'CodCategoriaStatArticolo',
                'DesCategoriaStatArticolo',
            ];
            $answer_prod_acq = $this->removeKeysMulti($answer_prod_acq, $removeKeys);

            $orderedKeys = ['CodArt', 'DesArt', 'DataDoc'];
            $answer_prod_acq = $this->reorderKeysMulti($answer_prod_acq, $orderedKeys);

            $this->reorderByArticleColumn($answer_prod_acq);

            $renameKeys = [
                'CodArt'              => 'Codice',
                'DesArt'              => 'Articolo',
                'QtaGest'             => 'Qtà',
                'PrezzoUnitNettoEuro' => 'Ult. prezzo',
                'PrezzoListino42'     => 'Lst. 42',
                'discount'            => 'Sconto(%)',
                'DataDoc'             => 'Ult. acq.',
            ];
            $answer_prod_acq = $this->renameKeysMulti($answer_prod_acq, $renameKeys);


            //--------------------------------------------------------------------------------- NPA ---
            foreach ($answer_prod_non_acq as &$row)
            {
                $discount = (1 - floatval($row['PrezzoUnitNettoEuroUltimoAcq']) / floatval($row['PrezzoListino42'])) * 100;
                $row['discount'] = number_format($discount, 2);

                //unisci DesArt + CodArt
                $row["DesArt"] .= " [" . $row["CodArt"] . "]";
            }

            $formatKeys = [
                "TotQtaGest",
                "PrezzoUnitNettoEuroUltimoAcq",
                "PrezzoListino42",
                "discount"
            ];
            $answer_prod_non_acq = $this->reformatNumberMulti($answer_prod_non_acq, $formatKeys);

            $removeKeys = [
                'CodArt',
                'CodGruppoArticolo',
                'DesGruppoArticolo',
                'CodCategoriaArticolo',
                'DesCategoriaArticolo',
                'CodCategoriaStatArticolo',
                'DesCategoriaStatArticolo',
            ];
            $answer_prod_non_acq = $this->removeKeysMulti($answer_prod_non_acq, $removeKeys);

            //$orderedKeys = [];
            //$answer_prod_non_acq = $this->reorderKeys($answer_prod_non_acq, $orderedKeys);

            $this->reorderByArticleColumn($answer_prod_non_acq);

            $renameKeys = [
                'CodArt'                       => 'Codice',
                'DesArt'                       => 'Articolo',
                'TotQtaGest'                   => 'Qtà',
                'DataUltimoAcq'                => 'Ult. acq.',
                'PrezzoUnitNettoEuroUltimoAcq' => 'Prezzo',
                'PrezzoListino42'              => 'Lst. 42',
                'discount'                     => 'Sconto(%)',
            ];
            $answer_prod_non_acq = $this->renameKeysMulti($answer_prod_non_acq, $renameKeys);
        }

        $ss->assign("products_recent_buys", $answer_prod_acq);
        $ss->assign("products_recent_non_buys", $answer_prod_non_acq);
    }


    /**
     * @param array $rows
     *
     * @return array
     */
    protected function recentBuysUniqueArticles($rows)
    {
        $answer = [];

        foreach ($rows as $row)
        {
            $code = $row["CodArt"];
            if(!array_key_exists($code, $answer))
            {
                $answer[$code] = $row;
            } else {
                $currentRow = $answer[$code];
                $currentRow["QtaGest"] += $row["QtaGest"];
                $currentRow["QtaGestRes"] += $row["QtaGestRes"];
                $answer[$code] = $currentRow;
            }
        }

        $answer = array_values($answer);

        return $answer;
    }

    /**
     * @param array $pa - prodotti acquistati
     * @param array $npa - non più acquistati
     *
     * @return array
     */
    protected function removeNPAProducts($pa, $npa)
    {
        $answer = [];
        $npaCodes = array_column($npa, 'CodArt');

        foreach ($pa as $row)
        {
            $code = $row["CodArt"];
            if(!in_array($code, $npaCodes))
            {
                $answer[] = $row;
            }
        }

        return $answer;
    }

    /**
     * @param \Sugar_Smarty $ss
     */
    protected function addToSmartyDeadlines($ss)
    {
        $answer = [];

        if ($data = unserialize(base64_decode($this->bean->deadlines)))
        {
            $answer = $this->convertObjectToArray($data);

            $sums = $this->getDeadlinesSums($answer);
            $formatKeys = [
                "Totale scaduto(€)",
                "Totale a scadere(€)",
                "Totale esposizione(€)",
            ];
            $this->reformatNumbers($sums, $formatKeys);
            $ss->assign("deadlines_sums", $sums);


            $answer = $this->reformatNumberMulti($answer, ["ImportoScEuro"]);

            $removeKeys = [
                'TipoEffetto',
                'Progressivo',
            ];
            $answer = $this->removeKeysMulti($answer, $removeKeys);

            //$orderedKeys = [];
            //$answer = $this->reorderKeys($answer, $orderedKeys);

            $renameKeys = [
                'DataScadenza'   => 'Data scadenza',
                'DataFattura'    => 'Data fattura',
                'AnnoDoc'        => 'Anno',
                'TipoDoc'        => 'Tipo doc.',
                'NumDoc'         => 'Numero',
                'ImportoScEuro'  => 'Importo',
                'DesTipoEffetto' => 'Tipo pag.',
            ];
            $answer = $this->renameKeysMulti($answer, $renameKeys);
        }

        $ss->assign("deadlines", $answer);
    }

    /**
     * @param array $data
     *
     * @return string
     */
    protected function getDeadlinesSums(array $data)
    {
        $answer = [];

        $total = 0;
        $totalExpired = 0;
        $totalWillExpire = 0;

        $now = new \DateTime();

        foreach ($data as $row)
        {
//            $v = floatval(str_replace(",", "", $row["ImportoScEuro"]));
//            print "<br/>" . $row["ImportoScEuro"] . " === " . $v;

            $expiryDate = \DateTime::createFromFormat("d/m/Y", $row["DataScadenza"]);
            $val = floatval(str_replace(",", "", $row["ImportoScEuro"]));
            $total += $val;
            if ($expiryDate >= $now)
            {
                $totalWillExpire += $val;
            }
            else
            {
                $totalExpired += $val;
            }
        }

        $answer["Totale scaduto(€)"] =  $totalExpired;
        $answer["Totale a scadere(€)"] =  $totalWillExpire;
        $answer["Totale esposizione(€)"] =  $total;

        return $answer;
    }


    /**
     * @param \Sugar_Smarty $ss
     */
    protected function addToSmartyCurrentMonth($ss)
    {
        $answer = [];

        if ($data = unserialize(base64_decode($this->bean->current_month)))
        {
            $answer = $this->convertObjectToArray($data);

            //Discount calculations
            foreach ($answer as &$row)
            {
                $discount = (1 - floatval($row['PrezzoUnitNettoEuro']) / floatval($row['PrezzoListino42'])) * 100;
                $row['discount'] = number_format($discount, 2);
            }

            $answer = $this->reformatNumberMulti($answer, ["PrezzoUnitNettoEuro", "TotNettoRigaEuro", "discount"]);

            $removeKeys = [
                'DataDoc',
                'PrezzoListino42',
                'TotNettoRigaEuroRes',
                'TotRigaListino42',
                'TotRigaListino42Res',
            ];
            $answer = $this->removeKeysMulti($answer, $removeKeys);

            //$orderedKeys = [];
            //$answer = $this->reorderKeys($answer, $orderedKeys);

            $renameKeys = [
                'CodArt'              => 'Codice',
                'DesArt'              => 'Articolo',
                'QtaGest'             => 'Qtà DDT',
                'QtaGestRes'          => 'Qtà ORC',
                'PrezzoUnitNettoEuro' => 'Prezzo(€)',
                'TotNettoRigaEuro'    => 'Totale(€)',
                'discount'            => 'Sconto(%)',
            ];
            $answer = $this->renameKeysMulti($answer, $renameKeys);


        }

        $ss->assign("current_month", $answer);
    }


    /**
     * @param \Sugar_Smarty $ss
     */
    protected function addToSmartyClientData($ss)
    {
        $answer = [];

        if ($data = unserialize(base64_decode($this->bean->client_data)))
        {
            $answer = $this->convertObjectToArray($data);

            $ss->assign("last_update", $answer["DataDiModifica"]);

            $removeKeys = ["Tipologia", "Database", "DataDiModifica"];
            $answer = $this->removeKeys($answer, $removeKeys);

            $orderedKeys = ["Nome1", "CodiceMetodo", "ClienteDiFatturazione", "Agente1"];
            $answer = $this->reorderKeys($answer, $orderedKeys);

            $renameKeys = [
                "CodiceMetodo" =>           "Codice metodo",
                "CodiceFiscale" =>          "Codice fiscale",
                "PartitaIva" =>             "Partita Iva",
                "Nome1" =>                  "Nome 1",
                "Nome2" =>                  "Nome 2",
                "DataDiModifica" =>         "Data di modifica",
                "ClienteDiFatturazione" =>  "Cliente di fatturazione",
                "Agente1" =>                "Agente",
            ];
            $answer = $this->renameKeys($answer, $renameKeys);

        }

        $ss->assign("client_data", $answer);
    }

    /**
     * @param \Sugar_Smarty $ss
     */
    protected function addToSmartyCssPath($ss)
    {
        $v = sha1(microtime());
        $path = "/custom/modules/mkt_AccountExtras/tpls/rawdata.css?v=$v";
        $ss->assign("css_path", $path);
    }

    /**
     * @param array $data
     */
    private function reorderByArticleColumn(&$data)
    {
        usort($data, function($a, $b) {
            return strcmp(trim($a['DesArt']), trim($b['DesArt']));
        });
    }

    /**
     * @param array $rows
     * @param array $columns
     *
     * @return array
     */
    private function reformatNumberMulti($rows, $columns)
    {
        foreach($rows as &$row)
        {
            $this->reformatNumbers($row, $columns);
        }

        return $rows;
    }

    /**
     * @param array $row
     * @param array $columns
     */
    private function reformatNumbers(&$row, $columns)
    {
        foreach($columns as $key)
        {
            if(isset($row[$key]))
            {
                //$row[$key] = str_replace(".", ",", $row[$key]);
                $val = floatval(str_replace(",", "", $row[$key]));
                $row[$key] = number_format($val, 2, ',', '.');
            }
        }
    }


    /**
     * @param array $data
     * @param array $orderedKeys
     *
     * @return array
     */
    private function reorderKeysMulti($data, $orderedKeys)
    {
        foreach($data as &$row)
        {
            $row = $this->reorderKeys($row, $orderedKeys);
        }

        return $data;
    }

    /**
     * @param array $data
     * @param array $orderedKeys
     *
     * @return array
     */
    private function reorderKeys($data, $orderedKeys)
    {
        $answer = [];
        foreach($orderedKeys as $key)
        {
            if(isset($data[$key]))
            {
                $answer[$key] = $data[$key];
                unset($data[$key]);
            }
        }

        $answer = array_merge($answer, $data);

        return $answer;
    }

    /**
     * @param array $data
     * @param array $removeKeys
     *
     * @return array
     */
    private function removeKeysMulti($data, $removeKeys)
    {
        foreach($data as &$row)
        {
            $row = $this->removeKeys($row, $removeKeys);
        }

        return $data;
    }

    /**
     * @param array $data
     * @param array $removeKeys
     *
     * @return array
     */
    private function removeKeys($data, $removeKeys)
    {
        foreach($removeKeys as $key)
        {
            if(array_key_exists($key, $data))
           {
               unset($data[$key]);
           }
        }

        return $data;
    }

    /**
     * @param array $data
     * @param array $renameKeys
     *
     * @return array
     */
    private function renameKeysMulti($data, $renameKeys)
    {
        foreach($data as &$row)
        {
            $row = $this->renameKeys($row, $renameKeys);
        }

        return $data;
    }

    /**
     * @param array $data
     * @param array $renameKeys
     *
     * @return array
     */
    private function renameKeys($data, $renameKeys)
    {
        $answer = [];
        foreach($data as $k => $v)
        {
            $k = array_key_exists($k, $renameKeys) ? $renameKeys[$k] : $k;
            $answer[$k] = $v;
        }

        return $answer;
    }


    /**
     * @param \stdClass $obj
     *
     * @return array
     */
    private function convertObjectToArray($obj)
    {
        $answer = [];
        foreach($obj as $k => $v)
        {
            $answer[$k] = $v;
        }

        return $answer;
    }
}

