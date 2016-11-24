<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 11/19/2016
 * Time: 1:42 AM
 */
class Home extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user=$this->model('User');
    }

    public function index($name = '')
    {
//        echo '<br>home/index';
//        echo "<br>" . $name;

        $user = $this->user;
        $user->name=$name;

        $this->view('home/index',['name'=>$user->name]);

    }


    public function create($username='',$email=''){

        User::create([
            'username'=>$username,
            'email'=>$email
        ]);
    }

}