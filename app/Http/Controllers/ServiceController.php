<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceUserReportIndex()
    {
        return view('personalpage.services.list');
    }

}
