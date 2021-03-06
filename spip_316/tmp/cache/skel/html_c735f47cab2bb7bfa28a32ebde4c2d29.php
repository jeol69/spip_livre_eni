<?php

/*
 * Squelette : ../prive/squelettes/navigation/accueil.html
 * Date :      Wed, 19 Jul 2017 14:34:52 GMT
 * Compile :   Thu, 31 Aug 2017 13:02:14 GMT
 * Boucles :   _restreintes
 */ 

function BOUCLE_restreinteshtml_c735f47cab2bb7bfa28a32ebde4c2d29(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_restreintes']) ? $Pile[0]['debut_restreintes'] : null), 10);
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(invalideur_session($Cache, (table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_restreintes';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('rubriques.titre');
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_auteur', sql_quote(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/squelettes/navigation/accueil.html','html_c735f47cab2bb7bfa28a32ebde4c2d29','_restreintes',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_restreintes']['compteur_boucle'] = 0;
	$Numrows['_restreintes']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_restreintes']) ? $Pile[0]['debut_restreintes'] : _request('debut_restreintes');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_restreintes'] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_restreintes']['total']-1)/(10))*(10)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_restreintes']['total'] : $debut_boucle + 9), $Numrows['_restreintes']['total'] - 1);
	$Numrows['_restreintes']['grand_total'] = $Numrows['_restreintes']['total'];
	$Numrows['_restreintes']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_restreintes']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_restreintes']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_restreintes']['compteur_boucle']++;
		if ($Numrows['_restreintes']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_restreintes']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li class="item rubrique"><a href=\'' .
generer_url_entite($Pile[$SP]['id_rubrique'],'rubrique') .
'\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('rubrique-16.png'))) .
' ' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_restreintes @ ../prive/squelettes/navigation/accueil.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/navigation/accueil.html
// Temps de compilation total: 31.000 ms
//

function html_c735f47cab2bb7bfa28a32ebde4c2d29($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((($t2 = strval(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'nom', null)))))!=='' ?
			((	'
	' .
		afficher_plus_info(generer_url_ecrire('infos_perso'),_T('public|spip|ecrire:icone_informations_personnelles')) .
		'
	' .
		interdire_scripts(filtre_balise_img_dist(chemin_image('information-perso-24.png'),'','cadre-icone')) .
		'
	') . $t2 . '
') :
			''), 'simple personnel') .
'
	' .
filtre_icone_horizontale_dist(generer_url_ecrire('infos_perso'),_T('public|spip|ecrire:icone_informations_personnelles'),'fiche-perso') .
'

	' .
(($t1 = BOUCLE_restreinteshtml_c735f47cab2bb7bfa28a32ebde4c2d29($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="liste">
			<h4>' .
		objet_afficher_nb((isset($Numrows['_restreintes']['grand_total'])
			? $Numrows['_restreintes']['grand_total'] : $Numrows['_restreintes']['total']),'rubrique') .
		'</h4>
			<ul class="liste-items rubriques">
			') . $t1 . (	'
			</ul>
			' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_restreintes"]["grand_total"],
 		'_restreintes',
		isset($Pile[0]['debut_restreintes'])?$Pile[0]['debut_restreintes']:intval(_request('debut_restreintes')),
		10, true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
		</div>
	')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(((table_valeur(eval('return '.'$_COOKIE'.';'),'spip_admin')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(self(),'action','cookie'),'cookie_admin','non'),'redirect',self()),_T('public|spip|ecrire:icone_supprimer_cookie'),'cookie-24.png','delsafe') .
	'
	')) :
		'') .
(($t1 = strval(interdire_scripts(((table_valeur(eval('return '.'$_COOKIE'.';'),'spip_admin')) ?'' :' '))))!=='' ?
		($t1 . (	'
		<p>' .
	_T('public|spip|ecrire:info_activer_cookie') .
	' ' .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('cookie','../prive/squelettes/navigation/accueil.html', $Pile[0]):'')) .
	'</p>

		' .
	filtre_icone_horizontale_dist(parametre_url(parametre_url(parametre_url(self(),'action','cookie'),'cookie_admin',(	'@' .
		interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'login', null))))),'redirect',self()),_T('public|spip|ecrire:icone_activer_cookie'),'cookie-24.png') .
	'
	')) :
		'') .
'
' .
boite_fermer() .
'

' .
boite_ouvrir((($t2 = strval(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))))!=='' ?
			((($t3 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer')?" ":"")) ?' ' :''))))!=='' ?
				($t3 . (	'
	' .
			afficher_plus_info(generer_url_ecrire('configurer_identite'),_T('public|spip|ecrire:titre_identite_site')) .
			'
	' .
			interdire_scripts(filtre_balise_img_dist(chemin_image('racine-24.png'),'','cadre-icone')) .
			'
	')) :
				'') . $t2 . '
') :
			''), 'simple etat_base') .
'

	' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_syndic', 'ON', "'0'",'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'170','170'))))!=='' ?
		('<div class="logo_du_site">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'180','*')))))!=='' ?
		('<div class="descriptif_du_site">' . $t1 . '</div>') :
		'') .
'

	' .
pipeline( 'accueil_informations' , recuperer_fond( 'prive/squelettes/inclure/accueil-information' , array_merge($Pile[0],array()), array('compil'=>array('../prive/squelettes/navigation/accueil.html','html_c735f47cab2bb7bfa28a32ebde4c2d29','',0,$GLOBALS['spip_lang'])), _request('connect')) ) .
boite_fermer());

	return analyse_resultat_skel('html_c735f47cab2bb7bfa28a32ebde4c2d29', $Cache, $page, '../prive/squelettes/navigation/accueil.html');
}
?>