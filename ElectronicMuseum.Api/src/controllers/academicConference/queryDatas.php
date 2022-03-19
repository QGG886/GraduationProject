<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

$datas = queryDatas("CulturalRelics",$_GET["order"],$_GET["pageSize"],$_GET["pageIndex"]);
echo $datas;