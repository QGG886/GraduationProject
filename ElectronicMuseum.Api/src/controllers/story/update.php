<?php
include "../../config.php";
include $WEB_ROOT."/models/models.php";
include $WEB_ROOT."/services/repositoryService.php";

$model = new CulturalRelic();
$model->Name=$_POST["name"];
$model->Dynasty=$_POST["dynasty"];
$model->Region=$_POST["region"];
$model->Introduction=$_POST["introduction"];

update("Stories",$_GET["id"],$model);
