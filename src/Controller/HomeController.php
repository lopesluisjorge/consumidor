<?php

declare(strict_types=1);

namespace Alunos\Controller;

class HomeController
{
    public function index()
    {
        include \view('home', null);
    }
}
