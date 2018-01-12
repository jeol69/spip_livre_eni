<?php

/*
 * Squelette : ../plugins-dist/mots/prive/squelettes/navigation/mot.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:54 GMT
 * Boucles :   _nav
 */ 

function BOUCLE_navhtml_5f0add667c46d75a643fbd9b09e4b3a0(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'mot'));

	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_nav';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot");
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
		array('../plugins-dist/mots/prive/squelettes/navigation/mot.html','html_5f0add667c46d75a643fbd9b09e4b3a0','_nav',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir('', 'info') .
pipeline( 'boite_infos' , array('data' => '', 'args' => array('type' => 'mot', 'id' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_mot', null),true)))) ) .
boite_fermer() .
'

<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('mot',$Pile[$SP]['id_mot'],'',@serialize($Pile[0])),
	array('../plugins-dist/mots/prive/squelettes/navigation/mot.html','html_5f0add667c46d75a643fbd9b09e4b3a0','_nav',5,$GLOBALS['spip_lang'])) .
'</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nav @ ../plugins-dist/mots/prive/squelettes/navigation/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/prive/squelettes/navigation/mot.html
// Temps de compilation total: 9.001 ms
//

function html_5f0add667c46d75a643fbd9b09e4b3a0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_navhtml_5f0add667c46d75a643fbd9b09e4b3a0($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'mot_edit')) ?' ' :''))))!=='' ?
			($t2 . 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/mot_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/mots/prive/squelettes/navigation/mot.html\',\'html_5f0add667c46d75a643fbd9b09e4b3a0\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>') :
			'') .
	'
'))) .
'
');

	return analyse_resultat_skel('html_5f0add667c46d75a643fbd9b09e4b3a0', $Cache, $page, '../plugins-dist/mots/prive/squelettes/navigation/mot.html');
}
?>