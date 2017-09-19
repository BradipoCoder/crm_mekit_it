

-- contact list with cell phone - ACQUISTI
SELECT
  ss.first_name, ss.last_name,
  IF(ss.cell_m IS NOT NULL, ss.cell_m, ss.cell_w) AS cell,
  ss.email_address,
  ss.company, ss.contact_type
FROM (

       SELECT
         c.id, c.first_name, c.last_name,
         IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
         IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
         ea.email_address,
         a.name AS company,
         'Acquisti' AS contact_type
       FROM contacts AS c
         INNER JOIN accounts_contacts_imp_acq AS l ON c.id = l.contact_id
         INNER JOIN accounts AS a ON l.account_id = a.id
         INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
         LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
         LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
       WHERE c.deleted = 0
             AND a.deleted = 0
             AND
             ( ac.imp_status_c = 2
               OR ac.imp_status_c = 3
               OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
               OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
             )
             AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
       GROUP BY c.id
       ORDER BY c.id
) AS ss;


-- contact list with cell phone - ADMIN
SELECT
  ss.first_name, ss.last_name,
  IF(ss.cell_m IS NOT NULL, ss.cell_m, ss.cell_w) AS cell,
  ss.email_address,
  ss.company, ss.contact_type
FROM (

       SELECT
         c.id, c.first_name, c.last_name,
         IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
         IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
         ea.email_address,
         a.name AS company,
         'Amministrazione' AS contact_type
       FROM contacts AS c
         INNER JOIN accounts_contacts_imp_adm AS l ON c.id = l.contact_id
         INNER JOIN accounts AS a ON l.account_id = a.id
         INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
         LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
         LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
       WHERE c.deleted = 0
             AND a.deleted = 0
             AND
             ( ac.imp_status_c = 2
               OR ac.imp_status_c = 3
               OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
               OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
             )
             AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
       GROUP BY c.id
       ORDER BY c.id
     ) AS ss;

-- contact list with cell phone - COMMERCIALE
SELECT
  ss.first_name, ss.last_name,
  IF(ss.cell_m IS NOT NULL, ss.cell_m, ss.cell_w) AS cell,
  ss.email_address,
  ss.company, ss.contact_type
FROM (

       SELECT
         c.id, c.first_name, c.last_name,
         IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
         IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
         ea.email_address,
         a.name AS company,
         'Commerciale' AS contact_type
       FROM contacts AS c
         INNER JOIN accounts_contacts_imp_com AS l ON c.id = l.contact_id
         INNER JOIN accounts AS a ON l.account_id = a.id
         INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
         LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
         LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
       WHERE c.deleted = 0
             AND a.deleted = 0
             AND
             ( ac.imp_status_c = 2
               OR ac.imp_status_c = 3
               OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
               OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
             )
             AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
       GROUP BY c.id
       ORDER BY c.id
     ) AS ss;

-- contact list with cell phone - Direzione
SELECT
  ss.first_name, ss.last_name,
  IF(ss.cell_m IS NOT NULL, ss.cell_m, ss.cell_w) AS cell,
  ss.email_address,
  ss.company, ss.contact_type
FROM (

       SELECT
         c.id, c.first_name, c.last_name,
         IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
         IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
         ea.email_address,
         a.name AS company,
         'Direzione' AS contact_type
       FROM contacts AS c
         INNER JOIN accounts_contacts_imp_dir AS l ON c.id = l.contact_id
         INNER JOIN accounts AS a ON l.account_id = a.id
         INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
         LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
         LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
       WHERE c.deleted = 0
             AND a.deleted = 0
             AND
             ( ac.imp_status_c = 2
               OR ac.imp_status_c = 3
               OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
               OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
             )
             AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
       GROUP BY c.id
       ORDER BY c.id
     ) AS ss;

-- contact list with cell phone - Operativo
SELECT
  ss.first_name, ss.last_name,
  IF(ss.cell_m IS NOT NULL, ss.cell_m, ss.cell_w) AS cell,
  ss.email_address,
  ss.company, ss.contact_type
FROM (

       SELECT
         c.id, c.first_name, c.last_name,
         IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
         IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
         ea.email_address,
         a.name AS company,
         'Oprativo' AS contact_type
       FROM contacts AS c
         INNER JOIN accounts_contacts_imp_opr AS l ON c.id = l.contact_id
         INNER JOIN accounts AS a ON l.account_id = a.id
         INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
         LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
         LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
       WHERE c.deleted = 0
             AND a.deleted = 0
             AND
             ( ac.imp_status_c = 2
               OR ac.imp_status_c = 3
               OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
               OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
             )
             AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
       GROUP BY c.id
       ORDER BY c.id
     ) AS ss;






#
# SELECT
#   c.id, c.first_name, c.last_name,
#   IF(c.phone_mobile REGEXP '^3[0-9 -/.]*$', c.phone_mobile, NULL) AS cell_m,
#   IF(c.phone_work REGEXP '^3[0-9 -/.]*$', c.phone_work, NULL) AS cell_w,
#   ea.email_address,
#   a.name AS company,
#   'Acquisti' AS contact_type
# FROM contacts AS c
#   INNER JOIN accounts_contacts_imp_acq AS l ON c.id = l.contact_id
#   INNER JOIN accounts AS a ON l.account_id = a.id
#   INNER JOIN accounts_cstm AS ac ON a.id = ac.id_c
#   LEFT JOIN email_addr_bean_rel AS eab ON eab.bean_module = 'Contacts' AND eab.bean_id = c.id AND eab.primary_address = 1
#   LEFT JOIN email_addresses AS ea ON ea.id = eab.email_address_id AND ea.invalid_email = 0 AND ea.opt_out = 0
# WHERE c.deleted = 0
#       AND a.deleted = 0
#       AND
#       ( ac.imp_status_c = 2
#         OR ac.imp_status_c = 3
#         OR (ac.imp_status_c = 1 AND ac.gv_cont_tot_c > 0)
#         OR (ac.imp_status_c = 4 AND ac.gv_cont_tot_c > 0)
#       )
#       AND (c.phone_work REGEXP '^3[0-9 -/.]*$' OR c.phone_mobile REGEXP '^3[0-9 -/.]*$')
# GROUP BY c.id
# ORDER BY c.id
