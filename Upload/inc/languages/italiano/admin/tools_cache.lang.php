<?php
/**
 *
 * Pacchetto lingua italiana per MyBB 1.6.x
 * Copyright © 2010 MyBBoard Italia
 * Tutti i diritti riservati. Redistribuzione vietata.
 * http://www.mybboard.it
 *
 * $Id: tools_cache.lang.php 63 2010-08-04 19:32:50Z kimi $
 *
 */

$l['cache'] = "Cache:";
$l['cache_manager'] = "Gestore della cache";
$l['cache_manager_description'] = "Qui puoi gestire le cache utilizzate come metodo di ottimizzazione per MyBB.Rigenerando la cache verranno presi tutti i dati necessari per creare la cache e poi saranno ri-sincronizzati. Ricaricando la cache i dati saranno ricaricati nel gestore della cache utilizzato (disco, eaccelerator, memcache, ecc). Ricaricare la cache è utile quando si passa dal database o il file system a xcache, eaccelerator, o un altro gestore della cache.";
$l['rebuild_cache'] = "Rigenera la cache";
$l['reload_cache'] = "Ricarica la cache";
$l['error_cannot_rebuild'] = "Questa cache non può essere rigenerata.";
$l['error_empty_cache'] = "La cache è vuota.";
$l['error_incorrect_cache'] = "Cache specificata errata.";
$l['error_no_cache_specified'] = "Non hai specificato una cache da visualizzare.";
$l['success_cache_rebuilt'] = "La cache è stata rigenerata.";
$l['success_cache_reloaded'] = "La cache è stata ricaricata.";
?>