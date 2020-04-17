<?php

declare(strict_types=1);

namespace app\core;

class View
{
    public function generate(string $content_view, string $template_view, array $data = []): void
    {
        if (!empty($data)) {
            extract($data, EXTR_PREFIX_SAME, "mymvc");
        }

        require_once ROOT . 'app/views/' . $template_view;
        exit;
    }
}