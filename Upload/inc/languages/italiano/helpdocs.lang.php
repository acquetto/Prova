<?PHP
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: helpdocs.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

 
// Help Document 1
$l['d1_name'] = "Registrazione utente";
$l['d1_desc'] = "Vantaggi e privilegi della registrazione.";
$l['d1_document'] = "Alcune parti di questo forum posso richiedere che tu sia registrato e abbia eseguito il login. La registrazione è gratuita e necessita di pochi minuti per essere completata.
<br /><br />Ti consigliamo di registrarti! Una volta fatto potrai inviare messaggi, modificare le tue preferenze e modificare il tuo profilo.
<br /><br />Alcune delle funzionalità che in genere richiedono la registrazione sono: sottoscrizioni, preferiti, selezione degli stili, accesso al tuo blocco appunti e invio e-mail tra membri.";
// Help Document 2
$l['d2_name'] = "Aggiornamento profilo";
$l['d2_desc'] = "Cambiare le informazioni su di te.";
$l['d2_document'] = "In qualunque momento potrai decidere di aggiornare alcune delle informazioni su di te come: i dati sulla messaggistica istantanea, la tua password, o il tuo indirizzo e-mail. Puoi modificare ognuna di queste informazioni dal tuo pannello di controllo utente. Per accedevi, clicca semplicemente sul link in alto di qualsiasi pagina, 'Pannello di Controllo Utente'. Da là , scegli 'Modifica Profilo' e cambia o aggiorna ciò che desideri, quindi clicca sul pulsante di salvataggio situato nella parte bassa della pagina per rendere effettive le modifiche.";
// Help Document 3
$l['d3_name'] = "Uso dei cookie in MyBBoard";
$l['d3_desc'] = "MyBBoard utilizza i cookie per salvare alcune informazioni circa la tua registrazione.";
$l['d3_document'] = "MyBBoard fa uso dei cookie per tenere traccia delle informazioni sul tuo login se sei registrato o sulla tua ultima visita se non lo sei.
<br /><br />I cookie sono piccoli documenti di testo salvati sul tuo computer dal browser che usi; i cookie impostati da questo forum possono essere utilizzati solo da questo sito e non costituiscono un rischio per la tua sicurezza.
<br /><br />I cookie di questo forum tengono inoltre traccia delle ultime discussioni che hai letto e il momento in cui l'hai fatto.
<br /><br />Per cancellare tutti i cookie impostati da questa board, puoi cliccare <a href='misc.php?action=clearcookies'>qui</a>.";
// Help Document 4
$l['d4_name'] = "Login e logout";
$l['d4_desc'] = "Come eseguire il login e il logout.";
$l['d4_document'] = "Quando esegui il login, imposti un cookie sul tuo computer in modo tale da poter navigare i forum senza dover reinserire il nome utente e la password ogni volta. Il Logout cancella tale cookie per fare in modo che nessun altro possa navigare sul forum con il tuo account.
<br /><br />Per eseguire il Login, clicca semplicemente il link in alto nella pagina del forum. Per eseguire il Logout, clicca il link per il logout nello stesso posto. Nel caso tu non riesca a fare il logout, puoi ottenere lo stesso effetto eliminando i cookie sul tuo computer.";
// Help Document 5
$l['d5_name'] = "Inviare una nuova discussione";
$l['d5_desc'] = "Iniziare una nuova discussione in un forum.";
$l['d5_document'] = "Quando entri in un forum di tuo interesse e vuoi creare una nuova discussione, scegli il pulsante in alto o in basso segnato con 'Nuova Discussione'. Ricorda che potresti non avere il permesso di inviare una nuova discussione in ogni forum, poich&eacute; l'amministratore potrebbe aver riservato solo allo staff l'invio dei messaggi in un determinato forum, o aver chiuso l'intero forum.";
// Help Document 6
$l['d6_name'] = "Inviare una risposta";
$l['d6_desc'] = "Rispondere ad una discussione in un forum.";
$l['d6_document'] = "Durante la tua visita, potresti incontrare una discussione alla quale vorresti rispondere. Per farlo, clicca semplicemente il pulsante 'Invia Risposta' in basso o in alto alla discussione. Ricorda che l'amministratore potrebbe aver riservato solo allo staff l'invio dei messaggi in un determinato forum.
<br /><br />Inoltre un moderatore di sezione potrebbe aver chiuso la discussione impedendo agli utenti di rispondere. In questo caso non esiste modo di rispondere senza l'aiuto di un amministratore o un moderatore.";
// Help Document 7
$l['d7_name'] = "mycode";
$l['d7_desc'] = "Impara come usare il mycode per personalizzare i tuoi messaggi.";
$l['d7_document'] = "Puoi utilizzare il myCode, una versione semplificata dell'HTML, nei tuoi messaggi per creare alcuni effetti.
<p><br />[b]Questo testo è grassetto[/b]<br />&nbsp;&nbsp;&nbsp;<b>Questo testo è grassetto</b>
<p>[i]Questo testo è corsivo[/i]<br />&nbsp;&nbsp;&nbsp;<i>Questo testo è corsivo</i>
<p>[u]Questo testo è sottolineato[/u]<br />&nbsp;&nbsp;&nbsp;<u>Questo testo è sottolineato</u>
<p>[s]Questo testo è barrato[/s]<br />&nbsp;&nbsp;&nbsp;<strike>Questo testo è barrato</strike>
<p><br />[url]http://www.example.com/[/url]<br />&nbsp;&nbsp;&nbsp;<a href='http://www.example.com/'>http://www.example.com/</a>
<p>[url=http://www.example.com/]Example.com[/url]<br />&nbsp;&nbsp;&nbsp;<a href='http://www.example.com/'>Example.com</a>
<p>[email]example@example.com[/email]<br />&nbsp;&nbsp;&nbsp;<a href='mailto:example@example.com'>example@example.com</a>
<p>[email=example@example.com]Inviami un'e-mail![/email]<br />&nbsp;&nbsp;&nbsp;<a href='mailto:example@example.com'>Inviami un'e-mail!</a>
<p>[email=example@example.com?subject=spam]E-mail con oggetto[/email]<br />&nbsp;&nbsp;&nbsp;<a href='mailto:example@example.com?subject=spam'>E-mail con oggetto</a>
<p><br />[quote]Il testo citato sarà  qui[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>Il testo citato sarà  qui</quote>
<p>[code]Testo con formattazione preservata[/code]<br />&nbsp;&nbsp;&nbsp;<code>Testo con formattazione preservata</code>
<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src='http://www.php.net/images/php.gif'>
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src='http://www.php.net/images/php.gif' width='50' height='50'>
<p><br />[color=red]Questo testo è rosso[/color]<br />&nbsp;&nbsp;&nbsp;<font color='red'>Questo testo è rosso</font>
<p>[size=3]Questo testo ha dimensione 3[/size]<br />&nbsp;&nbsp;&nbsp;<font size='3'>Questo testo ha dimensione 3</font>
<p>[font=Tahoma]Questo carattere è Tahoma[/font]<br />&nbsp;&nbsp;&nbsp;<font face='Tahoma'>Questo carattere è Tahoma</font>
<p><br />[align=center]Questo è centrato[/align]<div align='center'>Questo è centrato</div>
<p>[align=right]Questo è allineato a destra[/align]<div align='right'>Questo è allineato a destra</div>
<p><br />[list]<br />[*]Elemento Lista #1<br />[*]Elemento Lista #2<br />[*]Elemento Lista #3<br />[/list]<br /><ul><li>Elemento Lista #1</li><li>Elemento Lista #2</li><li>Elemento Lista #3</li>
</ul>
<p>Puoi creare una lista ordinata usando [list=1] per una numerata, e [list=a] per una alfabetica.</p>";
 ?>