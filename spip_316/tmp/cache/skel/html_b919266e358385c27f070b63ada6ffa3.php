<?php

/*
 * Squelette : squelettes/inclure/navigation.html
 * Date :      Tue, 29 Aug 2017 08:57:57 GMT
 * Compile :   Thu, 31 Aug 2017 13:01:59 GMT
 * Boucles :   _pages_statiques
 */ 

function BOUCLE_pages_statiqueshtml_b919266e358385c27f070b63ada6ffa3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_pages_statiques';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.lang");
		$command['orderby'] = array('articles.id_article');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "11"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/navigation.html','html_b919266e358385c27f070b63ada6ffa3','_pages_statiques',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                    <li><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
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
		spip_log(intval(1000*$timer)."ms BOUCLE_pages_statiques @ squelettes/inclure/navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/navigation.html
// Temps de compilation total: 5.000 ms
//

function html_b919266e358385c27f070b63ada6ffa3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="row">
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'<?=_SOMMAIRE_VOYAGES?>">Accueil</a></li>
                ' .
BOUCLE_pages_statiqueshtml_b919266e358385c27f070b63ada6ffa3($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </ul>
        </div>
    </div>
</div>');

	return analyse_resultat_skel('html_b919266e358385c27f070b63ada6ffa3', $Cache, $page, 'squelettes/inclure/navigation.html');
}
?>