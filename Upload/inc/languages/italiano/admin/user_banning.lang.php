<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: user_banning.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

// Tabs
$l['banning'] = "Controllo ban";
$l['banned_accounts'] = "Utenti bannati";
$l['banned_accounts_desc'] = "Qui puoi gestire gli account utente bannati dall'accesso alla board.";
$l['ban_a_user'] = "Banna un utente";
$l['ban_a_user_desc'] = "Qui puoi bannare un utente.";
$l['edit_ban'] = "Modifica il ban";
$l['edit_ban_desc'] = "Qui puoi modificare il motivo e la lunghezza dei ban attivi al momento.";
$l['banned_ips'] = "IP Bannati";
$l['disallowed_usernames'] = "Nomi utente vietati";
$l['disallowed_email_addresses'] = "Indirizzi e-mail vietati";
// Errors
$l['error_invalid_ban'] = "Ha selezionato un ban da modificare non valido.";
$l['error_invalid_username'] = "Il nome utente inserito non è valido o non esiste.";
$l['error_no_perm_to_ban'] = "Non hai il permesso per bannare questo utente.";
$l['error_already_banned'] = "Questo utente è già in un gruppo bannato e non puoi aggiungerlo ad un altro.";
$l['error_ban_self'] = "Non puoi bannere te stesso.";
$l['error_no_reason'] = "Non hai inserito il motivo del ban a questo utente.";
// Success
$l['success_ban_lifted'] = "Il ban selezionato è stato revocato.";
$l['success_banned'] = "Il nome utente selezionato è stato bannato.";
$l['success_ban_updated'] = "Il ban selezionato è stato aggiornato.";
$l['success_pruned'] = "I Messaggi e le discussioni dell'utente selezionato sono stati eliminati.";
// Confirm
$l['confirm_lift_ban'] = "Sei sicuro di voler revocare questo ban?";
$l['confirm_prune'] = "Sei sicuro di voler eliminare tutti i messaggi e le discussioni create da questo utente?";
//== Pages
//= Add / Edit
$l['ban_username'] = "Nome utente <em>*</em>";
$l['autocomplete_enabled'] = "Il completamento automatico è abilitato per questo campo.";
$l['ban_reason'] = "Motivo del ban";
$l['ban_group'] = "Gruppo bannato <em>*</em>";
$l['ban_group_desc'] = "Affinchè questo utente sia bannato deve essere spostato nel gruppo bannati.";
$l['ban_time'] = "Lunghezza del ban <em>*</em>";
//= Index
$l['user'] = "Utente";
$l['moderation'] = "Moderazione";
$l['ban_lifts_on'] = "Il ban scade il";
$l['time_left'] = "Tempo residuo";
$l['permenantly'] = "permanentemente";
$l['na'] = "N/A";
$l['for'] = "per";
$l['bannedby_x_on_x'] = "<strong>{1}</strong><br /><small>Bannato da {2} il {3} {4}</small>";
$l['lift'] = "Revoca";
$l['no_banned_users'] = "Non hai utenti bannati al momento.";
$l['prune_threads_and_posts'] = "Elimina messaggi &amp; discussioni";
// Buttons
$l['ban_user'] = "Banna utente";
$l['update_ban'] = "Aggiorna il ban";
?>