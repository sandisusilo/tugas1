<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{
  private $model;
  private $view;

  public function __construct($model, $view) {
    $this->model = $model;
    $this->view = $view;
  }

  public function login($email, $password) {
    $authenticated = $this->model->authenticate($email, $password);
    
    if ($authenticated) {
      $this->view->renderLoginSuccess($email);
    } else {
      $this->view->renderLoginError();
    }
  }
}