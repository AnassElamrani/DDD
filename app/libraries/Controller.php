<?php

class Controller {
    public function view($url, $data = []) {
        if(file_exists('../app/views/'.$url.'.php')){
            require_once '../app/views/'.$url.'.php';
        }
        else{
            die('there is now view with this name'.$url);
    }
}
}