<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Filesystem\Filesystem;

class AutoResolvingController
{

    //Auto resolving

    //Class Name Resolution. Without binding
    public function sample()
    {
        dd(app('\App\Sample'));
    }
}
