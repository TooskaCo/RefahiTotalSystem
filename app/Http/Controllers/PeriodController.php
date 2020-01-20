<?php

namespace App\Http\Controllers;

use App\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Period::latest()->paginate(5);
        return view('admin.period.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.period.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'title'    =>  'required'
        ]);

        $form_data = array(
            //'id'=>1,
            'Title'       =>   $request->title,
            'StartDate'        =>   $request->startDate,
            'EndDate' => $request->endDate,
            'ReserveStartDate' => $request->reserveStartDate,
            'ReserveEndDate' => $request->reserveEndDate,
            'LotteryDate'=> $request->lotteryDate,
        );

        Period::create($form_data);

        return redirect('admin\period')->with('success', 'اطلاعات با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Period::findOrFail($id);
        return view('admin.period.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        {
            $request->validate([
                'title'    =>  'required',
            ]);
        }

        $form_data = array(
            'Title'       =>   $request->title,
            'StartDate'        =>   $request->startDate,
            'EndDate' => $request->endDate,
            'ReserveStartDate' => $request->reserveStartDate,
            'ReserveEndDate' => $request->reserveEndDate,
            'LotteryDate'=> $request->lotteryDate,
        );

        Period::whereId($id)->update($form_data);
        //return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت ویرایش شد');
        return redirect()->route('period.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Period::findOrFail($id);
        $data->delete();
        return redirect('admin/period')->with('success', 'اطلاعات با موفقیت حذف شد');
    }
}
