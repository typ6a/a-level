<?php

$request = 'news/index';

$parts = explode('/', $request);

$className = !empty($parts[0]) ? ucfirst($parts[0]) ? 'news';
$action    = !empty($parts[1]) ? $parts[1] : 'index';

$controllerFile = $className . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    die('No required controller found.');
}

if(class_exists($className)){
    $controller = new $className();
    if(method_exists($controller, $action)){
        echo $controller->$action();
    }
}
echo $controllerFile;