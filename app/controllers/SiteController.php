<?php
namespace App\Controllers;

class SiteController extends \App\Controllers\Controller
{
    public function index()
    {
        $tasks = $this->db->query("SELECT * FROM tasks");

        $this->render('index', ['tasks' => $tasks]);
    }
}
