<?php

/*
 * Squelette : squelettes/inclure/entete.html
 * Date :      Thu, 31 Aug 2017 13:00:37 GMT
 * Compile :   Thu, 31 Aug 2017 13:01:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/entete.html
// Temps de compilation total: 3.000 ms
//

function html_76f4c4ad7dd9feff9581fef7b3587cfa($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="row">
    <div class="small-2 columns">
        <a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'<?=_SOMMAIRE_VOYAGES?>">' .

((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'</a>
    </div>
    <div class="small-10 columns">
        <h1>' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</h1>
        <h2>' .
interdire_scripts(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])) .
'</h2>
    </div>
</div>');

	return analyse_resultat_skel('html_76f4c4ad7dd9feff9581fef7b3587cfa', $Cache, $page, 'squelettes/inclure/entete.html');
}
?>