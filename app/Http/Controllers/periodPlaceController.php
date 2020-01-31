<?php

namespace App\Http\Controllers;

use App\PeriodPlace;
use Illuminate\Http\Request;

class periodPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
       /* {
            $request->validate([
                'title'    =>  'required',
            ]);
        }*/

        $form_data = array(
                'Period_ID'       =>   $id,
                /*'Place_ID'        =>   $request->place,
                'DeclaredCapacity' => $request->declaredCapacity,
                'DisposalCapacity' => $request->disposalCapacity,
                'QuotaType'=> $request->quotaType,*/
                'Price'=> $request->price,
                /*'QuotaDuration'=> $request->quotaDuration,
                'ExtraCapacity'=> $request->extraCapacity,
                'ExtraPeopleCount'=> $request->extraPeopleCount,*/
        );

        PeriodPlace::whereId($id)->update($form_data);


        return redirect() ; //->route('period.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
