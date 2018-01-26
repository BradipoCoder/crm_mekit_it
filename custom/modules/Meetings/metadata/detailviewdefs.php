<?php
$viewdefs ['Meetings'] =
  array(
    'DetailView' =>
      array(
        'templateMeta' =>
          array(
            'includes' =>
              array(
                0 =>
                  array(
                    'file' => 'modules/Reminders/Reminders.js',
                  ),
              ),
            'form' =>
              array(
                'buttons' =>
                  array(
                    0 => 'EDIT',
                    1 => 'DUPLICATE',
                    2 => 'DELETE',
                    3 =>
                      array(
                        'customCode' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input type="hidden" name="isSaveFromDetailView" value="true">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"   class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Meetings\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true;this.form.return_id.value=\'{$fields.id.value}\';" id="close_create_button" name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
                        'sugar_html' =>
                          array(
                            'type' => 'submit',
                            'value' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                            'htmlOptions' =>
                              array(
                                'title' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                                'name' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                                'class' => 'button',
                                'id' => 'close_create_button',
                                'onclick' => 'this.form.isSaveFromDetailView.value=true; this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Meetings\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true;this.form.return_id.value=\'{$fields.id.value}\';',
                              ),
                            'template' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")}[CONTENT]{/if}',
                          ),
                      ),
                    4 =>
                      array(
                        'customCode' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Meetings\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'"  id="close_button" name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
                        'sugar_html' =>
                          array(
                            'type' => 'submit',
                            'value' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                            'htmlOptions' =>
                              array(
                                'title' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                                'accesskey' => '{$APP.LBL_CLOSE_BUTTON_KEY}',
                                'class' => 'button',
                                'onclick' => 'this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Meetings\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\';',
                                'name' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                                'id' => 'close_button',
                              ),
                            'template' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")}[CONTENT]{/if}',
                          ),
                      ),
                    /* PRINT */
                    5 =>
                      array(
                        'customCode' => '---PRINT---',
                        //Bug#51778: The custom code will be replaced with sugar_html. customCode will be deplicated.
                        'sugar_html' => array(
                          'type' => 'submit',
                          'value' => 'Stampa',
                          'htmlOptions' => array(
                            'title' => 'Stampa',
                            'class' => 'button',
                            'onclick' => '
                            this.form.action.value = \'Print\';
                            this.form.status.value = \'DEBUG\';
                            this.form.return_module.value = \'Meetings\';
                            this.form.return_action.value = \'DetailView\';
                            this.form.sugar_body_only.value = \'1\';
                            this.form.return_id.value = \'{$fields.id.value}\';',
                            'name' => 'print',
                            'id' => 'print_button',
                          ),
                        ),
                      ),
                    /* PRINT */
                  ),
                'hidden' =>
                  array(
                    0 => '<input type="hidden" name="isSaveAndNew">',
                    1 => '<input type="hidden" name="status">',
                    2 => '<input type="hidden" name="isSaveFromDetailView">',
                    3 => '<input type="hidden" name="isSave">',
                  ),
                'headerTpl' => 'modules/Meetings/tpls/detailHeader.tpl',
              ),
            'maxColumns' => '2',
            'widths' =>
              array(
                0 =>
                  array(
                    'label' => '10',
                    'field' => '30',
                  ),
                1 =>
                  array(
                    'label' => '10',
                    'field' => '30',
                  ),
              ),
            'useTabs' => FALSE,
            'tabDefs' =>
              array(
                'LBL_MEETING_INFORMATION' =>
                  array(
                    'newTab' => FALSE,
                    'panelDefault' => 'expanded',
                  ),
              ),
            'syncDetailEditViews' => TRUE,
          ),
        'panels' =>
          array(
            'lbl_meeting_information' =>
              array(
                0 =>
                  array(
                    0 =>
                      array(
                        'name' => 'name',
                        'label' => 'LBL_SUBJECT',
                      ),
                    1 => 'status',
                  ),
                1 =>
                  array(
                    0 =>
                      array(
                        'name' => 'meeting_type_c',
                        'studio' => 'visible',
                        'label' => 'LBL_MEETING_TYPE',
                      ),
                    1 =>
                      array(
                        'name' => 'motivazione_non_effettuata_c',
                        'studio' => 'visible',
                        'label' => 'LBL_MOTIVAZIONE_NON_EFFETTUATA',
                      ),
                  ),
                2 =>
                  array(
                    0 =>
                      array(
                        'name' => 'riunione_multidata_c',
                        'label' => 'LBL_RIUNIONE_MULTIDATA',
                      ),
                    1 => '',
                  ),
                3 =>
                  array(
                    0 =>
                      array(
                        'name' => 'date_start',
                        'label' => 'LBL_DATE_TIME',
                      ),
                    1 =>
                      array(
                        'name' => 'parent_name',
                        'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
                      ),
                  ),
                4 =>
                  array(
                    0 =>
                      array(
                        'name' => 'date_end',
                        'comment' => 'Date meeting ends',
                        'label' => 'LBL_DATE_END',
                      ),
                    1 =>
                      array(
                        'name' => 'assigned_user_name',
                        'label' => 'LBL_ASSIGNED_TO',
                      ),
                  ),
                5 =>
                  array(
                    0 =>
                      array(
                        'name' => 'duration',
                        'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV} ',
                        'label' => 'LBL_DURATION',
                      ),
                    1 => 'description',
                  ),
                6 =>
                  array(
                    0 =>
                      array(
                        'name' => 'relativoacampagna_c',
                        'studio' => 'visible',
                        'label' => 'LBL_RELATIVOACAMPAGNA',
                      ),
                    1 => 'location',
                  ),
                7 =>
                  array(
                    0 =>
                      array(
                        'name' => 'fogliolavoro_c',
                        'label' => 'LBL_FOGLIOLAVORO',
                      ),
                    1 =>
                      array(
                        'name' => 'campagnadropdown_c',
                        'studio' => 'visible',
                        'label' => 'LBL_CAMPAGNADROPDOWN',
                      ),
                  ),
              ),
          ),
      ),
  );
?>
