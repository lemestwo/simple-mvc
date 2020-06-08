<?php

namespace App\Controllers;

use App\Models\User;
use App\System\Controller;

class UserController extends Controller
{

  /**
   * Return view with all users.
   */
  public function index()
  {
    return $this->view('User/index', ['users' => User::all()]);
  }

  /**
   * Return view to create new user
   */
  public function create()
  {
    return $this->view('User/create');
  }

  /**
   * Return view to edit provided user
   *
   * @param int $id
   */
  public function edit($id)
  {
    return $this->view('User/edit', ['user' => User::find($id)]);
  }

  /**
   * Create user and returns
   */
  public function store(): int
  {
    if (User::create($_POST['name'])) {
      return http_response_code(200);
    } else {
      return http_response_code(404);
    }
  }

  /**
   * Delete user and returns
   *
   * @param int $id
   */
  public function delete($id): int
  {
    if (User::delete($id)) {
      return http_response_code(200);
    } else {
      return http_response_code(404);
    }
  }

  /**
   * Edit user and returns
   *
   * @param int $id
   */
  public function patch($id): int
  {
    if (User::patch($_POST['name'], $id)) {
      return header('Location: ../');
    } else {
      return http_response_code(404);
    }
  }
}
