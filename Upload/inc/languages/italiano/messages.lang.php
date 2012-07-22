<?PHP
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: messages.lang.php 73 2010-12-19 12:29:58Z kimi $
 *
 */
 
$l['click_no_wait'] = "Clicca qui se non vuoi aspettare.";
$l['redirect_return_forum'] = "<br /><br />In Alternativa, <a href=\"{1}\">Torna al Forum</a>.";
$l['redirect_emailsent'] = "Il tuo messaggio e-mail è stato inviato con successo.";
$l['redirect_loggedin'] = "Hai eseguito il login con successo<br />Sarai reindirizzato nella pagina da cui sei arrivato.";
$l['error_invalidpworusername'] = "Hai inserito un nome utente o password non validi. <br /><br />Se hai dimenticato la password <a href=\"member.php?action=lostpw\">richiedine una nuova</a>.";
$l['error_incompletefields'] = "Sembra che hai lasciato vuoti uno o più campi obbligatori. Per favore torna indietro e riempi i campi richiesti.";
$l['error_alreadyuploaded'] = "Sembra che hai già  caricato lo stesso file (giudicando dal nome del file e dalla sua grandezza) in questo messaggio. Per favore scegli un file differente da allegare.In alternativa puoi cliccare su \"Aggiorna allegato\".";
$l['error_nomessage'] = "Spiacenti, non possiamo procedere in quanto non hai inserito un messaggio valido. Per favore torna indietro ed inseriscilo.";
$l['error_invalidemail'] = "Hai inserito un indirizzo e-mail non valido.";
$l['error_nomember'] = "L'utente specificato non è valido oppure è inesistente.";
$l['error_maxposts'] = "Spiacenti, ma hai raggiunto il tuo limite giornaliero per i messaggi. Per favore aspetta fino a domani per inviare altri messaggi o contatta l'amministratore.<br /><br />Il limite massimo di messaggi che puoi inviare in un giorno è {1}";
$l['error_nohostname'] = "Nessun hostname è stato trovato per l'indirizzo IP che hai inserito.";
$l['error_invalidthread'] = "La discussione specificata non esiste.";
$l['error_invalidpost'] = "Il messaggio specificato non esiste.";
$l['error_invalidattachment'] = "L'allegato specificato non esiste.";
$l['error_invalidforum'] = "Forum non valido";
$l['error_closedinvalidforum'] = "Non puoi inviare messaggi in questo forum perchè il forum è chiuso, oppure perchè è una categoria.";
$l['error_attachtype'] = "Il tipo di file che hai allegato non è permesso. Per favore rimuovi l'allegato o scegli un tipo di file differente.";
$l['error_attachsize'] = "Il file che hai allegato è troppo grande. La dimensione massima per questo tipo di file è {1} KB.";
$l['error_uploadsize'] = "Il file che hai caricato è troppo grande.";
$l['error_uploadfailed'] = "Il caricamento del file è fallito. Per favore scegli un file valido e prova ancora.";
$l['error_uploadfailed_detail'] = "Dettagli Errore: ";
$l['error_uploadfailed_php1'] = "Errore PHP: Il file caricato eccede le direttive di exceeded upload_max_filesize nel file php.ini. Per favore contatta l'amministratore del forum per questo errore.";
$l['error_uploadfailed_php2'] = "Il file caricato eccede la grandezza massima specificata.";
$l['error_uploadfailed_php3'] = "Il file è stato caricato solo parzialmente.";
$l['error_uploadfailed_php4'] = "Nessun file è stato caricato.";
$l['error_uploadfailed_php6'] = "Errore PHP: Cartella temporanea mancante. Per favore contatta l'amministratore del forum per questo errore.";
$l['error_uploadfailed_php7'] = "Errore PHP: Scrittura del file sul disco fallita. Per favore contatta l'amministratore del forum per questo errore.";
$l['error_uploadfailed_phpx'] = "Errore PHP, codice errore: {1}. Per favore contatta l'amministratore del forum per questo errore.";
$l['error_uploadfailed_nothingtomove'] = "è stato specificato un file non valido, quindi il file caricato non può essere spostato nella sua destinazione.";
$l['error_uploadfailed_movefailed'] = "C'è stato un problema durante lo spostamento del file caricato nella sua destinazione.";
$l['error_uploadfailed_lost'] = "L'allegato non può essere trovato sul server.";
$l['error_emailmismatch'] = "Gli indirizzi e-mail che hai inserito non corrispondono. Per favore torna indietro e riprova.";
$l['error_nopassword'] = "Non hai inserito una password valida.";
$l['error_usernametaken'] = "Il nome utente che hai scelto è già registrato.";
$l['error_nousername'] = "Non hai inserito un nome utente";
$l['error_invalidusername'] = "Il nome utente che hai inserito non sembra essere valido.";
$l['error_invalidpassword'] = "La password che hai inserito non è corretta. Se hai dimenticato la tua password, <a href=\"member.php?action=lostpw\">clicca qui</a>. Altrimenti, torna indietro e riprova.";
$l['error_postflooding'] = "Siamo spiacenti ma non possiamo inviare il tuo messaggio. L'amministratore ha specificato che sei autorizzato ad inviare un messaggio ogni {1} secondi.";
$l['error_nopermission_guest_1'] = "Non hai effettuato il login oppure non hai i permessi per visualizzare questa pagina. Questo può dipendere da una delle seguenti ragioni:";
$l['error_nopermission_guest_2'] = "Non hai fatto il login oppure non sei registrato. Per favore usa il modulo alla fine di questa pagina per fare il login.";
$l['error_nopermission_guest_3'] = "Non hai i permessi per accedere a questa pagina. Stai cercando di accedere alle pagine di amministrazione o ad una risorsa a cui non dovresti? Controlla nelle regole del forum se sei autorizzato ad eseguire questa azione.";
$l['error_nopermission_guest_4'] = "Il tuo account potrebbe essere stato disabilitato da un amministratore, o potrebbe essere in attesa di attivazione.";
$l['error_nopermission_guest_5'] = "Hai raggiunto questa pagina in maniera diretta anzichè utilizzare l'appropriato form o link.";
$l['login'] = "Login";
$l['need_reg'] = "Vuoi registrarti?";
$l['forgot_password'] = "Hai dimenticato la tua password?";
$l['error_nopermission_user_1'] = "Non hai i permessi per accedere a questa pagina. Questo può dipendere da una delle seguenti ragioni:";
$l['error_nopermission_user_ajax'] = "Non hai i permessi per accedere a questa pagina.";
$l['error_nopermission_user_2'] = "Il tuo account è stato sospeso oppure è bannato dall'accedere a questa risorsa.";
$l['error_nopermission_user_3'] = "Non ha i permessi per accedere a questa pagina. Stai cercando di accedere alle pagine di amministrazione o ad una risorsa a cui non dovresti? Controlla nelle regole del forum se sei autorizzato ad eseguire questa azione.";
$l['error_nopermission_user_4'] = "Il tuo account è in attesa di attivazione o moderazione.";
$l['error_nopermission_user_5'] = "Hai raggiunto questa pagina in maniera diretta anzichè utilizzare l'appropriato form o link.";
$l['error_nopermission_user_resendactivation'] = "Reinvio Codice di Attivazione";
$l['error_nopermission_user_username'] = "Sei attualmente collegato con il seguente nome utente: '{1}'";
$l['logged_in_user'] = "Utente collegato";
$l['error_too_many_images'] = "Troppe Immagini.";
$l['error_too_many_images2'] = "Spiacenti, ma non possiamo inviare il tuo messaggio perchè contiene troppe immagini. Per favore rimuovi alcune immagini dal tuo messaggio per continuare.";
$l['error_too_many_images3'] = "<b>Nota:</b> Il numero massimo di immagini per messaggio è";
$l['error_attach_file'] = "Errore Cercando di Allegare il  File";
$l['please_correct_errors'] = "Per favore correggi i seguenti errori prima di continuare:";
$l['error_reachedattachquota'] = "Spiacenti ma non puoi allegare questo file in quanto hai raggiunto il limite per i tuoi allegati di {1}";
$l['error_invaliduser'] = "L'utente specificato non è valido oppure è inesistente.";
$l['error_invalidaction'] = "Azione non valida";
$l['error_messagelength'] = "Spiacenti, il tuo messaggio è troppo lungo e non può essere inviato. Per favore accorcia il tuo messaggio e riprova.";
$l['error_message_too_short'] = "Spiacenti, il tuo messaggio è troppo corto e non può essere inviato.";
$l['failed_login_wait'] = "Hai fallito tutti i tuoi tentativi di login, a disposizione. Ora devi attendere {1}h {2}m {3}s prima di poter ritentare il login.";
$l['failed_login_again'] = "<br/>Hai ancora <strong>{1}</strong> tentativi di login, a disposizione.";
$l['error_max_emails_day'] = "Non puoi usare la funzionalità  'Invia discussione ad un amico' o la 'E-mail ad utente' perchè hai già esaurito tutta la tua quota di {1} messaggi inviabili in 24 ore.";
$l['emailsubject_lostpw'] = "Reset della Password di {1}";
$l['emailsubject_passwordreset'] = "Nuova password di {1}";
$l['emailsubject_subscription'] = "Nuova Risposta a {1}";
$l['emailsubject_randompassword'] = "La tua Password di {1}";
$l['emailsubject_activateaccount'] = "Attivazione Account per {1}";
$l['emailsubject_forumsubscription'] = "Nuova Discussione in {1}";
$l['emailsubject_reportpost'] = "Messaggio Segnalato a {1}";
$l['emailsubject_reachedpmquota'] = "Hai Raggiunto il Limite di Messaggi Privati di {1}";
$l['emailsubject_changeemail'] = "Cambio indirizzo e-mail di {1}";
$l['emailsubject_newpm'] = "Nuovo Messaggio Privato di {1}";
$l['emailsubject_sendtofriend'] = "Pagine Web interessanti di {1}";
$l['emailbit_viewthread'] = "... (visita la discussione per leggere di più..)";
$l['email_lostpw'] = "{1},

Per poter completare il reset della password del tuo account {2}, devi andare, tramite il tuo browser, all'indirizzo URL segnalato di seguito.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Se il link sopraindicato non dovesse funzionare correttamente, vai a

{3}/member.php?action=resetpassword

Dovrai inserire le seguenti informazioni:
Nome Utente: {1}
Codice di Attivazione: {5}

Grazie,
Lo Staff di {2}";
$l['email_reportpost'] = "{1} da {2} ha segnalato questo post:

{3}
{4}/{5}

Il motivo della segnalazione:
{7}

Questo messaggio è stato mandato a tutti i moderatori di questo forum, o a tutti gli amministratori e super moderatori se non ci sono moderatori.

controlla il post quanto prima possibile.";
$l['email_passwordreset'] = "{1},

La tua password è {2} stata ripristinata.

La tua Nuova Password è: {3}

Hai bisogno di questa password per entrare nel forum.

Una volta entrato potrai cambiarla andando nel Pannello di Controllo Utente.

Grazie,
Lo Staff di {2}";
$l['email_randompassword'] = "{1},

Grazie per esserti registrato su {2}. Qui sotto ci sono il tuo nome utente e la password generata in modo casuale. Per fare il login a {2}, hai bisogno di questi dettagli.

Nome Utente: {3}
Password: {4}

è raccomandato che cambi la tua password subito dopo il login. Puoi farlo andando nel Pannello di Controllo Utente e selezionando Cambia Password nel menu a sinistra.

Grazie,
Lo Staff di {2} ";
$l['email_sendtofriend'] = "Ciao,

{1} da {2} pensa che tu possa essere interessato alla lettura di questa pagina web:

{3}

{1} ha incluso il seguente messaggio:
------------------------------------------
{4}
------------------------------------------

Grazie,
Lo Staff di{2}
";
$l['email_forumsubscription'] = "{1},

{2} ha appena iniziato una nuova discussione in {3}
Questo è un forum a cui ti sei iscritto il {4}.

La discussione è {5}

Qui c'è un'anteprima del messaggio:
--
{6}
--

Per vedere la discussione completa, puoi andare al seguente indirizzo URL:
{7}/{8}

Ci potrebbero essere altre nuove discussioni e risposte ma non riceverai altre notifiche finchè non visiterai di nuovo la board.

Grazie,
Lo Staff di {4}

------------------------------------------
Informazioni per annullare la sottoscrizione:

Se non vuoi ricevere altre notifiche riguardanti le nuove discussioni in questo forum, visita il seguente indirizzo URL:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";
$l['email_activateaccount'] = "{1},

Per completare il processo di registrazione su {2}, devi andare al seguente indirizzo URL.

{3}/member.php?action=activate&uid={4}&code={5}

Se il link sopraindicato non dovesse funzionare correttamente, vai su

{3}/member.php?action=activate

Dovrai inserire le seguenti informazioni:
Nome Utente: {1}
Codice di Attivazione: {5}

Grazie,
Lo Staff di {2}";
$l['email_subscription'] = "{1},

{2} ha appena risposto alla discussione a cui ti sei sottoscritto il {3}. La discussione si intitola {4}.

Qui c'è un'anteprima del messaggio:
--
{5}
--

Per vedere la discussione completa, puoi andare al seguente indirizzo URL:
{6}/{7}

Ci potrebbero essere altre nuove discussioni e risposte ma non riceverai altre notifiche finchè non visiterai di nuovo la board.

Grazie,
Lo Staff di {3}

------------------------------------------
Informazioni per annullare la sottoscrizione::

Se non vuoi ricevere altre notifiche riguardanti le risposte a questa discussione, visita il seguente indirizzo URL
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

Questa è un'e-mail automatica da {2} per informarti che hai raggiunto il limite di capacità  nella casella In Arrivo dei tuoi Messaggio Privati.

Uno o più utenti hanno cercato di inviarti dei messaggi privati e non hanno potuto per questo motivo.

Per favore cancella alcuni messaggi privati che sono attualmente salvati e ricordati inoltre di cancellarli dal 'Cestino'.

Grazie,
Lo Staff di {2}
{3}";
$l['email_changeemail'] = "{1},

Abbiamo ricevuto una richiesta il {2} per cambiare il tuo indirizzo e-mail (guarda i dettagli sottostanti).

Vecchio Indirizzo Email: {3}
Nuovo Indirizzo Email: {4}

Se questi cambiamenti sono corretti, per favore completa il processo di validazione su {2} andando al seguente indirizzo URL.

{5}/member.php?action=activate&uid={8}&code={6}

Se il link sopraindicato non dovesse funzionare correttamente, vai su

{5}/member.php?action=activate

Dovrai inserire le seguenti informazioni:
Nome Utente: {7}
Codice di Attivazione: {6}

Se scegli di non confermare il tuo nuovo indirizzo e-mail, il tuo profilo non sarà  aggiornato e conterrà  l'indirizzo e-mail esistente.

Grazie,
Lo Staff di {2}
{5}";
$l['email_newpm'] = "{1},

Hai ricevuto un nuovo messaggio privato su {3} da {2}. Per vedere questo messaggio, puoi andare su questo link:

{4}/private.php

Per favore nota che non riceverai future notifiche dei nuovi messaggi a meno che non visiti {3}.

Puoi disabilitare la notifica dei nuovi messaggi nella pagina delle Opzioni dell'Account:

{4}/usercp.php?action=options

Grazie,
Lo Staff di {3}
{4}";
$l['email_emailuser'] = "{1},

{2} da {3} ti ha mandato il seguente messaggio:
------------------------------------------
{5}
------------------------------------------

Grazie,
lo Staff di {3}
{4}

------------------------------------------
Non vuoi ricevere messaggi dagli altri utenti?

Se non vuoi che altri utenti possano mandarti e-mail vai al pannello di controllo utente e spunta l'opzione 'Nascondi la tua mail agli altri utenti':
{4}/usercp.php?action=options

------------------------------------------";
 ?>