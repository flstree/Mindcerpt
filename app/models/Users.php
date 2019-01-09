<?php 

  class Users extends Model {
    public function getUserData() {

    }

    public function register() {

    }

    public function validateLogin($formData) {
      $columns = ['id'];
      $where = ['email' => $formData->email, 'password' => $formData->password ];

      return $this->read($columns, $where);
    }
  }
