<?php 

    class PostsController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->user = $this->model('Users');
            $this->post = $this->model('Posts');
            $this->comments = $this->model('Comments');
        }

        public function id($id) {
            $singlePost = $this->post->getPost($id);
            $allComments = $this->comments->fetchComments($id);
            $authorData = $this->user->getUserData($id);

            $data['post'] = $singlePost;
            $data['authorData'] = $authorData;


            $data['title'] = 'Post';
            $this->view('index', $data);
        }

        public function create() {
            $data['postMessage'] = '';

            if(Request::get()->has_post()) {
                $formData = (object) Request::get()->post();
                
                //Testing out the $formData variable
                // App::debug($formData);
                // var_dump($formData);

                $result = $this->post->publish_post($formData);
                
                // var_dump($result);
                // App::debug($result, true);
             
                if ($result) {
                    $data['postMessage'] = 'success';
                    $this->view('create', $data);
                } else {
                    $data['postMessage'] = 'error';
                    $this->view('create', $data);
                }
            }
            $this->view('create', $data);
        }
    }
