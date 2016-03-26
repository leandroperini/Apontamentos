<?php

/* 
 * Responsavel pelo processamento dos Relatórios
 */

class ReportController extends AppController {

    public function index($param) {
        $this->page = 'reports/apontamentos_report';
    }
}