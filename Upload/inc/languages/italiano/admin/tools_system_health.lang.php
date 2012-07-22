<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: tools_system_health.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

$l['system_health'] = "Stato del sistema";
$l['system_health_desc'] = "Qui puoi visualizzare informazioni sullo stato del sistema.";
$l['utf8_conversion'] = " Conversione a UTF-8";
$l['utf8_conversion_desc'] = "Stai per convertire una tabella del database nel formato UTF-8. Questo processo potrebbe durare anche diverse ore in base alle dimensioni del forum e di questa tabella. Quando il processo sarà completato, sarai riportato alla pagina principale della conversione UTF-8.";
$l['utf8_conversion_desc2'] = "Questo tool controlla le tabelle del database per assicurarsi che siano in formato UTF-8 e consente di convertirle se non lo sono.";
$l['convert_all'] = "Converti Tutte";
$l['converting_to_utf8'] = "MyBB sta convertendo la tabella \"{1}\" in codifica di lingua UTF-8 da codifica {2}.";
$l['convert_to_utf8'] = "Stai per convertire la tabella \"{1}\" in codifica di lingua UTF-8 da codifica {2}.";
$l['convert_all_to_utf'] = "Stai per convertire TUTTE le tabelle in codifica di lingua UTF-8 da codifica {1}.";
$l['please_wait'] = "Attendere prego...";
$l['converting_table'] = "Convertendo le tabelle:";
$l['convert_table'] = "Converti tabella";
$l['convert_tables'] = "Converti tutte le tabelle";
$l['convert_database_table'] = "Converti una tabella del database";
$l['convert_database_tables'] = "Converti tutte le tabelle del database";
$l['table'] = "Tabella";
$l['status'] = "Stato";
$l['convert_now'] = "Converti ora";
$l['totals'] = "Totali";
$l['attachments'] = "Allegati";
$l['total_database_size'] = "Dimensione totale del database";
$l['attachment_space_used'] = "Spazio usato per gli allegati";
$l['total_cache_size'] = "Dimensione totale cache";
$l['estimated_attachment_bandwidth_usage'] = "Banda approssimativamente utilizzata per gli allegati";
$l['max_upload_post_size'] = "Dimensioni massime upload / post";
$l['average_attachment_size'] = "Dimensione media allegati";
$l['stats'] = "Statistiche";
$l['task'] = "Task";
$l['run_time'] = "Istante esecuzione";
$l['next_3_tasks'] = "Prossimi 3 task";
$l['backup_time'] = "Data backup";
$l['no_backups'] = "Attualmente non ci sono backup esistenti.";
$l['existing_db_backups'] = "Backup esistenti del database";
$l['writable'] = "Scrittura abilitata";
$l['not_writable'] = "Scrittura non abilitata";
$l['please_chmod_777'] = "Cambiare i permessi (CHMOD) a 777.";
$l['chmod_info'] = "Cambia le impostazioni CHMOD secondo quelle specificate per i file in basso. Per maggiori informazioni sul CHMODing, guarda";
$l['file'] = "File";
$l['location'] = "Posizione";
$l['settings_file'] = "File delle impostazioni";
$l['config_file'] = "File di configurazione";
$l['file_upload_dir'] = "Cartella di upload";
$l['avatar_upload_dir'] = "Cartella di upload degli avatar";
$l['language_files'] = " File della lingua";
$l['backup_dir'] = "Cartella dei backup";
$l['cache_dir'] = "Cartella della cache";
$l['themes_dir'] = "Cartella dei temi";
$l['chmod_files_and_dirs'] = "CHMOD file e cartelle";
$l['notice_process_long_time'] = "Questo processo potrebbe durare anche diverse ore in base alle dimensioni del tuo forum e di questa tabella.";
$l['error_chmod'] = "dei file e cartelle richieste non hanno impostazioni CHMOD corrette.";
$l['error_invalid_table'] = "La tabella specificata non esiste.";
$l['error_db_encoding_not_set'] = "L'installazione di MyBB attuale non consente ancora l'utilizzo di questo tool. Leggi <a href=\"http://wiki.mybboard.net/index.php/UTF8_Setup\">il wiki</a> per maggiori informazioni su come configurare il sistema.";
$l['error_not_supported'] = "Il tuo database engine attuale non è supportato dal Tool di Conversione UTF-8.";
$l['success_all_tables_already_converted'] = "Tutte le tabelle sono state convertite o sono gia nel formato UTF-8.";
$l['success_table_converted'] = "La tabella \"{1}\" è stata convertita in UTF-8.";
$l['success_chmod'] = "Tutti i seguenti file e cartelle presentano impostazioni CHMOD corrette.";
?>