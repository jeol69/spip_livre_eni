<?php

/*
 * Squelette : ../plugins-dist/mots/formulaires/selecteur_groupe_mot.html
 * Date :      Wed, 19 Jul 2017 14:35:19 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:55 GMT
 * Boucles :   _groupes
 */ 

function BOUCLE_groupeshtml_83dded0b9155c7469b0fb612366a8223(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_groupes';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("groupes_mots.titre",
		"groupes_mots.id_groupe");
		$command['orderby'] = array('groupes_mots.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('REGEXP', 'groupes_mots.tables_liees', sql_quote(concat('(^|,)',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'table', null), '.*'),true)),'($|,)'), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/mots/formulaires/selecteur_groupe_mot.html','html_83dded0b9155c7469b0fb612366a8223','_groupes',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<option value=\'' .
$Pile[$SP]['id_groupe'] .
'\'' .
(calcul_exposer($Pile[$SP]['id_groupe'], 'id_groupe', $Pile[0], $Pile[$SP]['id_groupe'], 'id_groupe', '')  ?
		(' ' . 'selected=\'selected\'') :
		'') .
'>' .
interdire_scripts(texte_backend(supprimer_tags(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))) .
'</option>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_groupes @ ../plugins-dist/mots/formulaires/selecteur_groupe_mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/formulaires/selecteur_groupe_mot.html
// Temps de compilation total: 9.001 ms
//

function html_83dded0b9155c7469b0fb612366a8223($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_groupeshtml_83dded0b9155c7469b0fb612366a8223($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<select' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'name', null),true))))!=='' ?
				(' name=\'' . $t3 . '\'') :
				'') .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true))))!=='' ?
				(' id=\'' . $t3 . '\'') :
				'') .
		'>
') . $t1 . '
</select>
') :
		'');

	return analyse_resultat_skel('html_83dded0b9155c7469b0fb612366a8223', $Cache, $page, '../plugins-dist/mots/formulaires/selecteur_groupe_mot.html');
}
?>