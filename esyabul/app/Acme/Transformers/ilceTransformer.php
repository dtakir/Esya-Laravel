<?php
/**
 * Created by PhpStorm.
 * User: Takir
 * Date: 4.4.2017
 * Time: 13:53
 */

namespace App\Acme\Transformers;


class ilceTransformer extends Transformer
{
public function transform($ilce)
{
return [
    'id'=>$ilce['id'],
    'ilce'=>$ilce['ilce'],
    'ilID'=>$ilce['ilID'],
];
}
}