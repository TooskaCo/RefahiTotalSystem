<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB ;
use App\Quota;
use Illuminate\Http\Request;

class QuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Quota::latest()
        $data = DB::table('Quota')
            ->leftJoin('PeriodPlace', 'PeriodPlace.id', '=', 'Quota.Period_Place_ID')
            ->leftJoin('Period', 'Period.id', '=', 'PeriodPlace.Period_ID')
            ->leftJoin('Place', 'Place.id', '=', 'PeriodPlace.Place_ID')
            ->select('Quota.*',DB::raw("CONCAT(Period.Title,' ',Place.Title) AS PeriodPlaceTitle" ))
            ->orderBy('Quota.created_at','DESC')
            ->paginate(5);

        /*$data->periodPlaceData = DB::table('PeriodPlace')
            ->select('PeriodPlace.*', DB::raw("CONCAT(Period.Title,' ',Place.Title) AS PeriodPlaceTitle" ))
            ->get();*/


        return view('admin.quota.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodPlaceData = DB::table('PeriodPlace')
            ->join('Period', 'Period.id', '=', 'PeriodPlace.Period_ID')
            ->join('Place', 'Place.id', '=', 'PeriodPlace.Place_ID')
            ->select('PeriodPlace.*', DB::raw("CONCAT(Period.Title,' ',Place.Title) AS PeriodPlaceTitle" ))
            ->get();
        return view('admin.quota.create', compact('periodPlaceData'));
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
            //'title'    =>  'required'
        ]);

        $form_data = array(
            //'id'=>1,
            'Period_Place_ID' =>   $request->period_Place_ID,
            'FromDate' => $request->fromDate,
            'ToDate' => $request->toDate,
            'Grade'=> $request->grade,
            'QuotaType'=> $request->quotaType,
            'DeclaredCapacity' => $request->declaredCapacity,
            'DisposalCapacity' => $request->disposalCapacity,
            'Price'=> $request->price,
            'ExtraCapacity'=> $request->extraCapacity,
            'ExtraPeopleCount'=> $request->extraPeopleCount,
            'IsLotteryResultConfrm'=>($request->isLotteryResultConfrm ? 1 : 0 ),
            'ConfirmBy'=> $request->confirmBy,
            'ConfirmTime'=> $request->confirmTime,
        );

        Quota::create($form_data);

        return redirect('admin\quota')->with('success', 'اطلاعات با موفقیت ثبت شد');
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
        $data = Quota::findOrFail($id);
        $data->periodPlaceData = DB::table('PeriodPlace')
            ->join('Period', 'Period.id', '=', 'PeriodPlace.Period_ID')
            ->join('Place', 'Place.id', '=', 'PeriodPlace.Place_ID')
            ->select('PeriodPlace.*', DB::raw("CONCAT(Period.Title,' ',Place.Title) AS PeriodPlaceTitle" ))
            ->get();
        return view('admin.quota.edit', compact('data'));
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
        /*{
            $request->validate([
                'title'    =>  'required',
            ]);
        }*/

        $form_data = array(
            'Period_Place_ID' =>   $request->period_Place_ID,
            'FromDate' => $request->fromDate,
            'ToDate' => $request->toDate,
            'Grade'=> $request->grade,
            'QuotaType'=> $request->quotaType,
            'DeclaredCapacity' => $request->declaredCapacity,
            'DisposalCapacity' => $request->disposalCapacity,
            'Price'=> $request->price,
            'ExtraCapacity'=> $request->extraCapacity,
            'ExtraPeopleCount'=> $request->extraPeopleCount,
            'IsLotteryResultConfrm'=>($request->isLotteryResultConfrm ? 1 : 0 ),
            'ConfirmBy'=> $request->confirmBy,
            'ConfirmTime'=> $request->confirmTime,
        );

        Quota::whereId($id)->update($form_data);
        //return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت ویرایش شد');
        return redirect()->route('quota.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Quota::findOrFail($id);
        $data->delete();
        return redirect('admin/quota')->with('success', 'اطلاعات با موفقیت حذف شد');
    }
}
