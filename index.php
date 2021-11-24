<?php

//include storageHandlers:
include_once __DIR__ . "/storageHandler/JSONFile.php";
//include ResultHandler Class
include_once __DIR__ . "/Result.php";

//configure jsonFile class
$storageFilePaths = __DIR__ . "/storage/";
$jsonFileHandler = new JSONFile("test.json", $storageFilePaths);

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

//just echo out the data
echo json_encode($returnData);