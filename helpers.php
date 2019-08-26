<?php

define('TEMPLATE_DIR', __DIR__ . '/views');

function view(string $view, $dados)
{
    include_once TEMPLATE_DIR . '/cabecalho.php';
    include_once TEMPLATE_DIR . '/' . $view . '.php';
    include_once TEMPLATE_DIR . '/rodape.php';
}
