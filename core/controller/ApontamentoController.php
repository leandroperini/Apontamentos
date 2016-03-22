<?php

/* 
 * Responsavel pela liberação do acesso a página de Apontamentos
 */

class ApontamentoController extends AppController {

    public function index($param) {
        $this->page = 'apontamentos/apontar';
    }
    
    public function apontamentoSalvo($param) {
        $this->page = 'apontamentos/apontado';
    }
    
    public function apontamentoConsulta($param) {
        $this->page = 'apontamentos/consulta';
        
        $user = "user";
        
        $resultado = $this->db->execute("SELECT * FROM (?);", [
                'values' => [
                    $user,
                ],
                'types'  => [
                    
                ],
            ]);
        
        print $resultado;    
        echo $resultado;
        die (mysql_error());
        
        /*
        if (isset($_POST["date"]) || isset($_POST["hrInicial"]) || isset($_POST["hrFinal"]) || isset($_POST["tecnicoCod"]) || isset($_POST["TecnicoNome"]) || isset($_POST["GestorNome"])) {
                $data   = $_POST["date"];
                $hrInicial   = $_POST["hrInicial"];
                $hrFinal  = $_POST["hrFinal"];
                $tecnicoCod  = $_POST["tecnicoCod"];
                $TecnicoNome  = $_POST["TecnicoNome"];
                $GestorNome = $_POST["GestorNome"];

                
                
                
                if (isset($_POST["submit"])) {
                    $resultado = $this->db->execute("SELECT * FROM user (nome_user, email_user, cargo_user, senha_user) values (?, ?, ?, ?);", [
                    'values' => [
                        $data,
                        $hrInicial,
                        $hrFinal,
                        $tecnicoCod,
                        $TecnicoNome,
                        $GestorNome,
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
            */
    }
    
    public function apontamentoConsultaResposta($param) {
        $this->page = 'apontamentos/consultaResposta';
    }
}