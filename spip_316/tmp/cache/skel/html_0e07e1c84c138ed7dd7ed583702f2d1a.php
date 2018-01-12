<?php

/*
 * Squelette : ../plugins-dist/mots/prive/squelettes/hierarchie/mot.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:53 GMT
 * Boucles :   _hierarchie
 */ 

function BOUCLE_hierarchiehtml_0e07e1c84c138ed7dd7ed583702f2d1a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_hierarchie';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_groupe",
		"mots.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots.id_mot', sql_quote(@$Pile[0]['id_mot'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/mots/prive/squelettes/hierarchie/mot.html','html_0e07e1c84c138ed7dd7ed583702f2d1a','_hierarchie',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
&gt; ' .
lien_ou_expose(generer_url_ecrire('groupe_mots',(	'id_groupe=' .
	$Pile[$SP]['id_groupe'])),interdire_scripts(generer_info_entite($Pile[$SP]['id_groupe'], 'groupe_mots', 'titre')),'') .
'
&gt; <strong class="on">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</strong>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_hierarchie @ ../plugins-dist/mots/prive/squelettes/hierarchie/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/prive/squelettes/hierarchie/mot.html
// Temps de compilation total: 9.001 ms
//

function html_0e07e1c84c138ed7dd7ed583702f2d1a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- hierarchie -->
<a href="' .
generer_url_ecrire('mots') .
'">' .
_T('mots:icone_mots_cles') .
'</a>
' .
(($t1 = BOUCLE_hierarchiehtml_0e07e1c84c138ed7dd7ed583702f2d1a($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_groupe', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
	&gt; ' .
		lien_ou_expose(generer_url_ecrire('groupe_mots',(	'id_groupe=' .
			@$Pile[0]['id_groupe'])),interdire_scripts(generer_info_entite(@$Pile[0]['id_groupe'], 'groupe_mots', 'titre')),'') .
		'
')) :
			'') .
	'
&gt; <strong class="on">' .
	_T('mots:texte_nouveau_mot') .
	'</strong>
'))) .
'
');

	return analyse_resultat_skel('html_0e07e1c84c138ed7dd7ed583702f2d1a', $Cache, $page, '../plugins-dist/mots/prive/squelettes/hierarchie/mot.html');
}
?>