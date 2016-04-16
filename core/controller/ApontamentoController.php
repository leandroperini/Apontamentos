<?php

/* 
 * Responsavel pela liberação do acesso a página de Apontamentos
 */

class ApontamentoController extends AppController {

    public function index($param) {
        // Busca dos cargos no banco de bados
        $queryEvento = $this->db->execute("SELECT * FROM evento ORDER BY `nome_evento`");
        // Atribui os valores da conulta para passagem para a view
        $this->eventosApontamento = $queryEvento;
        
        // Busca dos gestores no banco de bados
        $queryGestor = $this->db->execute("SELECT * FROM user WHERE cargo_user=5 AND status_user=1 ORDER BY `nome_user`");
        // Atribui os valores da conulta para passagem para a view
        $this->gestorApontamento = $queryGestor;
        
        // Busca apontamentos no banco de bados
        $queryApontamento = $this->db->execute("SELECT * FROM apontamento");
        // Atribui os valores da conulta para passagem para a view
        $this->listaApontamento = $queryApontamento;
        
        $this->page = 'apontamentos/apontar';
           
         if (isset($_POST) && isset($_POST["data_apontar"])) { 
            $user           = 1;
            $data           = $_POST["data_apontar"];
            $hr_ini         = $_POST["hrInicial_apontar"];
            $hr_fim         = $_POST["hrFinal_apontar"];
            $ordemServ      = $_POST["ordemServ_apontar"] . "-" . $_POST["ordemServAno_apontar"];
            $site           = $_POST["site_apontar"];
            $evento         = $_POST["evento_apontar"];
            $gestor         = $_POST["gestor_apontar"];
            $atividade      = $_POST["atividade_apontar"];
            $observacao     = $_POST["observacao_apontar"];
            $veiculo        = $_POST["veiculo_apontar"];

            if (isset($_POST["submit_apontar"])) { // Verifica se houve submit 
                $resultado = $this->db->execute("INSERT apontamento (user_apontamento, data_apontamento, hr_ini_apontamento, hr_fim_apontamento, site_apontamento, os_apontamento, evento_apontamento, descricao_apontamento, veiculo_apontamento, gestor_apontamento, obs_apontamento) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);", [
                'values' => [
                    $user,
                    $data,
                    $hr_ini,
                    $hr_fim,
                    $site,
                    $ordemServ,
                    $evento,
                    $atividade,
                    $veiculo,
                    $gestor,
                    $observacao,
                ],
                'types'  => [
                    'i',
                    's',
                    's',
                    's',
                    's',
                    's',
                    'i',
                    's',
                    's',
                    'i',
                    's',
                ],
            ]);
            header('Location: /apontamentos/apontar');
            }
        }
    }
    
    public function apontamentoSalvo($param) {
        $this->page = 'apontamentos/apontado';
    }
    
    public function apontamentoConsulta($param) {
        // Busca dos gestores no banco de bados
        $queryGestor = $this->db->execute("SELECT * FROM user WHERE cargo_user=5 AND status_user=1 ORDER BY `nome_user`");
        // Atribui os valores da conulta para passagem para a view
        $this->gestorApontamento = $queryGestor;
        
        // Busca dos Ordem de Serviço no banco de bados
        $queryOS = $this->db->execute("SELECT * FROM apontamento ORDER BY `os_apontamento`");
        // Atribui os valores da conulta para passagem para a view
        $this->ordemServApontamento = $queryOS;
        
        $this->page = 'apontamentos/consulta';

        if (isset($_POST["date"]) || isset($_POST["hrInicial"]) || isset($_POST["hrFinal"]) || isset($_POST["tecnicoCod"]) || isset($_POST["TecnicoNome"]) || isset($_POST["GestorNome"])) {
                $data   = $_POST["date"];
                $dtInicial   = $_POST["dtInicial"];
                $dtFinal  = $_POST["dtFinal"];
                $TecnicoNome  = $_POST["tecNome"];
                $GestorNome = $_POST["GestorNome"];

                print_r($this->db->execute("SELECT * FROM apontamento")) or die (mysql_error());
            }
    }
    
    public function apontamentoConsultaResposta($param) {
        // Busca dos gestores no banco de bados
        $queryApontamentos = $this->db->execute("SELECT * FROM apontamento ORDER BY `id_apontamento`");
        // Atribui os valores da conulta para passagem para a view
        $this->consultaApontamento = $queryApontamentos;
        
        $this->page = 'apontamentos/consultaResposta';
    }
}