<?php

function addArticle($article)
{
    if (!empty($_SESSION['cart'][$article])) {
        $_SESSION['cart'][$article]++;
    } else {
        $_SESSION['cart'][$article] = 1;
    }
}