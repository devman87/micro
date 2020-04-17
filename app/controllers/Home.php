<?php

declare(strict_types=1);

namespace app\controllers;

use app\core\App;
use app\core\Controller;

class Home extends Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->data['hello'] = 'Добро пожаловать на сайт - ' . App::getConfig('base_url');
    }

    public function index(): void
    {
        $this->data['content'] = 'Главная страница';
        $this->view->generate('home.php', 'template.php', $this->data);
    }

    public function edit(int $id): void
    {
        $this->data['content'] = 'Это страница - ' . $id;
        $this->view->generate('home.php', 'template.php', $this->data);
    }
}