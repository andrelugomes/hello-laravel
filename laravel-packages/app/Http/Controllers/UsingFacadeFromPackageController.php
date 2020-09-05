<?php

namespace App\Http\Controllers;

use Andrelugomes\Calculate\Facades\Calculate;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class UsingFacadeFromPackageController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        Cache::get(123); //Cache facade

        Calculate::add(20);
        $result = Calculate::subtract(10);

        return new JsonResponse(
            [
                'package' => [
                    'CalculateServiceProvider' => 'Calculate by Facade',
                    'result' => $result->getResult()
                ],
            ],
            200
        );
    }

}
