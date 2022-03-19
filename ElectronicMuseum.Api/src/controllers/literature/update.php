<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

$model = new CulturalRelic();
$model->Name=$_POST["name"];
$model->Dynasty=$_POST["dynasty"];
$model->Region=$_POST["region"];
$model->Introduction=$_POST["introduction"];

update("Literatures",$_GET["id"],$model);
