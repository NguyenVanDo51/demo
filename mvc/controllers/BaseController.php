<?php

class BaseController
{
    protected $folder;

    // hien thi ket qua ra
    public function render($file, $data = array())
    {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
           // chuyen mang thanh cac bien
            extract($data);
            ob_start();
            $content = ob_get_contents();
            // sau khi co ket qua da luu vao bien $content, goi ra teamplate chung cho he thong
            require_once ($view_file);
        } else {
            header('Location: index.php?controller=pages&action=error');
        }
    }
}