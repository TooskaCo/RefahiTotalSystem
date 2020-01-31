<?php


namespace App\Http\Controllers;
use DB;

class spController
{
    public function execSP($id)
    {
        $result = DB::update('EXEC  Usp_CreateQuota ?' , [$id]);
        return redirect()->back()->with('success', 'سهمیه بندی با موفقیت انجام شد'); //->route('period.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');

    }

}
