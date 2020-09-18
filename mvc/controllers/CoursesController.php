<?php
require_once('BaseController.php');
require_once('./models/Course.php');

class CoursesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'courses';
    }

    public function index()
    {
        $courses = Course::all();
        $data = array('courses' => $courses);
        $this->render('index', $data);
    }
}
