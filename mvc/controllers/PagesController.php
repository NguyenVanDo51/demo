<?php

require_once('BaseController.php');

class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $data = array(
            'name' => 'name 1',
            'age' => 22
        );
        $this->render('home', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}