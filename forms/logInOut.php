<?php

function logIn($dbh){
    $bool=isset($_POST["login"]) && isset($_POST["password"]) && Utilisateur::testerMdp($dbh, $_POST["login"], $_POST["password"]);
    
    if ($bool){
        $_SESSION['loggedIn']=true;
        $_SESSION['login']=$_POST["login"];
    }
}

function logOut(){  
    session_unset();
    session_destroy();
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>