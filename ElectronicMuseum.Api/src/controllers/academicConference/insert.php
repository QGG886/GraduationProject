<?php

include $_SERVER['DOCUMENT_ROOT']."/models/models.php";
include $_SERVER['DOCUMENT_ROOT']."/services/repositoryService.php";

$model = new AcademicConference();
$model->Name=$_POST["name"];
$model->Dynasty=$_POST["dynasty"];
$model->Region=$_POST["region"];
$model->Introduction=$_POST["introduction"];

insert("AcademicConferences",$model);

