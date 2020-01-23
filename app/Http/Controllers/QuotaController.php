<?php

namespace App\Http\Controllers;

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
        $data = Quota::latest()->paginate(5);
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
        return view('admin.quota.create');
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
            //'Title'       =>   $request->title,
            'Period_ID'        =>   $request->period_ID,
            'Place_ID' => $request->place_ID,
            'DeclaredCapacity' => $request->declaredCapacity,
            'DisposalCapacity' => $request->disposalCapacity,
            'QuotaType'=> $request->quotaType,
            'Price'=> $request->price,
            'QuotaDuration'=> $request->quotaDuration,
            'ExtraCapacity'=> $request->extraCapacity,
            'ExtraPeopleCount'=> $request->extraPeopleCount,
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
            'Period_ID'        =>   $request->period_ID,
            'Place_ID' => $request->place_ID,
            'DeclaredCapacity' => $request->declaredCapacity,
            'DisposalCapacity' => $request->disposalCapacity,
            'QuotaType'=> $request->quotaType,
            'Price'=> $request->price,
            'QuotaDuration'=> $request->quotaDuration,
            'ExtraCapacity'=> $request->extraCapacity,
            'ExtraPeopleCount'=> $request->extraPeopleCount,
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
