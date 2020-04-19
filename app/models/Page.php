<?php

declare(strict_types=1);

namespace app\models;

use app\core\DB;
use \PDO;

class Page
{
    public function __construct()
    {
        DB::setConfig(ROOT . 'app/config/db_config.php');
        DB::connection();
    }

    public function getOne(int $id)
    {
        return DB::request('SELECT name FROM pages WHERE id = ?', [$id])->fetch(PDO::FETCH_COLUMN);
    }

    public function getAll()
    {
        return DB::query('SELECT id, name FROM pages ORDER BY id ASC')->fetchAll();
    }
}