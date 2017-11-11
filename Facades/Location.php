<?php
/**
 * Created by PhpStorm.
 * User: Cookiesoft
 * Date: 11/11/2017
 * Time: 10:56
 */

namespace Modules\Location\Facades;



use Illuminate\Support\Facades\Facade;

class Location extends Facade
{

    protected static function getFacadeAccessor(){
        return 'Location.location';
    }

}