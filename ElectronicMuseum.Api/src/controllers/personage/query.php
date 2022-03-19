<?php
include "../../config.php";
include $WEB_ROOT."/models/models.php";
include $WEB_ROOT."/services/repositoryService.php";

$data = queryData("Personages",$_GET["id"]);
echo $data;