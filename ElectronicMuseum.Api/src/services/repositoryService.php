<?php
include "../config.php";
include $WEB_ROOT . "/dbContext/dbContext.php";
//查询（表，限制条数，页数，排序方式）
//查询（表，id）
//查询（查询目标表，限制条件表，id）
//插入（表，插入对象）
//更改（表，id，修改对象）
//删除（表，id）


function toList($query)
{
  $list = array();
  while ($field = $query->fetch(PDO::FETCH_ASSOC)) {
    $list[] = toJson($field);
  }
  return toJson($list);
}

function toJson($model)
{
  return json_encode($model);
}

function queryDatas($table, $order, $pageSize, $pageIndex)
{
  $pdo = dbInit();
  $sqlStr = "SELECT * FROM {$table}";
  $query = $pdo->query($sqlStr);
  return toList($query);
}

function queryData($table, $id)
{
  $pdo = dbInit();
  $sqlStr = "SELECT * FROM {$table} WHERE Id = {$id}";
  $query = $pdo->query($sqlStr);
  return toList($query);
}

function queryDatasByOtherTable($targetTable, $limitTable, $id)
{
  $pdo = dbInit();
}

function insert(string $table, $model)
{
  $pdo = dbInit();
  $insertValues = "";
  switch ($table) {
    case 'Stories':
      $insertValues = "'{$model->Name}','{$model->Dynasty}','{$model->Region}','{$model->Introduction}','{$model->Content}'";
      break;
    case 'AcademicConferences':
      $insertValues = "'{$model->Name}','{$model->Region}','{$model->Introduction}','{$model->Datetime}'";
      break;
    default:
      $insertValues = "'{$model->Name}','{$model->Dynasty}','{$model->Region}','{$model->Introduction}'";
      break;
  }
  $sqlStr = "INSERT INTO {$table} VALUES (0,{$insertValues});";
  $pdo->exec($sqlStr);
}

function insertMiddleTable($table, $targetId, $limitId)
{
  $pdo = dbInit();
  $sqlStr = "INSERT INTO {$table} VALUES (0,'{$targetId}','{$limitId}')";
  $pdo->exec($sqlStr);
}

function update($table, $id, $model)
{
  $pdo = dbInit();
  $updateValues = "";
  switch ($table) {
    case 'Stories':
      $updateValues = "Name='{$model->Name}',Dynasty='{$model->Dynasty}',Region='{$model->Region}',Introduction='{$model->Introduction}',Content='{$model->Content}'";
      break;
    case 'AcademicConferences':
      $updateValues = "Name='{$model->Name}',Region='{$model->Region}',Introduction='{$model->Introduction}',Datetime='{$model->Datetime}'";
      break;
    default:
      $updateValues = "Name='{$model->Name}',Dynasty='{$model->Dynasty}',Region='{$model->Region}',Introduction='{$model->Introduction}'";
      break;
  }
  $sqlStr = "UPDATE {$table}
  SET {$updateValues}
  WHERE Id=${id};";
  $pdo->exec($sqlStr);
}

function delete($table, $id)
{
  $pdo = dbInit();
  $sqlStr = "DELETE FROM {$table} WHERE Id = {$id}";
  $pdo->exec($sqlStr);
}

