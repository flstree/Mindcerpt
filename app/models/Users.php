<?php 
  // namespace app\models;
  // require app\base\Model;

  use Rakit\Validation\Validator;

  class Users extends Model {
    public function getUserData($id) {
      return $this->findbyid($id);
    }


    public function validateLogin($formData) {
      $columns = ['id'];
      $where = ['email' => $formData->email, 'password' => $formData->password ];

      return $this->read($columns, $where);
    }

    public function valdateRegistration($formData) {
      $validator = new Validator;

      // make it
      $validation = $validator->make($formData, [
          'firstname'             => 'required',
          'lastname'              => 'required',
          'email'                 => 'required|email',
          'password'              => 'required|min:6',
          'confirm_password'      => 'required|same:password'
      ]);
      
      // then validate
      $validation->validate();
      
      if ($validation->fails()) {
          // handling errors
          $errors = $validation->errors();
          return $errors->all('<li class="list-group-item list-group-item-danger">:message</li>');
      } else {
        $this->surname = $formData['surname'];
        $this->firstname = $formData['firstname'];
        $this->email = password_hash($formData['email'], PASSWORD_DEFAULT);

        
        return true;
      }
    } 
  }
