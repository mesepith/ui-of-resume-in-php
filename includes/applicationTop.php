<?php

//define environment
define("ENVIRONMENT", "development");

$protocol = isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) ? $_SERVER["HTTP_X_FORWARDED_PROTO"] : $_SERVER["REQUEST_SCHEME"]; // http or https
define( "PROTOCOL", $protocol );
define("DOMAIN_HOST", PROTOCOL . "://".$_SERVER["HTTP_HOST"]);
//define document root
define("DOCUMENT_ROOT", $_SERVER["DOCUMENT_ROOT"]);

if( ENVIRONMENT == "development" ){
    //define local path
    define("LOCAL_PATH", '/learn/resumenew/');
    
}

define("FILE_PATH", DOMAIN_HOST.LOCAL_PATH);


// echo LOCAL_PATH . ' ####### '. DOCUMENT_ROOT; exit;



