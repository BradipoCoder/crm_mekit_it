<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

require_once('include/MVC/Controller/SugarController.php');

/**
 * Class CustomMeetingsController
 */
class CustomMeetingsController extends SugarController
{
  /**
   * Intercept and handle print action
   */
  public function action_print() {
    $this->view = 'print';
  }
}