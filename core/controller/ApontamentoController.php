<?php

/* 
 * Responsavel pela liberação do acesso a página de Apontamentos
 */

class ApontamentoController extends AppController {

    public function index($param) {
        // Busca dos cargos no banco de bados
        $query = $this->db->execute("SELECT * FROM evento");
        // Atribui os valores da conulta para passagem para a view
        $this->eventosApontamento = $query;
        
        $this->page = 'apontamentos/apontar';
    }
    
    public function apontamentoSalvo($param) {
        $this->page = 'apontamentos/apontado';
    }
    
    public function apontamentoConsulta($param) {
        $this->page = 'apontamentos/consulta';

        if (isset($_POST["date"]) || isset($_POST["hrInicial"]) || isset($_POST["hrFinal"]) || isset($_POST["tecnicoCod"]) || isset($_POST["TecnicoNome"]) || isset($_POST["GestorNome"])) {
                $data   = $_POST["date"];
                $hrInicial   = $_POST["hrInicial"];
                $hrFinal  = $_POST["hrFinal"];
                $tecnicoCod  = $_POST["tecnicoCod"];
                $TecnicoNome  = $_POST["TecnicoNome"];
                $GestorNome = $_POST["GestorNome"];

                print_r($this->db->execute("SELECT * FROM apontamento")) or die (mysql_error());
                
                /*
                if (isset($_POST["submit"])) {
                    print_r($this->db->execute("select * from user")) or die (mysql_error());
                } else {
                    echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
                }
                 */
            }
    }
    
    public function apontamentoConsultaResposta($param) {
        $this->page = 'apontamentos/consultaResposta';
    }
}