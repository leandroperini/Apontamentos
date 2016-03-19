<?php

$ROUTES = [
    '/'                                         => '/controller/MainController@index',
    '/home'                                     => '/controller/MainController@index',
    
    '/login'                                    => '/controller/LoginController@index',
    '/login/cadastrar'                          => '/controller/LoginController@cadastroNovo',
    '/login/cadastrado'                         => '/controller/LoginController@cadastroSalvo',
    '/login/usuarios'                           => '/controller/LoginController@usuarios',
    
    '/apontamentos/apontar'                     => '/controller/ApontamentoController@index',
    '/apontamentos/apontado'                    => '/controller/ApontamentoController@apontamentoSalvo',
    '/apontamentos/consulta'                    => '/controller/ApontamentoController@apontamentoConsulta',
    '/apontamentos/consultaResposta'            => '/controller/ApontamentoController@apontamentoConsultaResposta',
    
    '/admin'                                    => '/controller/AdminController',
    '/admin/user/edit'                          => '/controller/AdminController@userEdit',
    
    '/errors/notfound'                          => '/errors/NotFound',
];
