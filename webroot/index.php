<?php

include "../core/main.includes.php";

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
    $class = end(explode('/', $classPath));
    try {
        include_once '../core' . $classPath . '.php';
        $class = new $class;
        $class->$method($params);

        $page = '../core/pages/default.php';
        $page = $class->page? : $page;
        include_once '../core/pages/' . $page . '.php';
    } catch (Exception $exc) {
        echo $exc->getMessage();
    } finally {
        die;
    }
} elseif ($route == '/errors/NotFound') {
    include_once '../core/errors/NotFound.php';
    $class = new NotFound;
    $class->index($params);
    $page  = '../core/pages/default.php';
    $page  = $class->page? : $page;
    include_once '../core/pages/' . $page . '.php';
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
