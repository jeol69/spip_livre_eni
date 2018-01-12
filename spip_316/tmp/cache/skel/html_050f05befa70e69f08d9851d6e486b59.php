<?php

/*
 * Squelette : ../plugins-dist/mots/prive/objets/infos/mot.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:54 GMT
 * Boucles :   _info
 */ 

function BOUCLE_infohtml_050f05befa70e69f08d9851d6e486b59(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_info';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot",
		"mots.id_groupe",
		"mots.type",
		"mots.titre");
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
		array('../plugins-dist/mots/prive/objets/infos/mot.html','html_050f05befa70e69f08d9851d6e486b59','_info',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('mots:titre_gauche_mots_edit');
	$l2 = _T('mots:info_supprimer_mot');
	$l3 = _T('mots:info_supprimer_mot');
	$l4 = _T('mots:info_oui_suppression_mot_cle');
	$l5 = _T('public|spip|ecrire:icone_voir_en_ligne');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class=\'infos\'>
<div class=\'numero\'>' .
$l1 .
'<p>' .
$Pile[$SP]['id_mot'] .
'</p></div>

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('supprimer', 'mot', invalideur_session($Cache, $Pile[$SP]['id_mot']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'

	' .
	vide($Pile['vars'][$_zzz=(string)'utilise'] = filtre_implode_dist(filtre_objets_associes_mot_dist($Pile[$SP]['id_mot'],$Pile[$SP]['id_groupe']),', ')) .
	(!(table_valeur($Pile["vars"], (string)'utilise', null))  ?
			(' ' . (	'
		' .
		invalideur_session($Cache, filtre_bouton_action_horizontal_dist(generer_action_auteur('supprimer_mot',invalideur_session($Cache, $Pile[$SP]['id_mot']),invalideur_session($Cache, generer_url_ecrire('groupe_mots',(	'id_groupe=' .
				invalideur_session($Cache, $Pile[$SP]['id_groupe']))))),$l2,'mot-24.png','del')) .
		'
	')) :
			'') .
	'
	' .
	((table_valeur($Pile["vars"], (string)'utilise', null))  ?
			(' ' . (	'
		' .
		filtre_icone_horizontale_dist(self(),$l2,'mot-24.png','del','',(	'onclick="jQuery(\'#confirm-' .
			$Pile[$SP]['id_mot'] .
			'\').toggle(\'fast\');return false;"')) .
		'
	')) :
			'') .
	'
	<div id="confirm-' .
	$Pile[$SP]['id_mot'] .
	'" class="none-js">
	' .
	boite_ouvrir('', 'notice') .
	vide($Pile['vars'][$_zzz=(string)'type'] = interdire_scripts(supprimer_numero(typo(supprimer_numero($Pile[$SP]['type']), "TYPO", $connect, $Pile[0])))) .
	'<p>' .
	_T('mots:info_delet_mots_cles', array('titre_mot' => interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),
'type_mot' => table_valeur($Pile["vars"], (string)'type', null),
'texte_lie' => table_valeur($Pile["vars"], (string)'utilise', null))) .
	'</p>
		' .
	bouton_action($l4,invalideur_session($Cache, generer_action_auteur('supprimer_mot',invalideur_session($Cache, $Pile[$SP]['id_mot']),invalideur_session($Cache, generer_url_entite($Pile[$SP]['id_groupe'],'groupe_mots'))))) .
	'
	' .
	boite_fermer() .
	'
	</div>
')) :
		'') .
'

' .
filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=mot&id=' .
	$Pile[$SP]['id_mot'])),'var_mode','calcul'),$l5,'racine') .
'

</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_info @ ../plugins-dist/mots/prive/objets/infos/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/mots/prive/objets/infos/mot.html
// Temps de compilation total: 16.002 ms
//

function html_050f05befa70e69f08d9851d6e486b59($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_infohtml_050f05befa70e69f08d9851d6e486b59($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_050f05befa70e69f08d9851d6e486b59', $Cache, $page, '../plugins-dist/mots/prive/objets/infos/mot.html');
}
?>