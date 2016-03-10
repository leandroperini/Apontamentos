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
class LoginController extends AppController {

    public function index($param) {
        $this->page = 'login/login';
    }

    public function cadastroNovo($params) {
        $this->page = 'login/cadastrar';
        /* $nome       = 'tarcio';
        $senha      = '321';
        
        echo $this->db->execute("insert teste (nome, senha) values (?, ?);", [
            'values' => [
                $nome,
                $senha,
            ],
            'types'  => [
                's',
                's',
            ],
        ]);
         * 
         */
        print_r($this->db->execute("select * from user"));
    }
    public function cadastroSalvo($param) {
        $this->page = 'login/cadastrado';
    }
    public function usuarios($param) {
        $this->page = 'login/usuarios';
    }
}
