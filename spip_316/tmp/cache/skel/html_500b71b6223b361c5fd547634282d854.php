<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Wed, 19 Jul 2017 14:34:52 GMT
 * Compile :   Thu, 31 Aug 2017 13:02:15 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.000 ms
//

function html_500b71b6223b361c5fd547634282d854($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
<!-- extra -->';

	return analyse_resultat_skel('html_500b71b6223b361c5fd547634282d854', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
?>