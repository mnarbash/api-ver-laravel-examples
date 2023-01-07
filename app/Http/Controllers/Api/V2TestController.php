<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V2TestController extends Controller
{
    public function index()
    {
        return 'version 2';
    }
}
