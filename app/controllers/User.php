<?php 

    class UserController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->userModel = $this->model('Users');
            $this->friendModel = $this->model('Friends_relationship');
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

        public function profile($id) {
            // App::debug($this->friendModel->getFriendStatus($id), true);
            $result = $this->friendModel->getFriendStatus($id);

            if (!empty($result)) {
                $relationship_type = $result->relationship_type;

                switch($relationship_type){
                    case 'pending_first_second':
                        $data['friend_status'] = 'Request Pending Approval';
                    break;
                    case 'pending_second_first':
                        $data['friend_status'] = 'Accept Request';
                    break;
                    case 'friends':
                        $data['friend_status'] = 'Friends';
                    break;
                    case 'block_first_second':
                        $data['friend_status'] = 'User blocked you';
                    break;
                    case 'block_second_first':
                        $data['friend_status'] = 'You blocked this user';
                    break;
                    case 'block_both':
                        $data['friend_status'] = 'Mutual Block';
                    break;

                    default:
                        break;
                }
            } else {
                $data['friend_status'] = 'Add Friend';
            }
                        
            $data['loginError'] = '';

            $this->view('user/profile', $data);
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