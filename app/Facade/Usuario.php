<?php
/**
 * Created by PhpStorm.
 * User: Izaque
 * Date: 03/07/2017
 * Time: 13:37
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class Usuario extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Usuario'; // TODO: Change the autogenerated stub
    }
}