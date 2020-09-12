<?php

namespace App\Http\Controllers;

use Andrelugomes\Calculate\Facades\Calculate;
use App\Calculations;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class UsingConfigsFromPackageController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //$alias = config('alias');
        $config = config('config-file');

        return new JsonResponse(
            [
                'override' => [
                    'config-file' => $config,
                    'config-file.options' => [
                        'config[\'Foo\']' => $config['Foo'],
                        'config(\'config-file.New\')' => config('config-file.New')
                    ],
                ],
                /*'original' => [
                    'config-from-alias' => $alias,
                    'alias.options' => [
                        'alias[\'Foo\']' => $alias['Foo'],
                        'config(\'alias.Foo\')' => config('alias.Foo'),
                        'config(\'alias.Default\')' => config('alias.Default'),
                        'config(\'alias.New\')' => config('alias.New') //null expected
                    ],
                ],*/
            ],
            200
        );
    }

}
