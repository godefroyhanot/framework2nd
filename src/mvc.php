<?php
// echo "MVC LOADED";
function getLayout($layoutName){
//Faire correspondre le nom du layout avec une include correspondante
$page =  "./templates/layouts/". $layoutName . "_layout.inc.php";
// dd($page);
// J'aimerai verifier que la page souhaité existe
if(file_exists($page)){
    //Inclure la page si elle existe
include_once $page;
} else {
    die("Le layout n'existe pas");
}

}

function getPage(){
    $page = './pages/' . $_GET['page'] . '.page.php';
       
    if(file_exists($page)){
        require_once $page;
    } else {
        require_once "./pages/home.page.php";
    }
}

function getInclude($includeName){
    $include = './templates/includes/' . $includeName . '.inc.php';
       
    if(file_exists($include)){
        //try to get config
    $config = './configs/' . $includeName . '.config.php';
        if(file_exists($config)){
            require_once $config;
        }
         


        include $include;
    }
}

//S'utilise comme : 
// getLayout('html');
// getLayout('home');



