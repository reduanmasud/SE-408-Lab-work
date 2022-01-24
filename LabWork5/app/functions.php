<?php

function open_cont($page)
{
    require "controllers/$page.ctrl.php";
    
}

function view($page, $model = '', $controller = '')
{
    global $app;
    require 'views/layout.view.php';
}

function is_get(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        return true;
    } else {

        return false;
    }
}
