<?php

/**
 * Description of MainController
 *
 * @author Tárcio Lima
 */
class cadastro{

    public function setCadastro() {
        $nome   = $_POST["nome"];
        $user   = $_POST["user"];
        $senha  = $_POST["senha"];
        $email  = $_POST["email"];
        $cargo  = $_POST["cargo"];
        $status = $_POST["status"];

        print_r($this->db->execute("select * from user"));

        If ($nome != "") {
            $strHeading = "<h1>Olá " . $_POST["nome"] . "</h1>";
        } else {
            $strHeading = "<h1>Favor preencher nome.</h1> ";
        }
        If ($user == "") {
            $strHeading = "<h1>Favor preencher usuário.</h1> ";
        }
        If ($senha == "") {
            $strHeading = "<h1>Favor preencher uma senha.</h1> ";
        }
        If ($email == "") {
            $strHeading = "<h1>Favor preencher seu email.</h1> ";
        }
        If ($cargo == "") {
            $strHeading = "<h1>Favor preencher o código do cargo.</h1> ";
        }

        function setProduto() { //Realiza o insert no banco de dados passando os valores do usuário criado
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
            
            return $dirh = opendir("login/cadastrado");
        }

    }
}