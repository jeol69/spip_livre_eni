<?php

/*
 * Squelette : squelettes/inclure/pieddepage.html
 * Date :      Tue, 29 Aug 2017 12:44:00 GMT
 * Compile :   Thu, 31 Aug 2017 13:01:59 GMT
 * Boucles :   _articles_europe, _articles_eu, _rubriques, _nb_articles, _mots_cle
 */ 

function BOUCLE_articles_europehtml_92a73124dc2686fa7706b81d956b752f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_europe';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.lang");
		$command['orderby'] = array('articles.titre');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_secteur', "13"));
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
		array('squelettes/inclure/pieddepage.html','html_92a73124dc2686fa7706b81d956b752f','_articles_europe',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a><br/> 
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_europe @ squelettes/inclure/pieddepage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_euhtml_92a73124dc2686fa7706b81d956b752f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_eu';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.lang");
		$command['orderby'] = array('articles.titre');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_secteur', "14"));
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
		array('squelettes/inclure/pieddepage.html','html_92a73124dc2686fa7706b81d956b752f','_articles_eu',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a><br/> 
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_eu @ squelettes/inclure/pieddepage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriqueshtml_92a73124dc2686fa7706b81d956b752f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= 1;
	$in[]= 4;
	$in[]= 8;
	$in[]= 9;
	$in[]= 10;
	$in[]= 11;
	$in[]= 12;
	$in[]= 13;
	$in[]= 14;
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('NOT', sql_in('rubriques.id_rubrique',sql_quote($in))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/pieddepage.html','html_92a73124dc2686fa7706b81d956b752f','_rubriques',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    
                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a><br/> 
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubriques @ squelettes/inclure/pieddepage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_nb_articleshtml_92a73124dc2686fa7706b81d956b752f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_nb_articles';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'L1.id_mot', sql_quote($Pile[$SP]['id_mot'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/pieddepage.html','html_92a73124dc2686fa7706b81d956b752f','_nb_articles',71,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_nb_articles']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' 
                            ', $Numrows['_nb_articles']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nb_articles @ squelettes/inclure/pieddepage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_clehtml_92a73124dc2686fa7706b81d956b752f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots_cle';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot",
		"mots.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array();
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
		array('squelettes/inclure/pieddepage.html','html_92a73124dc2686fa7706b81d956b752f','_mots_cle',64,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
' 
                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a> 
                    <span class="badge"> 

                         
                        ' .
(($t1 = BOUCLE_nb_articleshtml_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
                            ' . $t1 . (	(($Numrows['_nb_articles']['total'] == '0') ? '0':$Numrows['_nb_articles']['total']) .
		' 
                        ')) :
		('
                        0
                        ')) .
'

                    </span><br />
                ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_cle @ squelettes/inclure/pieddepage.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/pieddepage.html
// Temps de compilation total: 30.000 ms
//

function html_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="row bleuClair">

    
    <div class="small-12 large-3 columns">
        <h4>Voyages en Europe</h4>

        
        ' .
(($t1 = BOUCLE_articles_europehtml_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
            <p> 
                ' . $t1 . ' 
            </p> 
        ') :
		'') .
'

    </div>

     
    <div class="small-12 large-3 columns"> 
        <h4>Voyages aux États-Unis</h4> 

         
        ' .
(($t1 = BOUCLE_articles_euhtml_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
            <p> 
                ' . $t1) :
		'') .
' 
            </p> 
        </B_articles_europe>

    </div>

     
    <div class="small-12 large-3 columns"> 
        <h4>Liste des destinations</h4> 
        ' .
(($t1 = BOUCLE_rubriqueshtml_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	' 
            <p> 
                
                ') . $t1 . ' 
            </p> 
        ') :
		'') .
' 
    </div>

     
    <div class="small-12 large-3 columns"> 
        <h4>Liste des mots-clés</h4> 
        ' .
(($t1 = BOUCLE_mots_clehtml_92a73124dc2686fa7706b81d956b752f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
            <p> 
                ' . $t1 . ' 
            </p> 
        ') :
		'') .
' 
    </div>

</div>');

	return analyse_resultat_skel('html_92a73124dc2686fa7706b81d956b752f', $Cache, $page, 'squelettes/inclure/pieddepage.html');
}
?>