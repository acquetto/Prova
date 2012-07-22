<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: language.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */
 
/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'None';
$l['not_installed'] = 'Non installata';
$l['installed'] = 'Installata';
$l['not_writable'] = 'Non scrivibile';
$l['writable'] = 'scrivibile';
$l['done'] = 'fatto';
$l['next'] = 'Prossimo';
$l['error'] = 'Errore';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Ricontrolla';

$l['title'] = "Installazione guidata di MyBB";
$l['welcome'] = 'Benvenuto';
$l['license_agreement'] = 'Accettazione licenza';
$l['req_check'] = 'Controllo requisiti';
$l['db_config'] = 'Configurazione database';
$l['table_creation'] = 'Creazione tabelle';
$l['data_insertion'] = 'Inserimento dati';
$l['theme_install'] = 'Installazione tema';
$l['board_config'] = 'Configurazione board';
$l['admin_user'] = 'Utente amministratore';
$l['finish_setup'] = 'Fine setup';

$l['table_population'] = 'Riempimento tabelle';
$l['theme_installation'] = 'Inserimento tema';
$l['create_admin'] = 'Creazione utente amministratore';

$l['already_installed'] = "MyBB &egrave; gi&agrave; installato";
$l['mybb_already_installed'] = "<p>Benvenuto nell' installazione guidata di MyBB  {1}. MyBB ha rilevato una versione gia installa in questa cartella.</p>
<p>Fai una scelta tra le opzioni disponibili:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Aggiorna la mia copia di MyBB in {1} <span style=\"font-size: 80%; color: maroon;\">(Recommandato)</span></h3>
	<p>Questa opzione aggiorna la tua attuale copia di MyBB in MyBB {1}.</p>
	<p>Selezionando questa opzione manterrai i tuoi attuali forum, discussioni, messaggi, utenti e altre informazioni.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aggiorna a MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Installa una nuova copia di MyBB</h3>
	<p>Questa opzione provveder&agrave; a <span style=\"color: red;\">eliminare ogni forum esistente gi&agrave; installato</span> e ad installare una nuova copia di MyBB.</p>
	<p>Selezionare questa opzione per elimininare completamente la tua attuale installazione di MyBB e ripartire da zero.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Sei sicuro di voler installare una nuova copia di MyBB?\\n\\nQuesto eliminer&agrave; il tuo forum attuale. QUESTO PROCESSO NON E REVERSIBILE.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Installa MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB ha rilevato che stai usando la cartella \"Upload\" .</h3>
	<p>Questo non &egrave; consigliabile, Si raccomanda si caricare il contenuto della cartella \"Upload\" e non l'intera cartella.<br /><br />Per maggiori informazioni visita <a href=\"http://wiki.mybboard.net/index.php/Help:Upload_Directory\" target=\"_blank\">la pagina del wiki</a>.</p>
</div>";

$l['welcome_step'] = '<p>Benvenuto nell\' installazione guidata di MyBB {1}. Questa procedura installer&agrave; una nuova copia di MyBB sul tuo server.</p>
<p>Ora che hai caricato i file si dovr&agrave; creare il database e impostare la configurazione. Sotto vengono elencati i passi necessari alla installazione</p>
<ul>
	<li>Controllo dei requisiti di MyBB</li>
	<li>Configurazione del database</li>
	<li>Creazione delle tabelle</li>
	<li>Inserimento dati predefiniti</li>
	<li>Importazione del tema e templates predefiniti</li>
	<li>Creazione di un account amministratore per la gestione della board</li>
	<li>Configurazione impostazioni basilari</li>
</ul>
<p>Dopo che uno step &egrave; terminato, clicca su prossimo per andare allo step successivo.</p>
<p>Clicca "Prossimo" per vedere le condizioni di licenza di MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Invia statistiche anonime riguardo le specifiche del tuo server al team di MyBB</label> (<a href="http://wiki.mybboard.net/index.php/Anonymous_Statistics" style="color: #555;" target="_blank"><small>Quali infomazioni vengono inviate?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Cliccando prossimo, accetti i termini di licenza di MyBB elencati sopra.</strong></p>';


$l['req_step_top'] = '<p>Prima di poter installare MyBB, verranno controllati i requisiti minimi necessari al funzionamento.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Controllo requisiti</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Requisiti</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">versione PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Supporto estensioni DB:</td>
			<td class="last alt_col">{2}</td>
		<tr>
		<tr class="alt_row">
			<td class="first">Supporto estensioni transizione:</td>
			<td class="last alt_col">{3}</td>
		<tr>
			<td class="first">Estensioni PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">File di configurazione scrivibile:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">File delle impostazioni scrivibile:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Cartella Cache scrivibile:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Cartella caricamento file scrivibile:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Cartella caricamento avatar scrivibile:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Congratulazioni, hai tutto il necessario per utilizzare MyBB.</strong></p>
<p>Clicca su "Prossimo" per continuare nella procedura di installazione.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB Richiede PHP 4.1.0 o superiore per funzionare. Attualmente hai {1} installato.';
$l['req_step_error_dboptions'] = 'MyBB richiede una o più estensioni del database per funzionare. Il server non dispone di nessuna di queste.';
$l['req_step_error_xmlsupport'] = 'MyBB richieste che l\'estensione XML sia abilitata. Visita <a href="http://www.php.net/xml" target="_blank">PHP.net</a> per maggiori informazioni.';
$l['req_step_error_configdefaultfile'] = 'Il file di configurazione (inc/config.default.php) non &egrave; stato rinominato. rinomina manualmente il file <u>config.default.php</u> in <u>config.php</u> e abilitalo per la scrittura oppure contatta <a href="http://mybboard.net/support" targert="_blank">il supporto MyBB.</a> ufficiale oppure il <a href="http://mybboard.if/forum/" targert="_blank">il supporto Italiano di MyBB.</a>';
$l['req_step_error_configfile'] = 'il file di configurazione (inc/config.php) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_settingsfile'] = 'Il file delle impostazioni  (inc/settings.php) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_cachedir'] = 'La cartella cache (cache/) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_uploaddir'] = 'La cartella per il caricamento file (uploads/) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_avatardir'] = 'La cartella per il caricamento degli avatar (uploads/avatars/) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_cssddir'] = 'La cartella dei CSS (css/) non &egrave; scrivibile. Sistema i permessi <a href="http://wiki.mybboard.net/index.php/CHMOD%20Files" target="_blank">chmod</a> per abilitarlo alla scrittura.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Errore</h3>
<p>I requisiti minimi per MyBB non sono dipsonibili, controlla sotto i problemi riscontrati. La installazione di MyBB non puo continuare fino a quando non saranno disponibili tutti i requisiti minimi, sucessivamente riprova:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Per configurare il database per l\'utilizzo con MyBB hai bisogno dei dati di accesso. Puoi ottenere queste informazioni richiedendole al tuo host</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Configurazione database</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Impostazioni database</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Tipo di database:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Dopo che hai controllato i dati inseriti, clicca su "prossimo" per continuare.</p>';

$l['database_settings'] = "Impostazioni database";
$l['database_path'] = "Percorso database:";
$l['database_host'] = "Server Host del database:";
$l['database_user'] = "Nome utente del Database:";
$l['database_pass'] = "Password del Database:";
$l['database_name'] = "Nome del Database:";
$l['table_settings'] = "Impostazione tabelle";
$l['table_prefix'] = "Prefisso tabelle:";
$l['table_encoding'] = "Codifica tabelle:";

$l['db_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Si sono verificati uno o più errori durante il controllo del database, controlla sotto quali errori sono stati riscontrati:</p>
{1}
<p>Una volta corretti, continua con l\'installazione.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Hai selezionato un tipo di database non valido. Selezionane uno dalla lista sottostante.';
$l['db_step_error_noconnect'] = 'Non posso connettermi al database \'{1}\' con il nome utente e la password forniti. Sei sicuro che i dati host, nome utente e password siano corretti?';
$l['db_step_error_nodbname'] = 'Non posso selezionare il database \'{1}\'. Sei sicuro che esso sia presente e che il nome utente e password possano accedervi?';
$l['db_step_error_missingencoding'] = 'Non hai inserito il tipo di codifica. Seleziona il tipo di codifica per continuare. (Seleziona \'UTF-8 Unicode\' se non sai cosa scegliere)';
$l['db_step_error_sqlite_invalid_dbname'] = 'Non hai inserito il percorso relativo al database SQLite. Utilizza il percorso relativo (ex: /home/user/database.db) per il tuo database SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'Puoi solamente usare un underscore (_) e caratteri alfanumerici come prefisso per le tabelle. Inserisci un tipo di prefisso valido prima di continuare.';
$l['db_step_error_tableprefix_too_long'] = 'Puoi utilizzare massimo 40 caratteri per il prefisso tabelle. Seleziona un prefisso più breve.';

$l['tablecreate_step_connected'] = '<p>Connessione al database e la tabella eseguita con successo.</p>
<p>Tipo di database: {1} {2}</p>
<p>Le tabelle di MyBB ora verranno create.</p>';
$l['tablecreate_step_created'] = 'Creata tabella {1}...';
$l['tablecreate_step_done'] = '<p>Tutte le tabelle sono state create, clicca su "prossimo" per inserire i dati.</p>';

$l['populate_step_insert'] = '<p>Ora che le tabelle basilari sono state create, verranno inseriti i dati predefiniti.</p>';
$l['populate_step_inserted'] = '<p>I dati sono stati inseriti correttamente nel database. Clicca su "prossimo" per inserire il tema e i templates predefiniti di MyBB.</p>';


$l['theme_step_importing'] = '<p>Lettura e importazione del tema e dei templates...</p>';
$l['theme_step_imported'] = '<p>Il tema e i templates predefiniti sono stati importati. Clicca su "prossimo" per inserire i dati della tua Board.</p>';


$l['config_step_table'] = '<p>Ora dovrai inserire le impostazioni basilari per il tuo forum quali nome del forum, indirizzo, dettagli del tuo sito, i dati per i tuoi "cookie". I dati inseriti potranno essere modificati sucessivamente dal pannello di amministrazione.</p>
		<div class="border_wrapper">
			<div class="title">Configurazione della Board</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Dettagli del Forum</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Nome forum:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">Percorso forum (senza lo slash finale):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Dettagli sito</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Nome sito:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">Percorso sito:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Impostazione dei Cookie <a title="Whats this?" target="_blank" href="http://wiki.mybboard.net/index.php/Cookie_Settings">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Dominio dei Cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Percorso dei Cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Dettagli contatto (visibili nel footer)</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Email di contatto:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
			</table>
		</div>

	<p>Una volta inseriti i dati clicca su "prossimo" per procedere allo step successivo.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Sono stati rilevati alcuni errori nei dati di configurazione, controlla quali qui sotto:</p>
{1}
<p>Una volta corretti, clicca su "prossimo" per continuare.</p>
</div>';
$l['config_step_error_url'] = 'Non hai inserito il percorso del forum.';
$l['config_step_error_name'] = 'Non hai inserito il nome del forum.';


$l['admin_step_setupsettings'] = '<p>Caricamento impostazioni di base...</p>';
$l['admin_step_insertesettings'] = '<p>Inseriti {1} in {2} gruppi.</p>
<p>Aggiornamento impostazioni.</p>';
$l['admin_step_insertedtasks'] = '<p>Inseriti {1} task pianificati.</p>';
$l['admin_step_insertedviews'] = '<p>Inserita {1} vista di amministrazione.</p>';
$l['admin_step_createadmin'] ='<p>Devi creare il primo amministratore per poter effettuare il login e gestire la tua copia di MyBB. Inserisci i dati qui sotto per creare il primo utente.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Dettagli amministratore</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Dettagli utente</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Nome utente:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" autocomplete="off" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off"  /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Reinserisci la Password:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Dettagli contatto</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Indirizzo email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Una volta inseriti i dati clicca su "prossimo" per continuare.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Errore</h3>
<p>Sono stati rilevati alcuni errori durante la configurazione, controlla quali qui sotto:</p>
{1}
<p>Una volta corretti, clicca su "prossimo" per continuare.</p>
</div>';
$l['admin_step_error_nouser'] = 'Non hai inserito nessun nome utente.';
$l['admin_step_error_nopassword'] = 'Non hai inserito nessuna password.';
$l['admin_step_error_nomatch'] = 'Le password inserite non coincidono.';
$l['admin_step_error_noemail'] = 'Non hai inserito nessun indirizzo email.';

$l['done_step_usergroupsinserted'] = "<p>Importazione gruppi utente...";
$l['done_step_admincreated'] = '<p>Creazione amministratore...';
$l['done_step_adminoptions'] = '<p>Creazione permessi amministratore...';
$l['done_step_cachebuilding'] = '<p>Creazione della cache...';
$l['done_step_success'] = '<p class="success">La tua copia di MyBB &egrave; stata installata e configurata con successo.</p>
<p>Il gruppo di MyBB per il tuo supporto e per l\'installazione della Board e ti invita a partecipare alla community di MyBB per ricevere supporto e informazioni.</p>';
$l['done_step_locked'] = '<p>La procedura di installazione &egrave; stata bloccata. Per riaprirla dovrai eliminare il file \'lock\' dalla cartella di installazione.</p><p>Ora puoi andare alla tua nuova copia di <a href="../index.php">MyBB</a> oppure al <a href="../admin/index.php">Pannello di amministrazione</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">Si consiglia di eliminare questa cartella di MyBB.</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>Assicurati di iscriverti alla mailing list per gli aggiornamenti!</strong></p><p>Quando viene rilasciata una nuova copia di MyBB, nuove opzioni o aggiornamenti di sicurezza , riceverai una email con informativa.</p><p>Questo ti permette di assicurarti di avere sempre l\'ultima versione aggiornata di MyBB!</p><p><a href="http://www.mybboard.net/mailinglist.php">Sottoscrivi mailing list per gli aggiornamenti!</a></p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Processo di aggiornamento";
$l['upgrade_welcome'] = "<p>Benvenuto nell\'aggiornamento guidato di MyBB {1}.</p><p>Prima di continuare, assicurati di sapere quale versione di MyBB stai attualmente utilizzando MyBB perch&egrave; dovrai selezzionarla nella lista sottostante.</p><p><strong>Si raccomanda di effettuare un backup del database prima di procedere</strong> in modo che in caso di problemi si possa ripristinare la versione precedente.</p><p>Ti basta fare click su prossimo per iniziare il processo. Il tempo impiegato dipende dalla dimensione del tuo forum.</p><p>Una volta che sei pronto, seleziona la tua versione di MyBB e clicca su prossimo.</p>";
$l['upgrade_templates_reverted'] = 'Aggiornamento Templates';
$l['upgrade_templates_reverted_success'] = "<p>Tutti i templates sono stati aggiornati alla nuova versione. Seleziona prossimo per continuare il processo.</p>";
$l['upgrade_settings_sync'] = 'Sincronizzazione impostazioni';
$l['upgrade_settings_sync_success'] = "<p>Le impostazioni della board sono state sincronizzate con la nuova versione di MyBB.</p><p>{1} nuove impostazioni sono state inserite nel gruppo {2} .</p><p>Clicca su \"prossimo\" per terminare il processo.</p>";
$l['upgrade_datacache_building'] = 'Ricostruzione Cache dei dati';
$l['upgrade_building_datacache'] = '<p>Ricostruzione cache\'s...';
$l['upgrade_continue'] = 'Clicca su "prossimo" per continuare il processo';
$l['upgrade_locked'] = "<p>La tua installazione &egrave; bloccata. Per sbloccare l'installazione elimina il file 'lock' da questa cartella.</p><p>Ora puoi visualizzare la tua nuova versione di <a href=\"../index.php\">MyBB</a> o andare al <a href=\"../{1}/index.php\">Pannello di amministrazione</a>.</p>";
$l['upgrade_removedir'] = 'Si consiglia di rimuovere questa cartella prima di utilizzare la tua copia aggiornata di MyBB.';
$l['upgrade_congrats'] = "<p>Congratulazioni, la tua copia di MyBB &egrave; stata aggiornata a {1}.</p>{2}<p><strong>Ed ora?</strong></p><ul><li>Utilizza la funzione 'cerca aggiornamenti templates' nel pannello di amministrazione per trovare le nuove maschere e poter aggiornare quelle presenti.</li><li>Questo per garantire il corretto funzionamento della tua Board.</li></ul>";
$l['upgrade_template_reversion'] = "Avvertimento aggiornamento templates";
$l['upgrade_template_reversion_success'] = "<p>Tutte le modifiche al database sono state svolte con successo.</p><p>Questo aggiornamento richiede di aggiornare i templates presenti e quelli personalizzati per garantire il corretto funzionamento della board.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Invia statistiche anonime riguardo le specifiche del tuo server al team di MyBB</label> (<a href=\"http://wiki.mybboard.net/index.php/Anonymous_Statistics\" style=\"color: #555;\" target=\"_blank\"><small>Quali informazioni vengono inviate?</small></a>)</p>";

/* ERROR MESSAGES */
$l['locked'] = 'La cartella di installazione &egrave; bloccata, elimina il file \'lock\' dalla cartella di installazione per continuare';
?>