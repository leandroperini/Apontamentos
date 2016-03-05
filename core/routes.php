<?php

$ROUTES = [
    '/'                => '/controller/MainController@index',
    '/home'            => '/controller/MainController@index',
    '/login'           => '/controller/LoginController',
    '/login/cadastrar' => '/controller/LoginController@cadastroNovo',
//    '/login/salvacadastro' => '/controller/LoginController@cadastroNovo',
    '/admin'           => '/controller/AdminController',
    '/admin/user/edit' => '/controller/AdminController@userEdit',
    '/errors/notfound' => '/errors/NotFound',
];
