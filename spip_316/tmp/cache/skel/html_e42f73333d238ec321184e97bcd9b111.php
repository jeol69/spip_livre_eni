<?php

/*
 * Squelette : ../prive/formulaires/dateur/jquery.dateur.js.html
 * Date :      Wed, 19 Jul 2017 14:34:51 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:19 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dateur/jquery.dateur.js.html
// Temps de compilation total: 2.000 ms
//

function html_e42f73333d238ec321184e97bcd9b111($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header(' . _q('Content-Type: text/js;') . '); ?'.'>
if (!jQuery.fn.datepicker){
' .
charge_scripts('prive/javascript/ui/core.js',false) .
charge_scripts('prive/javascript/ui/widget.js',false) .
charge_scripts('prive/javascript/ui/datepicker.js',false) .
'}
if (!jQuery.fn.timePicker){
' .
charge_scripts('prive/formulaires/dateur/jquery.time_picker.js',false) .
'}
');

	return analyse_resultat_skel('html_e42f73333d238ec321184e97bcd9b111', $Cache, $page, '../prive/formulaires/dateur/jquery.dateur.js.html');
}
?>