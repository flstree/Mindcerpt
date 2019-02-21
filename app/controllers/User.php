<?php 

class UserController extends Controller {
    public function __construct(){
        //Define All required models here
        $this->user = $this->model('users');
    }

    public function index() {

    }

    public function login() {
        $this->view('login');
    }

    public function register() {
        $data = [
            'results'         => '',
            'formData'        => '',
            'registerSuccess' => ''
        ];
        if (Request::get()->has_post()) {
            $formData = Request::get()->post();
            $result = $this->user->valdateRegistration($formData);

            if ($result === true) {
                $data['registerSuccess'] = 'success';
                $this->redirect('register',$data);
            } else {
                $data['results'] = $result;
                $data['formData'] = (object)$formData;
                $this->redirect('register',$data);
            }
        } else{
            $this->view('register', $data);
        }
    }
}