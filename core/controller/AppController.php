<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author Leandro Perini
 */
class AppController {

    public $page = 'default';
    public $db   = null;

    public function __construct() {
        $this->db = new Database();
    }

    public function index() {
        
    }

}
