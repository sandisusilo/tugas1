<?php

namespace App\Models;

use App\Core\Model;

class home extends Model
{

    private $db;

    public function __construct($db) {
      $this->db = $db;
    }
  
    public function authenticate($email, $password) {
      $query = "SELECT * FROM tb_users WHERE user_email = :user_email";
      $stmt = $this->db->prepare($query);
      $stmt->bindParam(':user_email', $email);
      $stmt->execute();
      
  
      if ($email && password_verify($password, $email['user_password'])) {
        return true;
      } else {
        return false;
      }
    }
    }