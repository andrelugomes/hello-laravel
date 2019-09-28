<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Filesystem\Filesystem;

class BarController
{

    //Auto resolving dependencies too
    public function bar()
    {
        dd(app('\App\Bar'));
    }
}
