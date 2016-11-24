<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 11/19/2016
 * Time: 1:34 AM
 */
class Controller
{

    public function model($model)
    {
        require_once/** @lang text */
        ('../app/models/' . $model . '.php');

        return new $model();

    }

    public function view($view, $data=[])
    {
        require_once/** @lang text */
        ('../app/views/' . $view . '.php');


    }
}