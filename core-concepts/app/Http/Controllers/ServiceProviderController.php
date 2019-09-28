<?php


namespace App\Http\Controllers;


use App\Repositories\RepositoryInterface;
use App\Twitter;

class ServiceProviderController
{

    public function index(Twitter $twitter)
    {
        //Unresolvable dependency resolving [Parameter #0 [ <required> string $apiKey ]] in class App\Twitter

        //Twitter has a constructor with params

        //SocialServiceProvider::register() will build it


        dd($twitter);

    }

    public function repo(RepositoryInterface $repository)
    {
        dd($repository); //RepositoryImplementation {#263}
    }

}
