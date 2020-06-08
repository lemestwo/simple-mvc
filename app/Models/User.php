<?php

namespace App\Models;

use App\System\Database;

class User
{
  /**
   * Get all users
   */
  public static function all(): array
  {
    $conn = Database::getConnection();
    $data = $conn->query("SELECT * FROM `users`;")->fetchAll();
    return $data;
  }

  /**
   * Get single user by $id
   *
   * @param [int] $id
   */
  public static function find(int $id): array
  {
    $conn = Database::getConnection();
    $data = $conn->prepare("SELECT * FROM `users` WHERE id = ?;");
    $data->execute([$id]);
    return $data->fetch();
  }

  /**
   * Create new user into database
   *
   * @param string $name
   */
  public static function create($name): bool
  {
    $conn = Database::getConnection();
    $query = $conn->prepare("INSERT INTO users (name) VALUES (?);");
    if ($query->execute([$name])) {
      return true;
    }
    return false;
  }

  /**
   * Delete user from database using it's id
   *
   * @param int $id
   */
  public static function delete($id): bool
  {
    $conn = Database::getConnection();
    $query = $conn->prepare("DELETE FROM users WHERE id = ?;");
    if ($query->execute([$id])) {
      return true;
    }
    return false;
  }

  /**
   * Edit user from database using it's id as reference
   *
   * @param string $name
   * @param int $id
   */
  public static function patch($name, $id): bool
  {
    $conn = Database::getConnection();
    $query = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
    if ($query->execute([$name, $id])) {
      return true;
    }
    return false;
  }
}
