<?php

namespace App\Http\controllers;

use App\models\Jiris;
use Core\Exceptions\FileNotFoundException;

class RegisteredSessionController
{
        private Jiri $registered;
    public function __construct()
    {
        try {
            $this->registered = new Jiris(base_path('.env.local.ini'));
        } catch (FileNotFoundException $exception) {
            die($exception->getMessage());
        }
    }
    public function create(): void{

    }
    public function store(): void{

    }
}