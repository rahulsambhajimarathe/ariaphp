<?php

use System\View\View;

function view($viewName, $data = [])
{
    $view = new View();
    return $view->render($viewName, $data);
}
