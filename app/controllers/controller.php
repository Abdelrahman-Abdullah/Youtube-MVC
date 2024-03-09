<?php

namespace app\controllers;

class controller
{
    protected function view(string $string , array $data = [])
    {
        extract($data);
        return require_once "../views/{$string}.view.php";
    }
}