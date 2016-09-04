<?php

/* 
 * Responsavel pela liberação do acesso a página de Apontamentos
 */

class ApontamentoController extends AppController {

    public function index($param) {
        // Busca de eventos no banco de bados
        $queryEvento = $this->db->execute("SELECT * FROM evento ORDER BY `nome_evento`");
        // Atribui os valores da conulta para passagem para a view
        $this->eventosApontamento = $queryEvento;
        
        // Busca dos gestores no banco de bados
        $queryGestor = $this->db->execute("SELECT id_user, nome_user FROM user WHERE cargo_user=5 AND status_user=1 ORDER BY `nome_user`");
        // Atribui os valores da conulta para passagem para a view
        $this->gestorApontamento = $queryGestor;
        
        // Busca apontamentos no banco de bados
        $queryApontamento = $this->db->execute("SELECT * FROM apontamento");
        // Atribui os valores da conulta para passagem para a view
        $this->listaApontamento = $queryApontamento;
        
        $this->page = 'apontamentos/apontar';
           
         if (isset($_POST["data_apontar"])) { 
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
            header('Location: /login/cadastrado');
            }
            else {
                echo "<script language='javascript' type='text/javascript'>alert('Preencha pelo menos um dos campos!');window.location.href='login.html'</script>";
            }
        }
    }
    
    public function apontamentoSalvo($param) {
        $this->page = 'apontamentos/apontado';
    }
    
    public function apontamentoConsulta($param) {
        // Busca dos gestores na tabala Usuários no banco de bados
        $queryGestor = $this->db->execute("SELECT * FROM user WHERE cargo_user=5 AND status_user=1 ORDER BY `nome_user`");
        // Atribui os valores da conulta para passagem para a view
        $this->gestorApontamento = $queryGestor;
        
        // Busca de Eventos na tabela Apontamento no banco de bados
        $queryEvento = $this->db->execute("SELECT DISTINCT `nome_evento` FROM evento RIGHT JOIN `apontamento` ON id_evento = evento_apontamento ORDER BY `nome_evento`");
        // Atribui os valores da conulta para passagem para a view
        $this->eventoApontamento = $queryEvento;
        
        // Busca das Ordem de Serviço na tabela Apontamento no banco de bados
        $queryOS = $this->db->execute("SELECT DISTINCT `os_apontamento` FROM apontamento ORDER BY `os_apontamento`");
        // Atribui os valores da conulta para passagem para a view
        $this->ordemServApontamento = $queryOS;
        
        // Busca de Sites na tabela Apontamento no banco de bados
        $querySite = $this->db->execute("SELECT DISTINCT `site_apontamento` FROM apontamento ORDER BY `site_apontamento`");
        // Atribui os valores da conulta para passagem para a view
        $this->siteApontamento = $querySite;
        
        // Busca de Veículo na tabela Apontamento no banco de bados
        $queryVeiculo = $this->db->execute("SELECT DISTINCT `veiculo_apontamento` FROM apontamento ORDER BY `veiculo_apontamento`");
        // Atribui os valores da conulta para passagem para a view
        $this->veiculoApontamento = $queryVeiculo;
        
        $this->page = 'apontamentos/consulta';

        if (isset($_POST)) {
            $data       = $_POST["data"];
            $dtInicial  = $_POST["dtInicial"];
            $dtFinal    = $_POST["dtFinal"];
            $tecNome    = $_POST["tecNome"];
            $evento     = $_POST["evento"];
            $ordemServ  = $_POST["ordemServ"];
            $site       = $_POST["site"];
            $gestor     = $_POST["gestor"];
            $GestorNome = $_POST["veiculo"];

            if (isset($_POST["submit"])) { // Verifica se houve submit
                // Busca dos gestores no banco de bados
                $queryApontamento = $this->db->execute("SELECT * FROM apontamento ");
                // Atribui os valores da conulta para passagem para a view
                $this->consultaApontamentos = $queryApontamento;
                
                $this->page = 'apontamentos/consulta';
            }
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