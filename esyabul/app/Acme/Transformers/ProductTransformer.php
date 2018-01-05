<?php
/**
 * Created by PhpStorm.
 * User: Takir
 * Date: 4.4.2017
 * Time: 14:15
 */

namespace App\Acme\Transformers;


class ProductTransformer extends Transformer
{
    public function  transform($product)
    {
        return [
            'id'=> $product['id'],
            'name'=> $product['name'],
            'baslik'=> $product['baslik'],
            'ozellik'=> $product['ozellik'],
            'il_id'=> $product['il_id'],
            'ilce_id'=> $product['ilce_id'],
            'user_id'=> $product['user_id'],


        ];
    }
}