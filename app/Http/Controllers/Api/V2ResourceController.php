<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V2ResourceController extends Controller
{
    public function index(Request $request)
    {
        return 'resource index v2';
    }
}
