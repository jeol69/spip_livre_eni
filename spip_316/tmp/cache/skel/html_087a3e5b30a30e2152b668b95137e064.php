<?php

/*
 * Squelette : squelettes/sommaire2.html
 * Date :      Mon, 28 Aug 2017 15:47:12 GMT
 * Compile :   Thu, 31 Aug 2017 13:01:58 GMT
 * Boucles :   _articles_accueil_1, _articles_accueil_2, _articles_accueil_3, _articles_accueil_4
 */ 

function BOUCLE_articles_accueil_1html_087a3e5b30a30e2152b668b95137e064(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_accueil_1';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.chapo",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "19"));
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
		array('squelettes/sommaire2.html','html_087a3e5b30a30e2152b668b95137e064','_articles_accueil_1',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
                    ' .

((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'
                    <p>' .
interdire_scripts(propre($Pile[$SP]['chapo'], $connect, $Pile[0])) .
'</p>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_accueil_1 @ squelettes/sommaire2.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_accueil_2html_087a3e5b30a30e2152b668b95137e064(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_accueil_2';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.chapo",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "18"));
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
		array('squelettes/sommaire2.html','html_087a3e5b30a30e2152b668b95137e064','_articles_accueil_2',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
                    ' .

((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'
                    <p>' .
interdire_scripts(propre($Pile[$SP]['chapo'], $connect, $Pile[0])) .
'</p>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_accueil_2 @ squelettes/sommaire2.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_accueil_3html_087a3e5b30a30e2152b668b95137e064(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_accueil_3';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.chapo",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "17"));
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
		array('squelettes/sommaire2.html','html_087a3e5b30a30e2152b668b95137e064','_articles_accueil_3',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
                    ' .

((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'
                    <p>' .
interdire_scripts(propre($Pile[$SP]['chapo'], $connect, $Pile[0])) .
'</p>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_accueil_3 @ squelettes/sommaire2.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_accueil_4html_087a3e5b30a30e2152b668b95137e064(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_accueil_4';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.chapo",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "16"));
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
		array('squelettes/sommaire2.html','html_087a3e5b30a30e2152b668b95137e064','_articles_accueil_4',44,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                    <h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
                    ' .

((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'
                    <p>' .
interdire_scripts(propre($Pile[$SP]['chapo'], $connect, $Pile[0])) .
'</p>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_accueil_4 @ squelettes/sommaire2.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire2.html
// Temps de compilation total: 33.000 ms
//

function html_087a3e5b30a30e2152b668b95137e064($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php
  $url_accueil = "http://spip316.localhost/?page=sommaire2";
?><!DOCTYPE html>
<html lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'">
    <head>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head2') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire2.html\',\'html_087a3e5b30a30e2152b668b95137e064\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

    </head>
    <body>
         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/entete') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire2.html\',\'html_087a3e5b30a30e2152b668b95137e064\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire2.html\',\'html_087a3e5b30a30e2152b668b95137e064\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

         
        <div class="row">
            <div class="small-12 large-6 columns">
                ' .
BOUCLE_articles_accueil_1html_087a3e5b30a30e2152b668b95137e064($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
            <div class="small-12 large-6 columns">
                ' .
BOUCLE_articles_accueil_2html_087a3e5b30a30e2152b668b95137e064($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-6 columns">
                ' .
BOUCLE_articles_accueil_3html_087a3e5b30a30e2152b668b95137e064($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
            <div class="small-12 large-6 columns">
                ' .
BOUCLE_articles_accueil_4html_087a3e5b30a30e2152b668b95137e064($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
        </div>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/pieddepage') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire2.html\',\'html_087a3e5b30a30e2152b668b95137e064\',\'\',53,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

    </body>
</html>');

	return analyse_resultat_skel('html_087a3e5b30a30e2152b668b95137e064', $Cache, $page, 'squelettes/sommaire2.html');
}
?>