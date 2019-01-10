<?php 

    class PostsController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->user = $this->model('Users');
            $this->post = $this->model('Posts');
        }

        public function id($id) {
            $singlePost = $this->post->getPost($id);
            $data['post'] = $singlePost;

            $data['title'] = 'Post';
            $this->view('index', $data);
        }

        public function create() {
            $data['postMessage'] = '';

            if(Request::get()->has_post()) {
                $formData = (object) Request::get()->post();
                
                //Testing out the $formData variable
                App::debug($formData);

                $result = $this->post->publish_post($formData);
                App::debug($result);
             
                // if (empty($result)) {
                //         $data['postMessage'] = 'error';
                //         $this->view('create', $data);
                // } else {
                //         $data['postMessage'] = 'success';

                //         // $this->redirect(URL_ROOT . './post/create', $data);
                // }
            }
            $this->view('create', $data);
        }
    }
