<?php

namespace App\System;

class Controller
{
  /**
   * Include view with parameters from the /Views/ folder.
   *
   * @param string $view
   * @param array $data
   */
  public function view($view, $data = []): void
  {
    foreach ($data as $name => $value) {
      ${$name} = $value;
    }
    ob_start();
    $dir =    __DIR__ . '/../Views/';
    include $dir . 'header.php';
    include $dir . $view . '.php';
    include $dir . 'footer.php';
    ob_flush();
  }
}
