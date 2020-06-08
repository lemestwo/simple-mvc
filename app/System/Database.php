<?php

namespace App\System;

class Database
{
  private static $mysql;

  private static $host = 'localhost';
  private static $port = '3306';
  private static $database = 'simple-mvc';
  private static $user = 'root';
  private static $pass = '';

  /**
   * Generate an instance of the MySql connection
   */
  public static function getConnection(): \PDO
  {
    if (is_null(self::$mysql)) {
      self::$mysql = new \PDO('mysql:host=' . self::$host . ';port= ' . self::$port . ';dbname=' . self::$database, self::$user, self::$pass);
      self::$mysql->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      self::$mysql->exec('set names utf8');
    }
    return self::$mysql;
  }
}
