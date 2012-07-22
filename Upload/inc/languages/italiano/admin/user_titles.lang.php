<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: user_titles.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

$l['user_titles'] = "Titoli utente";
$l['user_titles_desc'] = "Questa sezione consente la gestione dei titoli utente. I titoli utente sono assegnati in base al numero di messaggi inviati e permettono di visualizzare un numero di immagini \"stella\" variabile in base al numero di messaggi dell'utente.";
$l['add_new_user_title'] = "Aggiungi un nuovo titolo utente";
$l['add_new_user_title_desc'] = "Questa sezione permette di aggiungere un nuovo titolo utente. <i>Nota: questo <strong>non è</strong> il <u><a href=\"index.php?module=user/group_promotions\">sistema promozioni</a>.</u></i>";

$l['error_missing_title'] = "Non hai inserito un titolo per questo titolo utente";
$l['error_missing_posts'] = "Non hai inserito il numero minimo di messaggi per questo titolo utente";
$l['error_invalid_user_title'] = "Hai specificato un titolo utente non valido";

$l['success_user_title_created'] = "Il nuovo titolo utente è stato creato.";
$l['success_user_title_updated'] = "Il titolo utente è stato aggiornato.";
$l['success_user_title_deleted'] = "Il titolo utente specificato è stato cancellato.";

$l['title_to_assign'] = "Titolo da assegnare";
$l['title_to_assign_desc'] = "Questo titolo sarà mostrato sotto il nome utente nel caso non sia utilizzato un titolo utente personalizzato";
$l['minimum_posts'] = "Messaggi minimi";
$l['minimum_posts_desc'] = "Il numero minimo di messaggi che l'utente deve avere per ricevere questo titolo utente.";
$l['number_of_stars'] = "Numero di stelle";
$l['number_of_stars_desc'] = "Indica il numero di stelle da mostrare sotto il titolo utente. Scegli 0 per non visualizzare alcuna stella.";
$l['star_image'] = "Immagine stella";
$l['star_image_desc'] = "Se questo titolo utente prevede la visualizzazione di stelle, inserisci qui il percorso dell'immagine stella. Se vuoto, sarà mostrata l'immagine predefinita del gruppo utente. Utilizza {theme} per indicare la cartella immagini specifica del tema utilizzato da ogni utente.";
$l['save_user_title'] = "Salva titolo utente";
$l['edit_user_title'] = "Modifica titolo utente";
$l['edit_user_title_desc'] = "Questa sezione permette di modificare un titolo utente.";
$l['user_title_deletion_confirmation'] = "Sei sicuro di voler eliminare questo titolo utente?";
$l['manage_user_titles'] = "Gestione titolo utente";
$l['user_title'] = "Titolo utente";
$l['no_user_titles'] = "Al momento non hai definito alcun titolo utente";
?>