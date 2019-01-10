<?php 

class Posts extends Model {
    
    public function getAllPosts() {
        return $this->findall();
    }

    public function getPost($id) {
        return $this->findbyid($id);
    }
    
    public function publish_post($formData) {
        $this->user_id = session('userId');
        $this->title = $formData->post_title;
        $this->body = $formData->post_body;
        $this->category = $formData->post_category;
        
        //Testing to show $this contains the desired variables (comment out this line for prod)
        // App::debug($this);
        
        $result = $this->save() ;

        if($result === true) {
            return true;
        } else {
            return false;
        }
    }
}
