<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Wed, 19 Jul 2017 14:34:52 GMT
 * Compile :   Thu, 31 Aug 2017 13:02:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.000 ms
//

function html_922a38112ab5958d511d9c4d8349edd1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_922a38112ab5958d511d9c4d8349edd1', $Cache, $page, '../prive/squelettes/top/dist.html');
}
?>