<?php

namespace App\Controllers;

abstract class Controller {

    public $layout = 'main';

    public function render($template, $data = [])
    {
        $content = $this->renderPartial($template, $data);
        include_once(VIEWS . '/layouts/' . $this->layout . '.php');
    }

    public function renderPartial($template, $data = [])
    {
        $controller = substr(strrchr(get_called_class(), "\\"), 1);
        $view_folder = strtolower(str_replace('Controller', '', $controller));
        $view_path = VIEWS . '/' . $view_folder . '/' . $template . '.php';
        if (file_exists($view_path)) {
            ob_start();
            extract($data);
            unset($data);
            include_once($view_path);
            $content = ob_get_contents();
            ob_end_clean();
        } else {
            $content = 'The view path does not exists in expected path:' . $view_path;
        }
        return $content;
    }

}