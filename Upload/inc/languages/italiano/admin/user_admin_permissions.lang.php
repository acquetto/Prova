<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: user_admin_permissions.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

$l['admin_permissions'] = "Permessi amministrativi";
$l['user_permissions'] = "Permessi per utente";
$l['user_permissions_desc'] = "Qui puoi gestire i permessi di amministrazione per singolo utente. Con queste impostazioni puoi inibire l'accesso di certi amministratori ad alcune aree del pannello di amministrazione.";
$l['group_permissions'] = "Permessi per gruppo";
$l['group_permissions_desc'] = "I permessi di amministrazione possono anche essere applicati ai gruppi utente che hanno il permesso di accedere all'ACP. Con queste impostazioni puoi inibire l'accesso di certi gruppi di amministratori ad alcune aree del pannello di amministrazione.";
$l['default_permissions'] = "Permessi predefiniti";
$l['default_permissions_desc'] = "I permessi predefiniti vengono attribuiti agli utenti in assenza di permessi individuali personalizzati o ereditati per l'appartenenza a gruppi amministrativi.";
$l['admin_permissions_updated'] = "I permessi di amministrazione sono stati aggiornati.";
$l['revoke_permissions'] = "Revoca permessi";
$l['edit_permissions'] = "Modifica permessi";
$l['set_permissions'] = "Imposta permessi";
$l['edit_permissions_desc'] = "Qui puoi limitare l'accesso a interi tab o pagine singole. La pagina principale rimane comunque accessibile a tutti gli amministratori.";
$l['update_permissions'] = "Aggiorna permessi";
$l['view_log'] = "Visualizza i log";
$l['permissions_type_group'] = "Tipo di permessi del gruppo";
$l['permissions_type_user'] = "Tipo di permessi dell'utente";
$l['no_group_perms'] = "Al momento non sono impostati permessi per il gruppo.";
$l['no_user_perms'] = "Al momento non sono impostati permessi per l'utente.";
$l['edit_user'] = "Modifica il profilo utente";
$l['using_individual_perms'] = "Sta usando permessi individuali";
$l['using_custom_perms'] = "Sta usando permessi personalizzati";
$l['using_group_perms'] = "Sta usando permessi di gruppo";
$l['using_default_perms'] = "Sta usando permessi predefiniti";
$l['last_active'] = "Ultima attività";
$l['user'] = "Utente";
$l['edit_group'] = "Modifica il gruppo";
$l['default'] = "Predefinito";
$l['group'] = "Gruppo";
$l['error_delete_super_admin'] = "Non puoi eseguire questa azione su questo utente perchè è un super amministratore.<br /><br />Per essere abilitato, devi aggiungere il tuo ID utente alla lista dei super amministratori nel file inc/config.php.";
$l['error_delete_no_uid'] = "Non hai inserito un ID di permessi di amministrazione utente/gruppo";
$l['error_delete_invalid_uid'] = "Non hai inserito un valido ID di permessi di amministrazione utente/gruppo";
$l['success_perms_deleted'] = "I permessi di amministrazione utente/gruppo sono stati revocati.";
$l['confirm_perms_deletion'] = "Sei sicuro di voler revocare questi permessi di amministrazione utente/gruppo?";
$l['confirm_perms_deletion2'] = "Sei sicuro di voler revocare i permessi a questo utente?";
?>