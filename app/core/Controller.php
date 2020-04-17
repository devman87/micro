<?php

declare(strict_types=1);

namespace app\core;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
}