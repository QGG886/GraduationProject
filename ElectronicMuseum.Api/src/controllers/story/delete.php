<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

delete("Stories",$_GET["id"]);