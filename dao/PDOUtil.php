<?php

namespace dao;

use PDO;

/**
 * @author Robby Tan
 */
class PDOUtil
{
  public static function createDBConnection(): PDO
  {
    $conn = new PDO("mysql:host=localhost;dbname=pwl20232", "username", "password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    return $conn;
  }
}