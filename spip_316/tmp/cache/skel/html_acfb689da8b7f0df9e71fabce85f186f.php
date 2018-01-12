<?php

/*
 * Squelette : squelettes/article.html
 * Date :      Tue, 29 Aug 2017 14:04:38 GMT
 * Compile :   Thu, 31 Aug 2017 13:08:43 GMT
 * Boucles :   _keywords, _rubrique, _mots_cles, _article
 */ 

function BOUCLE_keywordshtml_acfb689da8b7f0df9e71fabce85f186f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_keywords';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_keywords',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
' 
                  ' .
interdire_scripts(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
' 
               ');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ',' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_keywords @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubriquehtml_acfb689da8b7f0df9e71fabce85f186f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique';
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
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('NOT', 
			array('=', 'rubriques.id_rubrique', "11")));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_rubrique',44,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                                Classé dans la rubrique : <a href="' .
(($Pile[$SP]['id_rubrique'] !== '12') ? vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))):(	spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
	'<?=_SOMMAIRE_VOYAGES?>')) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>.<br />
                            ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubrique @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_cleshtml_acfb689da8b7f0df9e71fabce85f186f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots_cles';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot",
		"mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_mots_cles',49,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_mots_cles']['compteur_boucle'] = 0;
	$Numrows['_mots_cles']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_mots_cles']['compteur_boucle']++;
		$t0 .= (
' 
                                    <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a> 
                                    ' .
(($Numrows['_mots_cles']['compteur_boucle'] !== $Numrows['_mots_cles']['total']) ? ', ':'.') .
' 
                                ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_cles @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articlehtml_acfb689da8b7f0df9e71fabce85f186f(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.id_article",
		"articles.titre",
		"articles.texte",
		"articles.date",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_article',34,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                    <h2>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
                    ' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'400','400'))))!=='' ?
		('<p>' . $t1 . '</p>') :
		'') .
'
                    ' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
                    <blockquote>
                        Publié le ' .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']),'d/m/Y')) .
'.<br />
                        
                        Rédigé par ' .
recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => $Pile[$SP]['id_article'],'id_article' => $Pile[$SP]['id_article']), array('trim'=>true, 'compil'=>array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','_article',41,$GLOBALS['spip_lang'])), '') .
'.<br />
                        ' .
(($t1 = BOUCLE_rubriquehtml_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                            ' . $t1 . '
                        ') :
		'') .
'
                        ' .
(($t1 = BOUCLE_mots_cleshtml_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
                            <p>Mots-clés : 
                                ' . $t1 . ' 
                            </p> 
                         ') :
		(' 
                            Il n’y a pas de mot-clé associé à cet article. 
                         ')) .
'
                    </blockquote>
                ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/article.html
// Temps de compilation total: 31.000 ms
//

function html_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>
<html lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'">
    <head>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head2') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

        

        
        <meta name="author" content="' .
attribut_html(recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => @$Pile[0]['id_article'],'id_article' => @$Pile[0]['id_article']), array('trim'=>true, 'compil'=>array('squelettes/article.html','html_acfb689da8b7f0df9e71fabce85f186f','',11,$GLOBALS['spip_lang'])), '')) .
'" />

        
        ' .
(($t1 = BOUCLE_keywordshtml_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		(' 
            <meta name="keywords" content=" 
               ' . $t1 . ' 
            " /> 
        ') :
		'') .
'

    </head>
    <body>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/entete') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',26,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',29,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

        
        <div class="row">
            <div class="small-12 columns">
                ' .
BOUCLE_articlehtml_acfb689da8b7f0df9e71fabce85f186f($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
        </div>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/pieddepage') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_acfb689da8b7f0df9e71fabce85f186f\',\'\',65,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

    </body>
</html>
');

	return analyse_resultat_skel('html_acfb689da8b7f0df9e71fabce85f186f', $Cache, $page, 'squelettes/article.html');
}
?>