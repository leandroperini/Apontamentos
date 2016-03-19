<?php

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
               
        
        $nome   = $_POST["nome"];
        $user   = $_POST["user"];
        $senha  = $_POST["senha"];
        $email  = $_POST["email"];
        $cargo  = $_POST["cargo"];
        $status = $_POST["status"];
    
        $resultado = $this->db->execute("INSERT user (nome_user, email_user, cargo_user, senha_user) values (?, ?, ?, ?);", [
            'values' => [
                $user,
                $email,
                $cargo,
                $senha,
            ],
            'types'  => [
                's',
                's',
                'i',
                's',
            ],
        ]);
        
        if (array_key_exists("submit", $_POST)){  // Entra se "submit" existe
            echo $nome, $user, $senha, $email, $cargo, $status;
            header('Location: /login/cadastrado');
        }
        else{
            // echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
        }
    }
    public function cadastroSalvo($param) {
        $this->page = 'login/cadastrado';
    }
    public function usuarios($param) {
        $this->page = 'login/usuarios';
    }
}
