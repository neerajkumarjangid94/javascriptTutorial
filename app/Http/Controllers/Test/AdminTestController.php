<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTestController extends Controller
{
    public static function generalTest(Request $req) {
        return view('Test.generalTest');
    }
}
