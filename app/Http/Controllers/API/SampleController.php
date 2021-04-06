<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SampleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $sampleValue = [
            ['text' => '1'],
            ['text' => 'ni'],
            ['text' => 'さん']
        ];
        return \response()->json($sampleValue);
    }
}
