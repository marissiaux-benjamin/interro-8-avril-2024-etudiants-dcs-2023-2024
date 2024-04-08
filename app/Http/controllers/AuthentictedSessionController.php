<?php

namespace App\Http\controllers;

use App\models\Jiris;
use Core\Exceptions\FileNotFoundException;

class AuthentictedSessionController
{
    private Jiris $authenticated;
    public function __construct()
    {
        try {
            $this-> authenticated= new Jiris(base_path('.env.local.ini'));
        } catch (FileNotFoundException $exception) {
            die($exception->getMessage());
        }
    }
    public function create(): void{

    }
    public function store(): void{

    }
}