<?php 

    class FriendController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->friendModel = $this->model('Friends_relationship');
        }

        public function requestFriend() {
            App::debug($this->friendModel->sendFriendRequest(), true); 
        }
    }