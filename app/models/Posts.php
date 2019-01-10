<?php 

class Posts extends Model {
    protected $user_id = '';
    protected $title = '';
    protected $body = '';
    protected $category = '';

    public function getAllPosts() {
        return $this->findall();
    }

    public function getPost($id) {
        return $this->findbyid($id);
    }
    
    public function publish_post($formData) {
        $user_id = session('userId');
        $title = $formData->post_title;
        $body = $formData->post_body;
        $category = $formData->post_category;

        $result = $this->save() ;

        if($result === true) {
            return true;
        } else {
            return false;
        }
    }
}