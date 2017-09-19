-- count email for acq contacts of a company
SELECT COUNT(*) AS cnt
FROM email_addr_bean_rel AS r
INNER JOIN email_addresses AS m ON m.id = r.email_address_id AND m.deleted = 0 AND m.invalid_email = 0
INNER JOIN contacts AS c ON c.id = r.bean_id AND r.bean_module = 'Contacts' AND r.deleted = 0
INNER JOIN accounts_contacts_imp_acq AS acq ON acq.contact_id = c.id AND c.deleted = 0 AND acq.deleted = 0
WHERE acq.account_id = '33b153e5-4f6f-8e39-311c-56c45792f905';

