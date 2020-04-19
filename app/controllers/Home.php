<?php

declare(strict_types=1);

namespace app\controllers;

use app\core\App;
use app\core\Controller;
use app\models\Page;

class Home extends Controller
{
    protected $data;
    protected $model;

    public function __construct()
    {
        parent::__construct();
        $this->data['hello'] = 'Добро пожаловать на сайт - ' . App::getConfig('base_url');
        $this->model = new Page;
    }

    public function index(): void
    {
        $this->data['content'] = 'Главная страница';
        $this->data['rows'] = $this->model->getAll();
        $this->view->generate('home.php', 'template.php', $this->data);
    }

    public function page(int $id): void
    {
        $this->data['content'] = 'Это страница - ';
        $this->data['content'] .= $this->model->getOne($id);
        $this->view->generate('page.php', 'template.php', $this->data);
    }
}