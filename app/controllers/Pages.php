<?php
// set data and load views
class Pages extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }
    public function index() {
        $data = [
            'title' => 'Welcome to Camagru project',
            'description' => 'This is a test before start hiting on Camagru'
        ];
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'Version',
            'description' => '20.20'
        ];
        $this->view('pages/about', $data);
    }
}