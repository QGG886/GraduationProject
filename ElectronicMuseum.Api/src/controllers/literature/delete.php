<?php
include "../../config.php";
include $WEB_ROOT."/models/models.php";
include $WEB_ROOT."/services/repositoryService.php";

delete("Literatures",$_GET["id"]);