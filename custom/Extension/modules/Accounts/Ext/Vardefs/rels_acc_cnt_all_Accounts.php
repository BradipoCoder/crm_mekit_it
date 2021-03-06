<?php

/**
 * Creating 10 fields for relationships between accounts and contacts
 */
foreach (array('imp', 'mekit') as $___GROUP) {
    foreach (array('adm', 'dir', 'acq', 'com', 'opr') as $___POSITION) {
        $___REL_NAME = 'accounts_contacts_' . $___GROUP . '_' . $___POSITION;
        $___LABEL = strtoupper('LBL_' . $___REL_NAME . '_CONTACTS');//LBL_ACCOUNTS_CONTACTS_IMP_ADM_CONTACTS
        $dictionary["Account"]["fields"][$___REL_NAME] = array(
            'name' => $___REL_NAME,
            'type' => 'link',
            'relationship' => $___REL_NAME,
            'source' => 'non-db',
            'module' => 'Contacts',
            'bean_name' => 'Contact',
            'vname' => $___LABEL
        );
    }
}

