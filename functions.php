<?php

function addArticle($article)
{
    if (!empty($_SESSION['cart'][$article])) {
        $_SESSION['cart'][$article]++;
    } else {
        $_SESSION['cart'][$article] = 1;
    }
}

function deleteArticle($article)
{
    $panier = $_SESSION['cart'];
    if(!empty($panier[$article])){
        unset($panier[$article]);
    }
    $_SESSION['cart'] = $panier;
} 

function getCartInfos($catalog)
{
    $panier = $_SESSION['cart'];
    $panierInfos = [];
    foreach($panier as $idPanier => $qty){
        foreach($catalog as $idCatalog => $infos){
            if($idCatalog === $idPanier){
                $panierInfos[] = [
                    'id' => $idPanier,
                    'qty' => $qty,
                    'name' => $infos['name']
                ];
            }
        }
    }
    return $panierInfos;
}