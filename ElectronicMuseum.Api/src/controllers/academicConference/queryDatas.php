<?php
include "../../config.php";
include $WEB_ROOT."/models/models.php";
include $WEB_ROOT."/services/repositoryService.php";

$datas = queryDatas("CulturalRelics",$_GET["order"],$_GET["pageSize"],$_GET["pageIndex"]);
echo $datas;