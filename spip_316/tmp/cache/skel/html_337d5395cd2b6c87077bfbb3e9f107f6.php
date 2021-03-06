<?php

/*
 * Squelette : squelettes/mot.html
 * Date :      Tue, 29 Aug 2017 13:55:21 GMT
 * Compile :   Wed, 25 Oct 2017 08:20:15 GMT
 * Boucles :   _nb_articles, _articles_mot_cle, _mot_cle
 */ 

function BOUCLE_nb_articleshtml_337d5395cd2b6c87077bfbb3e9f107f6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

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
		array('squelettes/mot.html','html_337d5395cd2b6c87077bfbb3e9f107f6','_nb_articles',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_nb_articles']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_nb_articles']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_nb_articles @ squelettes/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_articles_mot_clehtml_337d5395cd2b6c87077bfbb3e9f107f6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_articles_mot_cle';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.date",
		"articles.lang");
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
		array('squelettes/mot.html','html_337d5395cd2b6c87077bfbb3e9f107f6','_articles_mot_cle',33,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_articles_mot_cle']['compteur_boucle'] = 0;
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_articles_mot_cle']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                            <p>
                                ' .
$Numrows['_articles_mot_cle']['compteur_boucle'] .
')
                                <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a> 
                                (Rédigé par : ' .
recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => $Pile[$SP]['id_article'],'id_article' => $Pile[$SP]['id_article']), array('trim'=>true, 'compil'=>array('squelettes/mot.html','html_337d5395cd2b6c87077bfbb3e9f107f6','_articles_mot_cle',38,$GLOBALS['spip_lang'])), '') .
', publié le ' .
interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
').
                            </p> 
                        ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_articles_mot_cle @ squelettes/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mot_clehtml_337d5395cd2b6c87077bfbb3e9f107f6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mot_cle';
		$command['from'] = array('mots' => 'spip_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.id_mot",
		"mots.titre",
		"mots.texte");
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
		array('squelettes/mot.html','html_337d5395cd2b6c87077bfbb3e9f107f6','_mot_cle',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
                    <h3>Mot-clé : ' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
                    <p>' .

((!is_array($l = quete_logo('id_mot', 'ON', $Pile[$SP]['id_mot'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'</p>
                    ' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
                    
                    <h3>
                        ' .
(($t1 = BOUCLE_nb_articleshtml_337d5395cd2b6c87077bfbb3e9f107f6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                            ' . $t1 . (	(($Numrows['_nb_articles']['total'] < '2') ? 'Article':(	'Liste des ' .
			$Numrows['_nb_articles']['total'] .
			' articles')) .
		'
                            de ce mot-clé :
                        ')) :
		'') .
'
                    </h3>
                    ' .
(($t1 = BOUCLE_articles_mot_clehtml_337d5395cd2b6c87077bfbb3e9f107f6($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
                        ' . $t1 . '
                    ') :
		'') .
'
                ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mot_cle @ squelettes/mot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/mot.html
// Temps de compilation total: 26.000 ms
//

function html_337d5395cd2b6c87077bfbb3e9f107f6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head2') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/mot.html\',\'html_337d5395cd2b6c87077bfbb3e9f107f6\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

        

    </head>
    <body>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/entete') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/mot.html\',\'html_337d5395cd2b6c87077bfbb3e9f107f6\',\'\',14,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/mot.html\',\'html_337d5395cd2b6c87077bfbb3e9f107f6\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

        
        <div class="row">
            <div class="small-12 columns">
                ' .
BOUCLE_mot_clehtml_337d5395cd2b6c87077bfbb3e9f107f6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
            </div>
        </div>

         
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/pieddepage') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/mot.html\',\'html_337d5395cd2b6c87077bfbb3e9f107f6\',\'\',47,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

    </body>
</html>
');

	return analyse_resultat_skel('html_337d5395cd2b6c87077bfbb3e9f107f6', $Cache, $page, 'squelettes/mot.html');
}
?>