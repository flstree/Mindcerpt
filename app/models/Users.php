<?php 

  class Users extends Model {
    public function getUserData($id) {
      return $this->findbyid($id);
    }

    public function register() {

    }

    public function validateLogin($formData) {
      $columns = ['id'];
      $where = ['email' => $formData->email, 'password' => $formData->password ];

      return $this->read($columns, $where);
    }
  }
