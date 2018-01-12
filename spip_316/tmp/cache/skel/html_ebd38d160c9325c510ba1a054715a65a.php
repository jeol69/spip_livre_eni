<?php

/*
 * Squelette : ../plugins-dist/mots/prive/squelettes/contenu/mot_edit.html
 * Date :      Wed, 19 Jul 2017 14:35:18 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/squelettes/contenu/mot_edit.html
// Temps de compilation total: 26.003 ms
//

function html_ebd38d160c9325c510ba1a054715a65a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
((intval(@$Pile[0]['id_mot']))  ?
		(' ' . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'mot', invalideur_session($Cache, @$Pile[0]['id_mot']))?" ":""))))) :
		'') .
'
' .
(!(intval(@$Pile[0]['id_mot']))  ?
		(' ' . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'mot', invalideur_session($Cache, @$Pile[0]['id_mot']), '', '', invalideur_session($Cache, array('associer_objet' => interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true))))))?" ":""))))) :
		'') .
'

' .
vide($Pile['vars'][$_zzz=(string)'retour'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'id_mot', null),true) ? generer_url_ecrire('mot',(	'id_mot=' .
				@$Pile[0]['id_mot'])):generer_url_ecrire('mots')))))) .
'<div class=\'cadre-formulaire-editer\'>
<div class="entete-formulaire">
	' .
((intval(@$Pile[0]['id_mot']))  ?
		(' ' . (	'
	' .
	filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'retour', null),_T('public|spip|ecrire:icone_retour'),'mot','',(	'left retour' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
				($t3 . 'ajax preload') :
				''))) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), interdire_scripts(((($a = generer_info_entite(@$Pile[0]['id_mot'], 'mot', 'titre')) OR (is_string($a) AND strlen($a))) ? $a : _T('mots:texte_nouveau_mot')))),true))))!=='' ?
		((	(intval(@$Pile[0]['id_mot']) ? _T('mots:info_modifier_mot'):_T('public|spip|ecrire:titre_ajouter_un_mot')) .
	'
	<h1>') . $t1 . '</h1>') :
		'') .
'
</div>

' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'redirect', null), generer_url_entite(@$Pile[0]['id_mot'],'mot')),true))) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][$_zzz=(string)'redirect'] = 'javascript:if (window.jQuery) jQuery(".entete-formulaire .retour a").followLink();') .
	'<div class="ajax">
')) :
		'') .
'
		' .
executer_balise_dynamique('FORMULAIRE_EDITER_MOT',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_mot', null), 'oui'),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_groupe', null),true)),table_valeur($Pile["vars"], (string)'redirect', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true))),
	array('../plugins-dist/mots/prive/squelettes/contenu/mot_edit.html','html_ebd38d160c9325c510ba1a054715a65a','',13,$GLOBALS['spip_lang'])) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	</div>
	<script type="text/javascript">/*<![CDATA[*/if (window.jQuery) jQuery(\'#navigation>div,#extra>div\').ajaxReload({args:{exec:\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\'}});/*]]>*/</script>
')) :
		'') .
'
</div>

');

	return analyse_resultat_skel('html_ebd38d160c9325c510ba1a054715a65a', $Cache, $page, '../plugins-dist/mots/prive/squelettes/contenu/mot_edit.html');
}
?>