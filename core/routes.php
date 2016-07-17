<?php

$ROUTES = [
    '/'                                         => '/controller/MainController@index',
    '/principal/home'                           => '/controller/MainController@home',
    
    '/login'                                    => '/controller/LoginController@index',
    '/login/recuperarSenha'                     => '/controller/LoginController@recuperarSenha',
    '/login/cadastrar'                          => '/controller/LoginController@cadastroNovo',
    '/login/cadastrado'                         => '/controller/LoginController@cadastroSalvo',
    '/login/usuarios'                           => '/controller/LoginController@usuarios',
    
    '/apontamentos/apontar'                     => '/controller/ApontamentoController@index',
    '/apontamentos/apontado'                    => '/controller/ApontamentoController@apontamentoSalvo',
    '/apontamentos/consulta'                    => '/controller/ApontamentoController@apontamentoConsulta',
    '/apontamentos/consultaResposta'            => '/controller/ApontamentoController@apontamentoConsultaResposta',
    
    '/reports/apontamentos_report'              => '/controller/ReportController@index',
    
    '/permission'                               => '/controller/PermissionController@index',
    
    '/errors/notfound'                          => '/errors/NotFound',
    
];
