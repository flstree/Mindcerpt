<?php 

class Posts extends Model {
    
    public function getAllPosts() {
        return $this->findall();
    }

    public function getPost($id) {
        return $this->findbyid($id);
    }
    
    public function publish_post($formData) {
        $form_title = $formData->post_title;
        $form_body = $formData->post_body;
        $form_category = $formData->post_category;

        if ( $form_title && $form_body && $form_category != '') {
            $today = date("YmdHis");
            $body_url = 'user_data/posts/body/' .$today . '.txt'; 
            $title_url = 'user_data/posts/title/' .$today . '.txt'; 
            $category_url = 'user_data/posts/category/' .$today . '.txt'; 

            $title_64 = base64_encode($form_title);
            $body_64 = base64_encode($form_body);
            $category_64 = base64_encode($form_category);

            $mytitle = fopen($title_url, "w");
            $mybody = fopen($body_url, "w");
            $mycategory = fopen($category_url, "w");

            fwrite($mytitle, $title_64);
            fwrite($mybody, $body_64);
            fwrite($mycategory, $category_64);

            fclose($mytitle);
            fclose($mybody);
            fclose($mycategory);

            if ($mytitle && $mybody && $mycategory != false) {
                $this->user_id = session('userId');
                $this->title = $title_url;
                $this->body = $body_url;
                $this->category = $category_url;

                $result = $this->save();

                if($result === true) {    
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($mytitle != false) {
                    unlink($title_url);
                }

                if ($mybody != false) {
                    unlink($body_url);
                }

                if ($mycategory != false) {
                    unlink($category_url);
                }

                echo'checking false';
                die();
                return false;
            }
                
        } else {
            return false;
        }       
    }
}
