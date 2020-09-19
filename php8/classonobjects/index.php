<?php

namespace App\Model;

class User
{
    //if you dont use php8
    public function name()
    {
        return User::class;
    }
}

$user = new User();

//php7 and below
//var_dump(User::class); //string(14)-App\Model\User

//with php8 this works
//var_dump($user::class);

//When its useful:

class Handler
{
    public function handle(mixed $model)
    {
        // var_dump($model::class)
        //if you dont use php8
         var_dump($model->name());
    }

}

$handler = new Handler();

$handler->handle(new User());