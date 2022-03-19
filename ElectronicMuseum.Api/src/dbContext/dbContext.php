<?php

include "../config.php";
function dbInit()
{
  global $WEB_ROOT;
  header('Content-type:text/html;charset=utf8');
  $configPath = $WEB_ROOT."/../settings.json";
  $config = json_decode(file_get_contents($configPath))->connConfig;
  $pdo = null;
  try {
    $dsn = sprintf(
      'mysql:host=%s;dbname=%s;charset=utf8',$config->host,$config->db,$config->charset
    );
    $pdo =  new PDO($dsn, $config->user, $config->password);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  return $pdo;
}
