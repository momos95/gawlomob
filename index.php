<?php
session_start();
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$path = str_replace('\\', '/', getcwd() )  ; 

define("BASE_SITE_APP", $path."/application");
define("BASE_SITE_PUB", $path."/public");


$param          = explode("/", $_SERVER['REQUEST_URI']) ;
$controller     = isset($param[2]) ? $param[2] : "" ;
$action         = isset($param[3]) ? $param[3] : "" ;
$third_param    = (isset($param[4]) && !empty($param[4]) ) ? $param[4] :  "";
$warning        = (isset($param[5])) && !empty($param[5]) ;

include_once BASE_SITE_APP.'/configs/lesCheminsurls.php';
include_once BASE_SITE_APP.'/configs/lesClasses.php';
include_once BASE_SITE_APP.'/configs/baseDeDonnees.php' ;



if(!empty($warning)){
    header("Location: /gawlomob/");
}

/****** POUR L'APPLICATION ******/

if(strcmp($controller, "application") == 0){



    $cont = new ApplicationController();


    if(!empty($action) && strcmp($action, "ionicArticles") == 0){
        $cont->listAllArticles();
    }

    else{
        $response['error'] = TRUE ;
        $response["error_msg"]= "Action non trouvée !" ;
        echo json_encode($response);
    }

}

else{
    $response['error'] = TRUE ;
    $response["error_msg"]= "Page non trouvée !" ;
    echo json_encode($response);
}
exit ;