<?php

/*
 * Squelette : prive/informer_auteur.html
 * Date :      Wed, 19 Jul 2017 14:34:49 GMT
 * Compile :   Thu, 11 Jan 2018 12:50:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/informer_auteur.html
// Temps de compilation total: 1.000 ms
//

function html_b105c4cfe57fa2fd9749d851a03f9878($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: text/plain') . '); ?'.'>' .
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
interdire_scripts(informer_auteur(normaliser_date(@$Pile[0]['date']))));

	return analyse_resultat_skel('html_b105c4cfe57fa2fd9749d851a03f9878', $Cache, $page, 'prive/informer_auteur.html');
}
?>