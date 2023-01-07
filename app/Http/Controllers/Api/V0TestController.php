<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V0TestController extends Controller
{
    public function index()
    {
        return 'version 0 or default version';
    }
}
