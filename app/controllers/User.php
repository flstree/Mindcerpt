<?php 

    class UserController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->userModel = $this->model('Users');

        }

        public function validate() {
            if(Request::get()->has_post()) {
                $formData = (object)Request::get()->post();

                $result = $this->userModel->validateLogin($formData);

                if (empty($result)) {
                    $data['loginError'] = 'Oops! Wrong email or password';
                    $this->view('login', $data);
                } else {
                    $userId = $result[0]->id;

                    session('userId', $userId);

                    $this->redirect(URL_ROOT . './home/index');
                }
            } else {
                $this->view('error/index', $data);
            }
        }

        public function login() {
            $data['loginError'] = '';
            
            $this->view('login', $data);
        }

        public function logout() {
            flash('userId');

            $this->redirect(URL_ROOT . './home/index');
        }
    }