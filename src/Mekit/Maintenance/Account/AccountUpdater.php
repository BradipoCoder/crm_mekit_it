<?php
/**
 * Created by Adam Jakab.
 * Date: 06/06/16
 * Time: 14.26
 */

namespace Mekit\Maintenance\Account;

use Mekit\Console\Configuration;

class AccountUpdater
{
    /** @var bool */
    protected $dryRun = true;
    
    /** @var bool */
    protected $verboseLogging = false;
    
    /** @var callable */
    protected $logger;
    
    /** @var  \PDO */
    protected $db;
    
    /** @var  \PDOStatement */
    protected $itemWalker;

    
    /**
     * @param callable $logger
     *
     * @throws \Exception
     */
    public function __construct($logger)
    {
        $this->logger = $logger;
        $this->db = Configuration::getDatabaseConnection("local");
    }
    
    /**
     * @param array $options
     */
    public function execute($options)
    {
        $this->log("Executing with options: " . json_encode($options));
        $this->verboseLogging = $options["verbose"];
    
        $this->updateAccounts_Cantieri();
        
        if ($this->dryRun)
        {
            $this->log(str_repeat("#", 120));
            $this->log("RUNNING IN DRY MODE! NO CHANGES HAVE BEEN MADE!");
            $this->log(str_repeat("#", 120));
        }
    }
    
    
    protected function updateAccounts_Cantieri()
    {
        $sql = "SELECT a.id, a.name, c.imp_metodo_client_code_c, c.imp_metodo_invoice_client_c, c.imp_agent_code_c
            FROM accounts AS a
            INNER JOIN accounts_cstm AS c ON c.id_c = a.id
            WHERE c.imp_metodo_client_code_c <> c.imp_metodo_invoice_client_c
            ";
        
        $itemWalker = $this->db->prepare($sql);
        $itemWalker->execute(
            [
                ':status'         => '',
            ]
        );
        $this->log("CANRIERI: " . $itemWalker->rowCount());
        
        
        
        while ($data = $itemWalker->fetch(\PDO::FETCH_ASSOC))
        {
            if(isset($data["imp_metodo_invoice_client_c"]) && $data["imp_metodo_invoice_client_c"])
            //$this->log("CANRIERE: " . print_r($data, true));
            
            $refAccountData = $this->getAccountDataByMetodoCode($data["imp_metodo_invoice_client_c"]);
            //$this->log("REF: " . print_r($refAccountData, true));
    
            $currAgentCode = isset($data["imp_agent_code_c"]) && $data["imp_agent_code_c"] ?
                $data["imp_agent_code_c"] : false;
            
            $newAgentCode = isset($refAccountData["imp_agent_code_c"]) && $refAccountData["imp_agent_code_c"] ?
                $refAccountData["imp_agent_code_c"] : false;
            
            if($newAgentCode && $currAgentCode <> $newAgentCode) {
                $this->log("Agent Code change: ". $currAgentCode ." -> " . $newAgentCode );
                $this->updatedAgentCodeOnAccount($data["id"], $newAgentCode);
            }
        }
    }
    
    /**
     * @param string $id
     * @param string $agentCode
     */
    protected function updatedAgentCodeOnAccount($id, $agentCode)
    {
        $updateSql = "UPDATE accounts_cstm 
          SET imp_agent_code_c = :agcode
          WHERE id_c = :id
          ";
        
        $updateParams = [
            ':id'    => $id,
            ':agcode' => $agentCode,
        ];
        
        if ($this->verboseLogging)
        {
            $this->log("UPDATE: " . $updateSql . " with params: " . json_encode($updateParams));
        }
    
        if (!$this->dryRun)
        {
            $st = $this->db->prepare($updateSql);
            $st->execute($updateParams);
        }
    }
    
    /**
     * @param $metodoCode
     *
     * @return mixed
     */
    protected function getAccountDataByMetodoCode($metodoCode)
    {
        $sql = "SELECT *
            FROM accounts AS a
            INNER JOIN accounts_cstm AS c ON c.id_c = a.id
            WHERE c.imp_metodo_client_code_c = :clicode
            ";
    
        $pdo = $this->db->prepare($sql);
        $pdo->execute(
            [
                ':clicode'         => $metodoCode,
            ]
        );
        //$this->log("Q: " . $pdo->queryString);
        return $pdo->fetch(\PDO::FETCH_ASSOC);
    }
    
    /**
     * @param string $msg
     */
    protected function log($msg)
    {
        call_user_func($this->logger, $msg);
    }
}