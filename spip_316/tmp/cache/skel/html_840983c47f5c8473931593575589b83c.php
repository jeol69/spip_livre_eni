<?php

/*
 * Squelette : ../plugins-dist/mots/formulaires/editer_mot.html
 * Date :      Wed, 19 Jul 2017 14:35:19 GMT
 * Compile :   Thu, 11 Jan 2018 12:51:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/formulaires/editer_mot.html
// Temps de compilation total: 14.001 ms
//

function html_840983c47f5c8473931593575589b83c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_mot formulaire_editer_mot-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_mot', null), 'nouveau'),true)) .
'\'>
	<!-- <br class=\'bugajaxie\' /> -->
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
	'<input type=\'hidden\' name=\'id_mot\' value=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_mot', null),true)) .
	'\' />
	  <div class="editer-groupe">
	    <div class="editer editer_titre obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="titre">' .
	_T('mots:info_titre_mot_cle') .
	'<em class="aide">' .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('titre','../plugins-dist/mots/formulaires/editer_mot.html', $Pile[0]):'')) .
	'</em></label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'titre\' id=\'titre\' value="' .
	table_valeur(@$Pile[0], (string)'titre', null) .
	'" placeholder="' .
	_T('mots:texte_nouveau_mot') .
	'" />
	    </div>
	    <div class="editer editer_groupe_mot obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_groupe'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="id_groupe">' .
	_T('mots:info_dans_groupe') .
	'<em class="aide">' .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('id_groupe','../plugins-dist/mots/formulaires/editer_mot.html', $Pile[0]):'')) .
	'</em></label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_groupe')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	recuperer_fond( 'formulaires/selecteur_groupe_mot' , array('id_groupe' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_groupe', null),true)) ,
	'table' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'table', null), ''),true)) ,
	'name' => 'id_groupe' ,
	'id' => 'id_groupe' ), array('compil'=>array('../plugins-dist/mots/formulaires/editer_mot.html','html_840983c47f5c8473931593575589b83c','',17,$GLOBALS['spip_lang'])), _request('connect')) .
	'
	    </div>
	    <div class="editer editer_descriptif' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="descriptif">' .
	_T('public|spip|ecrire:texte_descriptif_rapide') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<textarea name=\'descriptif\' id=\'descriptif\' rows=\'4\' cols=\'40\'>' .
	table_valeur(@$Pile[0], (string)'descriptif', null) .
	'</textarea>
	    </div>
	    <div class="editer editer_texte' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="text_area">' .
	_T('public|spip|ecrire:info_texte_explicatif') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	(($t2 = strval(sinon(table_valeur(@$Pile[0], (string)'_texte_trop_long', null), '')))!=='' ?
			($t2 . '
				') :
			'') .
	'<textarea name=\'texte\' id=\'text_area\' cols=\'40\' rows=\'' .
	plus(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'lignes'),'2') .
	'\'>' .
	table_valeur(@$Pile[0], (string)'texte', null) .
	'</textarea>
	    </div>
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class="boutons"><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_840983c47f5c8473931593575589b83c', $Cache, $page, '../plugins-dist/mots/formulaires/editer_mot.html');
}
?>