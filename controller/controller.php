<?php

require('model/modelHome.php');
require('model/modelAvis.php');

function home() {

    $requete = getUsers();

    require('view/viewHome.php');
}

function avis(){
    $requete = getAvis();

    require('view/viewHome.php');
}
//  require('modelAvis.php');
 
//  $requete = getAvis();

//  require('viewAvis.php');