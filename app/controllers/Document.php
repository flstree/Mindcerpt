<?php 

    class DocumentController extends Controller {
        public function __construct() {
            //Define All required models here
            $this->documentModel = $this->model('Documents');
        }

        public function saveDoc() {
            $this->documentModel->uploadDoc();
        }
    }