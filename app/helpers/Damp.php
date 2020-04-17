<?php

declare(strict_types=1);

namespace app\helpers;

class Damp
{
    public static function printr($data): void
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
    }
}