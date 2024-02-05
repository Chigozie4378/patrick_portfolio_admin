<?php
class ServicesController extends Controller
{
    public function index()
    {
        return $this->fetchAll('services');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $title = Validate::valInput($_POST['title']);
            $body = Validate::valInput($_POST['body']);
            $this->insert('services', $title,$body);
        }
    }
}
