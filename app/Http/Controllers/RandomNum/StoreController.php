<?php

namespace App\Http\Controllers\RandomNum;

use App\Http\Controllers\Controller;
use App\Http\Requests\RandomNum\StoreRequest;
use App\Http\Resources\RandomNum\RandomNumResource;
use App\Models\RandomNum;
use App\Services\RandomNumService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $from = $request->input('from');
        $to = $request->input('to');

        $resultNumber = 0;

        if($from && $to)
        {
            $resultNumber = RandomNumService::randomFloat($from, $to, $request->precision ?? 2 );
        }
        else
        {
            // Default
            $resultNumber = RandomNumService::randomFloat(1, 10000, 2 );
        }

        $resultRow = RandomNum::create([
            'number' => $resultNumber,
        ]);

        return new RandomNumResource($resultRow);
    }
}
