<?php
/**
 * Created by Adam Jakab.
 * Date: 26/01/18
 * Time: 11.47
 */

/**
 * Class MeetingsViewPrint
 */
class MeetingsViewPrint extends SugarView {
  /** @var bool */
  protected $debug = FALSE;

  /** @var array */
  protected $templateData = [];

  /** @var  string */
  protected $templateHtml;

  /** @var  \Meeting */
  public $bean;


  /**
   * Display view
   */
  public function display() {
    ob_end_clean();

    if (!isset($_POST["module"]) || $_POST["module"] != "Meetings") {
      throw new \Exception("Module is not set or wrong module!");
    }

    if (!isset($_POST["record"]) || empty($_POST["record"])) {
      throw new \Exception("Record is not set!");
    }

    $this->debug = (isset($_POST["status"]) && $_POST["status"] == "DEBUG");


    //$this->log("<pre>POST: " . print_r($_POST, true) . "</pre>");
    //$this->log("<pre>BEAN: " . print_r($this->bean, true) . "</pre>");

    $this->templateData = [
      "title" => "Meeting #" . $this->bean->id,
      "css" => [
        "/themes/SuiteP/css/bootstrap.min.css",
        "/custom/modules/Meetings/css/print.css"
      ],
      "page_content" => "..."
    ];

    $this->templateData['linked_field_names'] = array_keys($this->bean->get_linked_fields());


    // Meeting
    $this->templateData["meeting"] = $this->bean->toArray(TRUE);
    $this->templateData["meeting"]["description"] = nl2br($this->templateData["meeting"]["description"]);

    // Assigned user
    $this->templateData["assigned_user"] = [];
    if (!empty($this->bean->assigned_user_id)) {
      $user_array = $this->bean->get_linked_beans("assigned_user_link", "User");
      if ($user_array && $user_array[0] instanceof \User) {
        /** @var \User $assigned_user */
        $assigned_user = $user_array[0];
        $this->templateData["assigned_user"] = $assigned_user->toArray(FALSE,TRUE);
        // Custom fields
        //$this->templateData["assigned_user"]["full_name"] = $assigned_user->full_name;
        //$this->log("<pre>ASSIGNED USER: " . print_r( $assigned_user, true) . "</pre>");
      }
    }

    // RAS
    $this->templateData["ras"] = [];
    if ($this->bean->parent_type == "Cases" && !empty($this->bean->parent_id)) {
      $ras_array = $this->bean->get_linked_beans("case", "Case");
      if ($ras_array && $ras_array[0] instanceof \aCase) {
        /** @var \aCase $ras */
        $ras = $ras_array[0];
        $this->templateData["ras"] = $ras->toArray(FALSE, TRUE);
        //$this->log("<pre>RAS: " . print_r( $ras, true) . "</pre>");
      }
    }

    // Account (from RAS)
    $this->templateData["account"] = [];
    if (isset($ras) && !empty($ras->account_id)) {
      //$this->log("<pre>LINKS: " . print_r( $ras->get_linked_fields(), true) . "</pre>");
      $account_array = $ras->get_linked_beans("accounts", "Account");
      if ($account_array && $account_array[0] instanceof \Account) {
        /** @var \Account $account */
        $account = $account_array[0];
        $this->templateData["account"] = $account->toArray(FALSE, true);

        //$this->log("<pre>ACCOUNT: " . print_r( $account, true) . "</pre>");
      }
    }

    // Contact (from Account)
    $this->templateData["contact"] = [];
    if (isset($account)) {
      //$this->log("<pre>LINKS: " . print_r( $account->get_linked_fields(), true) . "</pre>");
      $contact_array = $account->get_linked_beans("accounts_contacts_imp_opr", "Contact");
      if ($contact_array && $contact_array[0] instanceof \Contact) {
        /** @var \Contact $contact */
        $contact = $contact_array[0];
        $this->templateData["contact"] = $contact->toArray(FALSE, true);
        //$this->log("<pre>CONTACT: " . print_r( $contact, true) . "</pre>");
      }
    }




    //$this->log("<pre>BEAN(flat): " . print_r( $this->bean->toArray(false, true), true) . "</pre>");
    //$this->log("<pre>BEAN: " . print_r( $this->bean, true) . "</pre>");
    //$this->log("<pre>TPL DATA: " . print_r( $this->templateData, true) . "</pre>");

    $html = $this->getDisplayHtml();


    print $html;


  }

  /**
   * @return string
   */
  protected function getDisplayHtml() {
    $this->ss->assign("tplData", $this->templateData);

    $templateFile = 'custom/modules/Meetings/tpls/MeetingsPrintHtml.tpl';
    if (inDeveloperMode()) {
      $this->ss->clear_compiled_tpl($templateFile);
    }

    return $this->ss->fetch($templateFile, NULL, NULL, FALSE);
  }

  /**
   * @param string $msg
   */
  protected function log($msg) {
    if ($this->debug) {
      print $msg;
    }
  }
}