<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Filesystem\Filesystem;

class ServiceController
{

    //Auto resolving (Reflection). Looking inside Service Container
    public function index(Filesystem $filesystem) // inject by Service Container
    {
        //dd($filesystem);

        //Fetching inside Service Container

        //dd(app(Filesystem::class));
        //dd(resolve(Filesystem::class));

        //From routes\web.php
        //dd(app('example'));

        //Fetching 2
        //dd(app('example'), app('example'));

        //Singleton
        dd(app('single'), app('single'));
    }

    //BindingResolutionException
    public function reflectionError()
    {
        app('unknown');
    }

    //Class Name Resolution. Without binding
    public function sample()
    {
        dd(app('\App\Sample'));
    }

    public function provider()
    {

    }
}
