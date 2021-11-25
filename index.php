<?php

//include storageHandlers:
include_once __DIR__ . "/storageHandler/JSONFile.php";
//include ResultHandler Class
include_once __DIR__ . "/Result.php";

//configure jsonFile class
$storageFilePaths = __DIR__ . "/storage/";
//create folder if the folder did not exist
if (!file_exists($storageFilePaths)) {
    mkdir($storageFilePaths, 0777, true);
}
//create JSONFile class instance
$jsonFileHandler = new JSONFile("advent.json", $storageFilePaths);

//fetch result from data
$res = new Result($jsonFileHandler->getJson());
//OPTIONAL: Overwrite days
//$res->setDay(31);

//debug thing:
//var_dump($res->getDataFromArray());

//create returnData object if more data should be returned, thn it can be set there:
$returnData = array(
    "data" => $res->getDataFromArray()
);
//set header to be json
header('Content-Type: application/json; charset=utf-8');

//just echo out the data
echo json_encode($returnData);