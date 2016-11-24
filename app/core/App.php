<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 11/19/2016
 * Time: 1:30 AM
 */
class App
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
//  print_r( $this->parseUrl()) ;
        $url = $this->parseUrl();
        echo '<br>';
        print_r($url);
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        };


        require_once/** @lang text */
        ('../app/controllers/' . ucfirst($this->controller) . '.php');

//  print_r( $this->parseUrl()) ;
        echo '<br>';
        print_r($url);
//    echo $this->controller;
        $this->controller = new $this->controller;
//    var_dump($this->controller);

        if (isset($url[1])) {
            if (method_exists($this->controller, $url['1'])) {
                $this->method = $url[1];
                unset($url[1]);
                echo '<br>';
                print_r($url);
            }

        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);


    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            return null;
        }


    }

}