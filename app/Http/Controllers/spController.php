<?php


namespace App\Http\Controllers;
use DB;

class spController
{
    public function execSP($id)
    {
        DB::select('EXEC  Usp_CreateQuota ?' , [$id]);
        return redirect()->with('success', 'اطلاعات با موفقیت ویرایش شد'); //->route('period.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');

    }

}
