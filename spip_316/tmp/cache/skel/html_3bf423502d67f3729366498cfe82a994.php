<?php

/*
 * Squelette : ../plugins-dist/mots/prive/objets/contenu/mot.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:54 GMT
 * Boucles :   _afficher_contenu
 */ 

function BOUCLE_afficher_contenuhtml_3bf423502d67f3729366498cfe82a994(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_afficher_contenu';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.id_mot",
		"mots.descriptif",
		"mots.texte");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots.id_mot', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/mots/prive/objets/contenu/mot.html','html_3bf423502d67f3729366498cfe82a994','_afficher_contenu',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_titre');
	$l2 = _T('public|spip|ecrire:info_descriptif');
	$l3 = _T('public|spip|ecrire:info_texte');
	$l4 = _T('public|spip|ecrire:info_notes');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="champ contenu_titre' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['titre']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l1 .
'</div>
<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'' .
classe_boucle_crayon('mots','titre',$Pile[$SP]['id_mot']).' ' .
'titre\'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</div>
</div>
<div class="champ contenu_descriptif' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['descriptif']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l2 .
'</div>
<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'' .
classe_boucle_crayon('mots','descriptif',$Pile[$SP]['id_mot']).' ' .
'descriptif\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
<div class="champ contenu_texte' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['texte']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
$l3 .
'</div>
<div dir=\'' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'\' class=\'' .
classe_boucle_crayon('mots','texte',$Pile[$SP]['id_mot']).' ' .
'texte\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['texte'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		((	'<div class="champ contenu_notes">
<div class=\'label\'>' .
	$l4 .
	'</div>
<div dir=\'' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'\' class=\'' .
	classe_boucle_crayon('mots','notes',$Pile[$SP]['id_mot']).' ' .
	'notes\'>') . $t1 . '</div>
</div>') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_afficher_contenu @ ../plugins-dist/mots/prive/objets/contenu/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/prive/objets/contenu/mot.html
// Temps de compilation total: 10.001 ms
//

function html_3bf423502d67f3729366498cfe82a994($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_afficher_contenuhtml_3bf423502d67f3729366498cfe82a994($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_3bf423502d67f3729366498cfe82a994', $Cache, $page, '../plugins-dist/mots/prive/objets/contenu/mot.html');
}
?>