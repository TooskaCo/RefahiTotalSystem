<?php


namespace App\Http\Controllers;
use DB;

class spController
{
    public function execSP(Request $request, $id)
    {
        DB::select('call Usp_CreateQuota($id)' );
    }

}
