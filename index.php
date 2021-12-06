<?php
require_once('lib/Database.php');
require_once('lib/utils.php');
/**
 * 1. Connexion à la base de données avec PDO
 *
 */
$pdo = getPdo();

/**
 * Récupération des articles
 */

$articles = findAllArticles();

/**
 * Affichage de la page d'accueil
 */
$pageTitle = "Accueil";
render('articles/index', compact('pageTitle', 'articles'));
