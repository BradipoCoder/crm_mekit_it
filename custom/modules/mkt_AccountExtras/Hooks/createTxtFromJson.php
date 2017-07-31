<?php
if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

class createTxtFromJson
{
    
    /**
     *
     * @param \mkt_AccountExtras $bean
     * @param string             $event
     * @param array              $arguments
     */
    public static function execute($bean, $event, $arguments)
    {
        
        // CLIENT DATA
        if ($data = unserialize(base64_decode($bean->client_data)))
        {
            $txt = "";
            foreach ($data as $k => $v)
            {
                $txt .= $k . ": " . $v . "\n";
            }
            
            $bean->client_data_txt = $txt;
        }
        
        // CURRENT MONTH
        if ($data = unserialize(base64_decode($bean->current_month)))
        {
            $data = self::calculationsCurrentMonth($data);
            $removeColumns = [
                'DataDoc',
                'PrezzoListino42',
                'TotNettoRigaEuroRes',
                'TotRigaListino42',
                'TotRigaListino42Res',
            ];
            $renameColumns = [
                'CodArt'              => 'Codice',
                'DesArt'              => 'Descrizione articolo',
                'QtaGest'             => 'Qtà DDT',
                'QtaGestRes'          => 'Qtà ORC',
                'PrezzoUnitNettoEuro' => 'Prezzo(€)',
                'TotNettoRigaEuro'    => 'Totale(€)',
                'discount'            => 'Sconto(%)',
            ];
            $bean->current_month_txt = self::createFixedLengthTxtTableFromData($data, $removeColumns, $renameColumns);
        }
        
        // DEADLINES - SCADENZE
        if ($data = unserialize(base64_decode($bean->deadlines)))
        {
            $data = self::calculationsDeadlines($data);
            $removeColumns = [
                'TipoEffetto',
                'Progressivo',
            ];
            $renameColumns = [
                'DataScadenza'   => 'Data scadenza',
                'DataFattura'    => 'Data fattura',
                'AnnoDoc'        => 'Anno',
                'TipoDoc'        => 'Tipo doc.',
                'NumDoc'         => 'Numero',
                'ImportoScEuro'  => 'Importo',
                'DesTipoEffetto' => 'Tipo pag.',
            ];
            $bean->deadlines_txt = self::createFixedLengthTxtTableFromData($data, $removeColumns, $renameColumns);
            
            $bean->deadlines_txt .= self::calculationsDeadlinesSummaryAdd($data);
        }
        
        // RECENT BUYS
        if ($data = unserialize(base64_decode($bean->products_recent_buys)))
        {
            $data = self::calculationsProductsRecentBuys($data);
            $removeColumns = [
                'DataDoc',
                'QtaGestRes',
                'TotNettoRigaEuro',
                'TotNettoRigaEuroRes',
                'TotRigaListino42',
                'TotRigaListino42Res',
                'IdTesta',
                'IdRiga',
                'IdTestaUltimoAcq',
            ];
            $renameColumns = [
                'CodArt'              => 'Codice',
                'DesArt'              => 'Descrizione articolo',
                'QtaGest'             => 'Qtà',
                'PrezzoUnitNettoEuro' => 'Ult. prezzo',
                'PrezzoListino42'     => 'Listino 42',
                'discount'            => 'Sconto(%)',
                'isInNotBoughtList'   => 'NPA',
            ];
            $bean->products_recent_buys_txt = self::createFixedLengthTxtTableFromData($data, $removeColumns,
                                                                                      $renameColumns);
        }
        
        // RECENT NON-BUYS
        if ($data = unserialize(base64_decode($bean->products_recent_non_buys)))
        {
            $data = self::calculationsProductsRecentNonBuys($data);
            $removeColumns = [
            ];
            $renameColumns = [
                'CodArt'                       => 'Codice',
                'DesArt'                       => 'Descrizione articolo',
                'TotQtaGest'                   => 'Qtà',
                'DataUltimoAcq'                => 'Ult. acq.',
                'PrezzoUnitNettoEuroUltimoAcq' => 'Prezzo',
                'PrezzoListino42'              => 'List. 42',
                'discount'                     => 'Sconto(%)',
            ];
            $bean->products_recent_non_buys_txt = self::createFixedLengthTxtTableFromData($data, $removeColumns,
                                                                                          $renameColumns);
        }
        
    }
    
    /**
     * @todo: for each column get longest (optionally max truncate value)
     * @todo: create table by padding with &nbsp;
     *
     *
     * @param array $data
     * @param array $removeColumns
     * @param array $renameColumns
     *
     * @return string
     */
    private static function createFixedLengthTxtTableFromData(
        array $data,
        array $removeColumns = [],
        array $renameColumns = [])
    {
        $lines = [];
        
        
        //print 'ORIG:<pre>' . print_r($data, true) . '</pre>';
        
        $data = self::removeSpecificColumnByName($data, $removeColumns);
        //print 'REMOVED:<pre>' . print_r($data, true) . '</pre>';
        
        $data = self::createRowForColumnNames($data, $renameColumns);
        $data = self::removeColumnNamesFromDataRows($data);
        //print 'COLS:<pre>' . print_r($data, true) . '</pre>';
        
        $columnLengths = self::calculateMaxColumnLengths($data);
        //print 'LENGTHS:<pre>' . print_r($columnLengths, true) . '</pre>';
    
        $lineLength = 0;
        $minColPadding = 0;
        $paddingString = '&nbsp;';
        foreach ($data as $row)
        {
            $line = "";
            $max = count($row);
            for ($i = 0; $i < $max; $i++)
            {
                $val = $row[$i];
                $colWidth = $columnLengths[$i] + (2 * $minColPadding);
                $valWidth = mb_strlen(strval($val), 'UTF-8');
                if ($valWidth % 2 != 0)
                {
                    $val = $paddingString . $val;
                    $valWidth++;
                }
                $colPadding = $colWidth - $valWidth;
                $colPadding = ($colPadding % 2 != 0) ? $colPadding + 1 : $colPadding;
                $colPadding = $colPadding / 2;
                
                $padStr = str_repeat($paddingString, $colPadding);
    
                $line .= "|";
                $line .= $padStr . str_replace(' ', '&nbsp;', $val) . $padStr;
            }
            $line .= "|";
            $lineLength = mb_strlen(strval(str_replace('&nbsp;', ' ', $line)), 'UTF-8');
            
            array_push($lines, $line);
        }
        
        /*Top and Bottom dividers*/
        $divider = str_repeat("-", $lineLength);
        $lines = array_merge([$divider], $lines, [$divider]);
        
        $answer = implode("\n", $lines) . "\n";
        //print 'FINAL:<pre>' . $answer . '</pre>';
        //die();
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private static function calculateMaxColumnLengths(array $data)
    {
        $answer = [];
        foreach ($data as $row)
        {
            $max = count($row);
            for ($i = 0; $i < $max; $i++)
            {
                $len = strlen($row[$i]);
                if (!isset($answer[$i]) || $len > $answer[$i])
                {
                    $answer[$i] = $len;
                }
            }
        }
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private function removeColumnNamesFromDataRows(array $data)
    {
        $answer = [];
        foreach ($data as $row)
        {
            $answer[] = array_values($row);
        }
        
        return $answer;
    }
    
    /**
     * @param array $data
     * @param array $renameColumns
     *
     * @return array
     */
    private function createRowForColumnNames(array $data, array $renameColumns = [])
    {
        $answer = [];
        $firstRow = $data[0];
        $columnNames = array_keys($firstRow);
        $max = count($columnNames);
        for ($i = 0; $i < $max; $i++)
        {
            if (array_key_exists($columnNames[$i], $renameColumns))
            {
                $k = $columnNames[$i];
                $newColumnName = $renameColumns[$k];
                $columnNames[$i] = $newColumnName;
            }
        }
        $answer[] = $columnNames;
        $answer = array_merge($answer, $data);
        
        return $answer;
    }
    
    private static function removeSpecificColumnByName(array $data, array $removeColumns)
    {
        $answer = [];
        
        foreach ($data as $row)
        {
            foreach ($removeColumns as $columnName)
            {
                if (array_key_exists($columnName, $row))
                {
                    unset($row[$columnName]);
                }
            }
            $answer[] = $row;
        }
        
        return $answer;
    }
    
    /**
     * @param string $columnName
     * @param array  $data
     *
     * @return bool|int
     */
    private static function getColumnIndexForColumnName($columnName, array $data)
    {
        $answer = false;
        $columnNameRows = $data[0];
        $max = count($columnNameRows);
        for ($i = 0; $i < $max; $i++)
        {
            if ($columnNameRows[$i] == $columnName)
            {
                $answer = $i;
                break;
            }
        }
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private static function calculationsProductsRecentNonBuys(array $data)
    {
        $answer = [];
        
        foreach ($data as $row)
        {
            $discount = (1 - floatval($row['PrezzoUnitNettoEuroUltimoAcq']) / floatval($row['PrezzoListino42'])) * 100;
            $row['discount'] = number_format($discount, 2);
            $answer[] = $row;
        }
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private static function calculationsProductsRecentBuys(array $data)
    {
        $answer = [];
        
        foreach ($data as $row)
        {
            $discount = (1 - floatval($row['PrezzoUnitNettoEuro']) / floatval($row['PrezzoListino42'])) * 100;
            $row['discount'] = number_format($discount, 2);
            
            //isInNotBoughtList
            $row['isInNotBoughtList'] = intval($row['isInNotBoughtList']) == 1 ? "*" : "";
            
            $answer[] = $row;
        }
        
        return $answer;
    }
    
    /**
     * Adds summary string at the end of the table
     *
     * @param array $data
     *
     * @return string
     */
    private static function calculationsDeadlinesSummaryAdd(array $data)
    {
        $answer = "";
        
        $total = 0;
        $totalExpired = 0;
        $totalWillExpire = 0;
        
        $now = new \DateTime();
        
        foreach ($data as $row)
        {
            $expiryDate = \DateTime::createFromFormat("Y-m-d", $row["DataScadenza"]);
            $val = floatval($row["ImportoScEuro"]);
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
        
        $answer .= "Totale scaduto(€): " . $totalExpired . "\n";
        $answer .= "Totale a scadere(€): " . $totalWillExpire . "\n";
        $answer .= "Totale esposizione(€): " . $total . "\n";
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private static function calculationsDeadlines(array $data)
    {
        $answer = [];
        
        foreach ($data as $row)
        {
            $answer[] = $row;
        }
        
        return $answer;
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    private static function calculationsCurrentMonth(array $data)
    {
        $answer = [];
        
        foreach ($data as $row)
        {
            $discount = (1 - floatval($row['PrezzoUnitNettoEuro']) / floatval($row['PrezzoListino42'])) * 100;
            $row['discount'] = number_format($discount, 2);
            $answer[] = $row;
        }
        
        return $answer;
    }
}

