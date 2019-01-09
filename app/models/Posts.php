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
        $this->$user_id = session('userId');
        $this->$title = $formData->post_title;
        $this->$body = $formData->post_body;
        $this->$category = $formData->post_category;

        if($this->save() == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}