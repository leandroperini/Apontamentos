<?php

/**
 * Description of MainController
 *
 * @author Leandro Perini
 */
class LoginController extends AppController {

    public function index($param) {
        
        $sql = $this->db->execute("SELECT * FROM cargo");
        
        $result = mysqli_query($this->db->connect, $sql);
        
        while ($row = mysqli_fetch_array($result)) {
            $cargo = $row['nome_cargo'];
            
            echo '<select name="cargo">';
            echo "<option value='$cargo'>$cargo</option></select>'";
        }
        
        $this->page = 'login/login';
    }

    public function cadastroNovo($params) {
        $this->page = 'login/cadastrar';
        
        if (isset($_POST["nome"]) && isset($_POST["user"]) && isset($_POST["senha"])) {
            $nome   = $_POST["nome"];
            $user   = $_POST["user"];
            $senha  = MD5($_POST["senha"]);
            $email  = $_POST["email"];
            $cargo  = $_POST["cargo"];
            $status = $_POST["status"];

            if (isset($_POST["submit"])) {
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
            header('Location: /login/cadastrado');
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
            }
        } 
    }
        

    public function cadastroSalvo($param) {
        $this->page = 'login/cadastrado';
    }

    public function usuarios($param) {
        $this->page = 'login/usuarios';
    }

}
