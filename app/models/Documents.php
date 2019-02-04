<?php 

    class Documents extends Model {
        public function uploadDoc() {
            $this->user_id = 3;
            $this->document = 'localhost/user_data/images/hjklisbuurhifjsdks_fisji%kjdfioif(jnns0844jd';
            $this->save();
        }

        public function acceptFriendRequest() {

        }
    }