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
    }
    
    public function apontamentoConsultaResposta($param) {
        $this->page = 'apontamentos/consultaResposta';
    }
}