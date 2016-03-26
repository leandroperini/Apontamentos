<?php

/**
 * Description of MainController
 */

class MainController extends AppController {
    
    public function index($param) {
        
    }
    
    public function home($param) {
        $this->page = 'principal/home';
    }
}
