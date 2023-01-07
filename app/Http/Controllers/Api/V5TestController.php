<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V5TestController extends Controller
{
    public function index()
    {
        return 'version 5';
    }
}
