<?php

/*
 * Squelette : squelettes/inclure/head2.html
 * Date :      Wed, 23 Aug 2017 14:28:20 GMT
 * Compile :   Thu, 31 Aug 2017 13:01:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/head2.html
// Temps de compilation total: 2.000 ms
//

function html_4fc5e91228209043eb4785f8979cef74($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<title>' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>

<meta charset="' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />
<meta name="description" content="' .
interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150'))) .
'" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css" />
<link rel="stylesheet" href="' .
find_in_path('css/app.css') .
'" />
');

	return analyse_resultat_skel('html_4fc5e91228209043eb4785f8979cef74', $Cache, $page, 'squelettes/inclure/head2.html');
}
?>