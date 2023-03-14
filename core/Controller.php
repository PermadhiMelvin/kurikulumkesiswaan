<<<<<<< HEAD
<?php 

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
=======
<?php 

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
>>>>>>> be1485fa00b233f352c7778c437791bdc87986b8
}