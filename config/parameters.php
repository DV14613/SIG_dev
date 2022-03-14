<?php
define ("APPNAME","SIG_dev");
define ("APP_PORT","80");
define ("DEFAULT_CONTROLLER","DashboardController");
define ("ACTION_DEFAULT","dashboard");
define ("VERSION","Alpha");
define ("PUBLIC_IP","190.26.14.150");
define ("LOCAL_IP","21.12.12");

//Ruta de URL general de la aplicacion
$tmpRuta=explode(APPNAME, $_SERVER['PHP_SELF']);
define ("BASE_URL","http://".$_SERVER['SERVER_NAME'].":".APP_PORT.$tmpRuta[0].APPNAME."/");

//Ruta de URL de las acciones del controlador principal
//define ("base_central","http://".$_SERVER['SERVER_NAME'].":".APP_PORT.$tmpRuta[0].appName."/Central/");


//Ruta de URL de los assets
define ("BASE_ASSETS",BASE_URL."views/assets/"); 

//Ruta relativa para el uso de include o require
$tmpRuta=explode('index.php', $_SERVER['SCRIPT_FILENAME']);
define ("BASE_RELATIVE",$tmpRuta[0]."views/"); 
?>
