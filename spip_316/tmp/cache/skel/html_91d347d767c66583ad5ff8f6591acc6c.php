<?php

/*
 * Squelette : ../plugins/auto/saisies/prive/style_prive_plugin_saisies.html
 * Date :      Fri, 28 Jul 2017 14:10:02 GMT
 * Compile :   Thu, 31 Aug 2017 13:02:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/saisies/prive/style_prive_plugin_saisies.html
// Temps de compilation total: 1.000 ms
//

function html_91d347d767c66583ad5ff8f6591acc6c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
#wysiwyg .saisie_fieldset .champ {font-size: 1em;}';

	return analyse_resultat_skel('html_91d347d767c66583ad5ff8f6591acc6c', $Cache, $page, '../plugins/auto/saisies/prive/style_prive_plugin_saisies.html');
}
?>