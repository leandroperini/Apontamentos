<?php

$ROUTES = [
    '/'                     => '/controller/MainController@index',
    '/home'                 => '/controller/MainController@index',
    
    '/login'                => '/controller/LoginController@index',
    '/login/cadastrar'      => '/controller/LoginController@cadastroNovo',
    '/login/cadastrado'     => '/controller/LoginController@cadastroSalvo',
    '/login/usuarios'     => '/controller/LoginController@usuarios',
    
    '/admin'                => '/controller/AdminController',
    '/admin/user/edit'      => '/controller/AdminController@userEdit',
    
    '/errors/notfound'      => '/errors/NotFound',
];
