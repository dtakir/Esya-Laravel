<?php
namespace App\Acme\Transformers;
class UserTransformer extends Transformer
{
    public function  transform($users)
    {
        return [
            'name'=> $users['name'],
            'email'=> $users['email'],
            'password'=> $users['password'],

        ];
    }

}