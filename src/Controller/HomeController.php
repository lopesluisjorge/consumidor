<?php

declare(strict_types=1);

namespace Alunos\Controller;

class HomeController
{
    public function index()
    {
        include __DIR__ . '/../../home.php';
    }
}
