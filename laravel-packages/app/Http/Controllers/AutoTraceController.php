<?php


namespace App\Http\Controllers;

use Auto\Tracing\TraceId\AutoTracing;
use Illuminate\Http\JsonResponse;

class AutoTraceController extends Controller
{
    /**
     * @var AutoTracing
     */
    private $tracing;


    /**
     * PackageController constructor.
     * @param AutoTracing $tracing
     */
    public function __construct(AutoTracing $tracing)
    {
        $this->tracing = $tracing;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        return new JsonResponse(
            [
                'package' => [
                    'TraceServiceProvider' => 'Injected by Package',
                    'tracing' => $this->tracing->generate()
                ],
            ],
            200
        );
    }

}
