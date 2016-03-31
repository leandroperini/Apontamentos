<?php

include '../core/main.includes.php';

$urlComponents = getUrlComponents();
$URLPATH       = $urlComponents['path'];
define("URLPATH", $URLPATH);
$route         = @$ROUTES[$URLPATH];
parse_str(@$urlComponents['query'], $params);
if (!empty($route) && $route != '/errors/NotFound') {
    list($classPath, $method) = explode('@', $route);
    if (empty($method)) {
        $method = 'index';
    }
    @$class = end(explode('/', $classPath));
    try {
        include_once (dirname(__FILE__) . '/' . '../core' . $classPath . '.php');
        $class = new $class;
        $class->$method($params);

        $page   = 'default';
        $page   = $class->page? : $page;
        $layout = 'default';
        $layout = $class->layout? : $layout;
        include_once (dirname(__FILE__) . '/' . "../core/pages/layouts/$layout.php");
    } catch (Exception $exc) {
        echo $exc->getMessage();
    } finally {
        die;
    }
} elseif ($route == '/errors/NotFound') {
    include_once (dirname(__FILE__) . '/' . '../core/errors/NotFound.php');
    $class  = new NotFound;
    $class->index($params);
    $page   = 'default';
    $page   = $class->page? : $page;
    $layout = 'default';
    $layout = $class->layout? : $layout;
    include_once (dirname(__FILE__) . '/' . "../core/pages/layouts/$layout.php");
    die;
} else {
    Header("location: /errors/notfound");
    die();
}

function getUrlComponents() {
    $url        = @$_SERVER['REDIRECT_URL']? : $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $components = parse_url($url? : '/');
    return $components;
}
