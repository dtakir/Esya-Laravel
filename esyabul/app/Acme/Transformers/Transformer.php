<?php
namespace App\Acme\Transformers;
/**
 * Created by PhpStorm.
 * User: Takir
 * Date: 31.3.2017
 * Time: 15:49
 */
abstract class Transformer
{
    public function transformCollection(array $items)
    {
        return array_map([$this ,'transform'],$items);

    }
    public abstract function transform($items);

}