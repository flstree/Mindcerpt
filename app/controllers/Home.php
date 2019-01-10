<?php

  class HomeController extends Controller {

    public function __construct(){
      //Define All required models here
      $this->user = $this->model('Users');
      $this->post = $this->model('Posts');
    }


    public function index(){
      $posts = $this->post->getAllPosts();
      $data = [
        'title' => 'Home Page'
      ];
      $data['posts'] = $posts;
      $this->view('index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Page'
      ];
      
      $this->view('about', $data);
    }

    public function contact(){
      $this->view('contact');
    }
  }