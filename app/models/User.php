<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 11/19/2016
 * Time: 5:40 AM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable=['username','email'];

}