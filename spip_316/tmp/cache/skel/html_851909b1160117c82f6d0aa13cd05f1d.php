<?php

/*
 * Squelette : ../plugins-dist/mots/prive/squelettes/contenu/mot.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:54 GMT
 * Boucles :   _objetslies, _autresobjets, _mot
 */ 

function BOUCLE_objetslieshtml_851909b1160117c82f6d0aa13cd05f1d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots_liens';
		$command['id'] = '_objetslies';
		$command['from'] = array('mots_liens' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots_liens.id_mot', sql_quote($Pile[$SP]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/mots/prive/squelettes/contenu/mot.html','html_851909b1160117c82f6d0aa13cd05f1d','_objetslies',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('mots:titre_objets_lies_mot');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<h3>' .
$l1 .
'</h3>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objetslies @ ../plugins-dist/mots/prive/squelettes/contenu/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_autresobjetshtml_851909b1160117c82f6d0aa13cd05f1d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 'article';
	$in[]= 'rubrique';
	if (!isset($command['table'])) {
		$command['table'] = 'mots_liens';
		$command['id'] = '_autresobjets';
		$command['from'] = array('mots_liens' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("objet");
		$command['select'] = array("objet",
		"mots_liens.objet",
		"mots_liens.id_mot");
		$command['orderby'] = array('mots_liens.objet');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'mots_liens.id_mot', sql_quote($Pile[$SP]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')), sql_in('mots_liens.objet',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/mots/prive/squelettes/contenu/mot.html','html_851909b1160117c82f6d0aa13cd05f1d','_autresobjets',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'table'] = interdire_scripts(table_objet($Pile[$SP]['objet']))) .
vide($Pile['vars'][$_zzz=(string)'titre'] = (($t2 = strval(table_valeur($Pile["vars"], (string)'table', null)))!=='' ?
			((	interdire_scripts($Pile[$SP]['objet']) .
		':info_') . $t2 . '_liees_mot') :
			'')) .
'
	' .
vide($Pile['vars'][$_zzz=(string)'liste'] = (trouver_fond((	'prive/objets/liste/' .
		table_valeur($Pile["vars"], (string)'table', null))) ? table_valeur($Pile["vars"], (string)'table', null):'objets_lies_mot')) .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/objets/liste/' .
	table_valeur($Pile["vars"], (string)'liste', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette($Pile[$SP]['objet']) . ',
	\'id_mot\' => ' . argumenter_squelette($Pile[$SP]['id_mot']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/mots/prive/squelettes/contenu/mot.html\',\'html_851909b1160117c82f6d0aa13cd05f1d\',\'\',24,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_autresobjets @ ../plugins-dist/mots/prive/squelettes/contenu/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mothtml_851909b1160117c82f6d0aa13cd05f1d(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == 'mot'));

	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mot';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot",
		"mots.titre",
		"mots.titre AS titre_rang");
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
		array('../plugins-dist/mots/prive/squelettes/contenu/mot.html','html_851909b1160117c82f6d0aa13cd05f1d','_mot',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
boite_ouvrir((($t2 = strval(interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))))!=='' ?
			((	'
	' .
		(($t3 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'mot', invalideur_session($Cache, $Pile[$SP]['id_mot']))?" ":""))))!=='' ?
				($t3 . (	'
	' .
			filtre_icone_verticale_dist(generer_url_ecrire('mot_edit',(	'id_mot=' .
				$Pile[$SP]['id_mot'])),_T('mots:icone_modifier_mot'),'mot','edit','right ajax preload') .
			'
	')) :
				'') .
		'
	<h1' .
		(' class=\'' . classe_boucle_crayon('mots','titre',$Pile[$SP]['id_mot']).' ' . '\'') .
		'>' .
		(($t3 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
				($t3 . '. ') :
				'')) . $t2 . (	interdire_scripts(filtre_balise_img_dist(chemin_image('mot-24.png'),'mot','cadre-icone')) .
		'</h1>
')) :
			''), 'simple fiche_objet') .
'

<div id="wysiwyg">
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/contenu/mot') . ', array(\'id\' => ' . argumenter_squelette($Pile[$SP]['id_mot']) . ',
	\'id_mot\' => ' . argumenter_squelette($Pile[$SP]['id_mot']) . ',
	\'wysiwyg\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/mots/prive/squelettes/contenu/mot.html\',\'html_851909b1160117c82f6d0aa13cd05f1d\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</div>


<div class="liste">
' .
BOUCLE_objetslieshtml_851909b1160117c82f6d0aa13cd05f1d($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/rubriques') . ', array_merge('.var_export($Pile[0],1).',array(\'id_mot\' => ' . argumenter_squelette($Pile[$SP]['id_mot']) . ',
	\'par\' => ' . argumenter_squelette('titre') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/mots/prive/squelettes/contenu/mot.html\',\'html_851909b1160117c82f6d0aa13cd05f1d\',\'\',17,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'id_mot\' => ' . argumenter_squelette($Pile[$SP]['id_mot']) . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'statut\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, statuts_articles_visibles(table_valeur($GLOBALS["visiteur_session"], (string)'statut', null))))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/mots/prive/squelettes/contenu/mot.html\',\'html_851909b1160117c82f6d0aa13cd05f1d\',\'\',18,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
BOUCLE_autresobjetshtml_851909b1160117c82f6d0aa13cd05f1d($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>

' .
boite_fermer() .
'

' .
pipeline( 'afficher_complement_objet' , array('args' => array('type' => 'mot', 'id' => $Pile[$SP]['id_mot']), 'data' => '<div class="nettoyeur"></div>') ) .
(($t1 = strval(interdire_scripts(((eval('return '.'_AJAX'.';')) ?' ' :''))))!=='' ?
		($t1 . (	'
	<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#chemin\');/*]]>*/</script>
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mot @ ../plugins-dist/mots/prive/squelettes/contenu/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/prive/squelettes/contenu/mot.html
// Temps de compilation total: 32.003 ms
//

function html_851909b1160117c82f6d0aa13cd05f1d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = BOUCLE_mothtml_851909b1160117c82f6d0aa13cd05f1d($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	((table_valeur(@$Pile[0], (string)'exec', null) == 'mot_edit') ? recuperer_fond( 'prive/squelettes/contenu/mot_edit' , array_merge($Pile[0],array('redirect' => '' ,
	'retourajax' => 'oui' )), array('compil'=>array('../plugins-dist/mots/prive/squelettes/contenu/mot.html','html_851909b1160117c82f6d0aa13cd05f1d','',0,$GLOBALS['spip_lang'])), _request('connect')):sinon_interdire_acces('')) .
	'
'))) .
'
');

	return analyse_resultat_skel('html_851909b1160117c82f6d0aa13cd05f1d', $Cache, $page, '../plugins-dist/mots/prive/squelettes/contenu/mot.html');
}
?>