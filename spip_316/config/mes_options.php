<?php
// ref: https://www.spip.net/fr_article4654.html
    // sécurité
    if (!defined('_ECRIRE_INC_VERSION')) {
        return;
    }

    // interdire l'upload de documents de plus de 500 Ko
    define('_DOC_MAX_SIZE', 500);

    // interdire toute exécution des scripts javascript
    // embarqués dans les rédactionnels
    $filtrer_javascript = -1;

    // forcer l’affichage d’un menu déroulant à partir de 2010 pour
    // le champ "Date de première publication"
    $debut_date_publication = '2010';

//  var_dump($_SERVER);
    define('_SOMMAIRE_VOYAGES', "?page=sommaire2");

// variable inc_version.php
/*
        echo "_HTTP_HOST >"._HTTP_HOST."< </br>";

        echo "_ECRIRE_INC_VERSION >"._ECRIRE_INC_VERSION."< </br>";
        echo "_DIR_RESTREINT_ABS >"._DIR_RESTREINT_ABS."< </br>";
        echo "_DIR_RESTREINT >"._DIR_RESTREINT."< </br>";
        echo "_DIR_RACINE >"._DIR_RACINE."< </br>";
        echo "_ROOT_RACINE >"._ROOT_RACINE."< </br>";
        echo "_ROOT_CWD >"._ROOT_CWD."< </br>";
        echo "_ROOT_RESTREINT >"._ROOT_RESTREINT."< </br>";
        echo "_NOM_IMG_PACK >"._NOM_IMG_PACK."< </br>";
        echo "_DIR_IMG_PACK >"._DIR_IMG_PACK."< </br>";
        echo "_ROOT_IMG_PACK >"._ROOT_IMG_PACK."< </br>";
        echo "_JAVASCRIPT >"._JAVASCRIPT."< </br>";
        echo "_DIR_JAVASCRIPT >"._DIR_JAVASCRIPT."< </br>";
        echo "_NOM_TEMPORAIRES_INACCESSIBLES >"._NOM_TEMPORAIRES_INACCESSIBLES."< </br>";
        echo "_NOM_TEMPORAIRES_ACCESSIBLES >"._NOM_TEMPORAIRES_ACCESSIBLES."< </br>";
        echo "_NOM_PERMANENTS_INACCESSIBLES >"._NOM_PERMANENTS_INACCESSIBLES."< </br>";
        echo "_NOM_PERMANENTS_ACCESSIBLES >"._NOM_PERMANENTS_ACCESSIBLES."< </br>";
        echo "_NOM_CONFIG >"._NOM_CONFIG."< </br>";
        echo "_FILE_OPTIONS >"._FILE_OPTIONS."< </br>";
        echo "MODULES_IDIOMES >".MODULES_IDIOMES."< </br>";
        echo "_ECRAN_SECURITE >"._ECRAN_SECURITE."< </br>";
        echo "_IS_BOT >"._IS_BOT."< </br>";
        echo "_LOG_HS >"._LOG_HS."< </br>";
        echo "_LOG_ALERTE_ROUGE >"._LOG_ALERTE_ROUGE."< </br>";
        echo "_LOG_CRITIQUE >"._LOG_CRITIQUE."< </br>";
        echo "_LOG_ERREUR >"._LOG_ERREUR."< </br>";
        echo "_LOG_AVERTISSEMENT >"._LOG_AVERTISSEMENT."< </br>";
        echo "_LOG_INFO_IMPORTANTE >"._LOG_INFO_IMPORTANTE."< </br>";
        echo "_LOG_INFO >"._LOG_INFO."< </br>";
        echo "_LOG_DEBUG' >"._LOG_DEBUG."< </br>";
        echo "E_DEPRECATED >".E_DEPRECATED."< </br>";
        echo "SPIP_ERREUR_REPORT >".SPIP_ERREUR_REPORT."< </br>";
        echo "_LOG_FILTRE_GRAVITE >"._LOG_FILTRE_GRAVITE."< </br>";
        echo "_OUTILS_DEVELOPPEURS >"._OUTILS_DEVELOPPEURS."< </br>";
        echo "_HEADER_COMPOSED_BY >"._HEADER_COMPOSED_BY."< </br>";
*/