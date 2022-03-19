<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

delete("Literatures",$_GET["id"]);