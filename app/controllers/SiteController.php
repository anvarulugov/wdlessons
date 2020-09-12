<?php
namespace App\Controllers;

class SiteController extends \App\Controllers\Controller
{
    public function index()
    {
        $tasks = [
            [
                'id' => 1,
                'task' => 'Routerni ishga tushirish',
                'status' => 'finished',
            ],
            [
                'id' => 2,
                'task' => 'Viewlar to\'g\'ri ishlashini tashkil qilish',
                'status' => 'in progress',
            ],
        ];

        $this->render('index', ['tasks' => $tasks]);
    }
}
