<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: forum_attachments.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */
 
// Tabs
$l['attachments'] = "Allegati";
$l['stats'] = "Statistiche";
$l['find_attachments'] = "Cerca allegati";
$l['find_attachments_desc'] = "Usa il sistema di ricerca allegati per trovare un file particolare allegato da un utente. Inizia a inserire i termini di ricerca qui sotto. Tutti i campi sono opzionali e non verranno inclusi nella ricerca se vuoti.";
$l['find_orphans'] = "Cerca allegati orfani";
$l['find_orphans_desc'] = "Gli allegati orfani sono gli allegati non presenti nel database o nel sistema. Questa utilità ti assiste nel trovare e eliminare gli allegati orfani.";
$l['attachment_stats'] = "Statistiche allegati";
$l['attachment_stats_desc'] = "Sotto puoi vedere le statistiche degli allegati del forum.";
// Errors
$l['error_nothing_selected'] = "Selezionare uno o più allegati da eliminare.";
$l['error_no_attachments'] = "Non ci sono allegati nel forum. Quando sarè presente un allegato potrai accedere a questa sezione.";
$l['error_not_all_removed'] = "Solo alcuni allegati orfani sono stati eliminati, gli altri non possono essere rimossi.";
$l['error_invalid_username'] = "Nome utente inserito non valido.";
$l['error_invalid_forums'] = "Uno o più inseriti non sono validi.";
$l['error_no_results'] = "Nessun allegato trovato con questi criteri di ricerca.";
$l['error_not_found'] = "Allegato no trovato nella cartella.";
$l['error_not_attached'] = "Allegati caricati più di 24 ore fa ma non collegati a nessun messaggio.";
$l['error_does_not_exist'] = "Discussione o messaggio per questo allegato non esistono.";
// Success
$l['success_deleted'] = "Gli allegati selezionati sono stati eliminati.";
$l['success_orphan_deleted'] = "Gli allegati orfani selezionati sono stati eliminati.";
$l['success_no_orphans'] = "Non hai allegati orfani nel forum.";
// Confirm
$l['confirm_delete'] = "Sei sicuro di voler eliminare questo allegato?";
// == Pages
// = Stats
$l['general_stats'] = "Statistiche generali";
$l['stats_attachment_stats'] = "Allegati - Statistiche allegato";
$l['num_uploaded'] = "<strong>No. allegati caricati</strong>";
$l['space_used'] = "<strong>Spazio usato dagli allegati</strong>";
$l['bandwidth_used'] = "<strong>Stima della banda usata</strong>";
$l['average_size'] = "<strong>Dimensione media degli allegati</strong>";
$l['size_attachments'] = "<span class=\"float_right\">Dimensione</span>Allegato";
$l['posted_by'] = "Inserito da";
$l['thread'] = "Discussione";
$l['downloads'] = "Scaricato";
$l['date_uploaded'] = "Data caricamento";
$l['popular_attachments'] = "I 5 allegati più popolari";
$l['largest_attachments'] = "I 5 allegati più grandi";
$l['users_diskspace'] = "I 5 utenti che usano la maggior parte dello spazio";
$l['username'] = "Nome utente";
$l['total_size'] = "Dimensione totale";
// = Orphans
$l['orphan_results'] = "Ricerca allegati orfani - Risultato";
$l['orphan_attachments_search'] = "Ricerca allegati orfani";
$l['reason_orphaned'] = "Motivo perchè orfano";
$l['reason_not_in_table'] = "Non allegato in tabella";
$l['reason_file_missing'] = "File allegato non trovato";
$l['reason_thread_deleted'] = "Discussione eliminata";
$l['reason_post_never_made'] = "Messaggio mai creato";
$l['unknown'] = "Sconosciuto";
$l['results'] = "Risultati";
$l['step1'] = "Step 1";
$l['step2'] = "Step 2";
$l['step1of2'] = "Step 1 di 2 - Scansione file di sistema";
$l['step2of2'] = "Step 2 di 2 - Scansione database";
$l['step1of2_line1'] = "Prego attendere, Si stanno scansionendo i file di sistema alla ricerca di allegati orfani.";
$l['step2of2_line1'] = "Prego attendere, Si stanno scansionendo il database alla ricerca di allegati orfani.";
$l['step_line2'] = "Sarai reindirizzato al prossimo step alla fine della ricerca.";
// = Attachments / Index
$l['index_find_attachments'] = "Allegati - Allegati trovati";
$l['find_where'] = "Dove cercare allegati...";
$l['name_contains'] = "Il nome file contiene";
$l['name_contains_desc'] = "Per ricercare tramite caratteri speciali inserisci *.[estensione file]. Esempio: *.zip.";
$l['type_contains'] = "Tipo di file contiene";
$l['forum_is'] = "Il forum è";
$l['username_is'] = "Nome utente è";
$l['more_than'] = "Maggiore di";
$l['greater_than'] = "Più grande di";
$l['is_exactly'] = "E' esattamente";
$l['less_than'] = "Minore di";
$l['date_posted_is'] = "Data inserimento è";
$l['days_ago'] = "giorni fà";
$l['file_size_is'] = "Dimensione file è";
$l['kb'] = "KB";
$l['download_count_is'] = "Contatore download è";
$l['display_options'] = "Opzioni visualizzazione";
$l['filename'] = "Nome file";
$l['filesize'] = "Dimensione file";
$l['download_count'] = "Contatore download";
$l['post_username'] = "Nome utente";
$l['asc'] = "Crescente";
$l['desc'] = "Decrescente";
$l['sort_results_by'] = "Ordina risultati per";
$l['results_per_page'] = "Risultati per pagina";
$l['in'] = "in ordine";
// Buttons
$l['button_delete_orphans'] = "Elimina orfani selezionati";
$l['button_delete_attachments'] = "Elimina allegati selezionati";
$l['button_find_attachments'] = "Trova gli allegati";
?>