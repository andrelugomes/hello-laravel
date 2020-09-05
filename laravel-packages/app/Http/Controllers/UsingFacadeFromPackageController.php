<?php

namespace App\Http\Controllers;

use Andrelugomes\Calculate\Facades\Calculate;
use App\Calculations;
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

        $calculations = new Calculations();

        return new JsonResponse(
            [
                'package' => [
                    'CalculateServiceProvider' => 'Calculate by Facade',
                    'result' => $calculations->doCalculations(30)
                ],
            ],
            200
        );
    }

}
