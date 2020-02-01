<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function payUserReportIndex()
    {
        return view('personalpage.pay.list');
    }
    public function creditUserReportIndex()
    {
        return view('personalpage.credit.list');
    }

}
