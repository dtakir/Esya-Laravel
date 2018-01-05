<?php
/**
 * Created by PhpStorm.
 * User: Takir
 * Date: 4.4.2017
 * Time: 12:32
 */

namespace App\Acme\Transformers;


class ilTransformer extends Transformer
{
    public function  transform($il)
    {
        return [
            'id'=> $il['id'],
            'il'=> $il['il'],


        ];
    }
}