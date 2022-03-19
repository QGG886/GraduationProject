<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

$data = queryData("Personages",$_GET["id"]);
echo $data;