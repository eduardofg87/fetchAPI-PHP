<?php

namespace App;

require_once dirname(__DIR__) .'../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//header('Content-Type: application/json; charset=utf-8');
//"Access-Control-Allow-Origin" : "*", 
//"Access-Control-Allow-Credentials" : true 
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Credentials: true");
//exit();
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

$log = new Logger('Debug');
$log->pushHandler(new StreamHandler('../storage/debug.log', Logger::WARNING));

// // add records to the log
//$log->warning(var_dump($_POST));
echo $_POST['codigo'];

//echo $_REQUEST[];
// if ($contentType === "application/json") {
//   //Receive the RAW post data.
//   $content = trim(file_get_contents("php://input"));

//   $decoded = json_decode($content, true);

//   //If json_decode failed, the JSON is invalid.
//   if(! is_array($decoded)) {
//     //$codigo = $_POST['codigo_autenticacao'];
//     //echo $codigo;
//     //echo json_encode($codigo,200);
//     echo $decoded;
//   } else {
//     // Send error back to user.
//   }
// }