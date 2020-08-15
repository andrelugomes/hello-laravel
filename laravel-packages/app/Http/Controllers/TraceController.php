<?php


namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Local\Tracing\TraceId\Trace;

class TraceController extends Controller
{
    /**
     * @var Trace
     */
    private $trace;


    /**
     * PackageController constructor.
     * @param Trace $trace
     */
    public function __construct(Trace $trace)
    {
        $this->trace = $trace;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        return new JsonResponse(
            [
                'data' => [
                    'trace_id' => $this->trace->generate()
                ],
            ],
            200
        );
    }

}
