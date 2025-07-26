<?php

namespace App\Http\Controllers\RandomNum;

use App\Http\Controllers\Controller;
use App\Http\Resources\RandomNum\RandomNumResource;
use App\Models\RandomNum;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(RandomNum $randomNum)
    {
        return new RandomNumResource($randomNum);
    }
}
