<?php

/*
 * Squelette : prive/modeles/pagination_precedent_suivant.html
 * Date :      Wed, 19 Jul 2017 14:34:50 GMT
 * Compile :   Tue, 19 Sep 2017 08:12:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/modeles/pagination_precedent_suivant.html
// Temps de compilation total: 22.002 ms
//

function html_d498a66fdbaa8d1076c8b0b4c9465b1c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
interdire_scripts(table_valeur(@$Pile[0], (string)'bloc_ancre', null)) .
vide($Pile['vars'][$_zzz=(string)'bornes'] = interdire_scripts(filtre_bornes_pagination_dist(entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nombre_pages', null),true)),'10'))) .
vide($Pile['vars'][$_zzz=(string)'premiere'] = filtre_reset(table_valeur($Pile["vars"], (string)'bornes', null))) .
vide($Pile['vars'][$_zzz=(string)'derniere'] = filtre_end(table_valeur($Pile["vars"], (string)'bornes', null))) .
vide($Pile['vars'][$_zzz=(string)'sep'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'separateur', null), ' | '),true))) .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'label', null), ''),true))))!=='' ?
		('<span
	class=\'label\'>' . $t1 . '</span>') :
		'') .
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'item'] = interdire_scripts(mult(moins(entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true),'2'),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'pas', null),true)))))))!=='' ?
		('

	' . $t1 . '

	') :
		'') .
(($t1 = strval(interdire_scripts(inserer_attribut(lien_ou_expose(ancre_url(entites_html(sinon(table_valeur(@$Pile[0], (string)'url_precedent', null), interdire_scripts(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'url', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'debut', null),true)),(table_valeur($Pile["vars"], (string)'item', null) ? table_valeur($Pile["vars"], (string)'item', null):'')))),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ancre', null),true))),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'label_precedent', null), _T('public:page_precedente')),true)),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) <= '1')),'lien_pagination','','nofollow'),'rel','prev'))))!=='' ?
		((	'<span
	class="prev' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) <= '1')) ?' ' :''))))!=='' ?
			($t2 . 'disabled') :
			'') .
	'">') . $t1 . (	(($t2 = strval(interdire_scripts(((((((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) < interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nombre_pages', null),true)))) AND (table_valeur($Pile["vars"], (string)'sep', null))) ?' ' :'')) ?' ' :''))))!=='' ?
			('<span ' . $t2 . (	'
	class=\'sep\'>' .
		table_valeur($Pile["vars"], (string)'sep', null) .
		'</span>')) :
			'') .
	'</span>')) :
		'') .
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'item'] = interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'pas', null),true)))))))!=='' ?
		('

	' . $t1 . '

	') :
		'') .
(($t1 = strval(interdire_scripts(inserer_attribut(lien_ou_expose(ancre_url(entites_html(sinon(table_valeur(@$Pile[0], (string)'url_suivant', null), interdire_scripts(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'url', null),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'debut', null),true)),(table_valeur($Pile["vars"], (string)'item', null) ? table_valeur($Pile["vars"], (string)'item', null):'')))),true),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'ancre', null),true))),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'label_suivant', null), _T('public:page_suivante')),true)),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) >= interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nombre_pages', null),true)))),'lien_pagination','','nofollow'),'rel','next'))))!=='' ?
		((	'<span
	class="next' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) >= interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nombre_pages', null),true)))) ?' ' :''))))!=='' ?
			($t2 . 'disabled') :
			'') .
	'">' .
	(($t2 = strval(interdire_scripts(((((((entites_html(table_valeur(@$Pile[0], (string)'page_courante', null),true) >= interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nombre_pages', null),true)))) AND (table_valeur($Pile["vars"], (string)'sep', null))) ?' ' :'')) ?' ' :''))))!=='' ?
			('<span ' . $t2 . (	'
		class=\'sep\'>' .
		table_valeur($Pile["vars"], (string)'sep', null) .
		'</span>')) :
			'')) . $t1 . '</span>') :
		'') .
'
');

	return analyse_resultat_skel('html_d498a66fdbaa8d1076c8b0b4c9465b1c', $Cache, $page, 'prive/modeles/pagination_precedent_suivant.html');
}
?>