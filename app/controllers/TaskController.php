<?php
namespace App\Controllers;

class TaskController extends \App\Controllers\Controller
{
    /**
     * CRUD
     * - Create
     * - Read
     * - Update
     * - Delete
     */
    public function index()
    {
        $tasks = $this->db->query("SELECT * FROM tasks");

        $this->render('index', ['tasks' => $tasks]);
    }
}
