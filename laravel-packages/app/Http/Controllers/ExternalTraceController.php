<?php


namespace App\Http\Controllers;

use External\TraceId\ExternalTrace;
use Illuminate\Http\JsonResponse;

class ExternalTraceController extends Controller
{

    /**
     * @var ExternalTrace
     */
    private $tracing;

    public function __construct(ExternalTrace $tracing)
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
                    'TraceGeneratorServiceProvider' => 'Injected by External Package',
                    'tracing' => $this->tracing->generate()
                ],
            ],
            200
        );
    }

}
