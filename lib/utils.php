<?php

/**
 * Retourne une vue de la page à consulté
 *
 * @param string $path
 * @return $variables
 */
function render(string $path, array $variables)
{
    // j'importe la variable qui contient mes données à passé à la vue sous forme de tableau
    extract($variables);

    // je stock des valeurs exploitable
    ob_start();
    require('templates/' . $path . '.html.php');
    //  j'initise ma variable $page content
    $pageContent = ob_get_clean();
    // je renvoi les données sous forme de variable
    require('templates/layout.html.php');
}

/**
 * je redirie l'utilisateur , en indiquant , l'adresse du chemin
 *
 * @param string $url
 * @return void
 */
function redirect(string $url): void
{
    header("Location: $url");
    exit();
}

function getArticleId(): int
{

    // Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
    if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
        $article_id = $_GET['id'];
        return $article_id;
    }
}
