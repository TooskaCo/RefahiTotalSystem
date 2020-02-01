<?php

namespace App\Http\Controllers;

use App\Personnel;
use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.place.list');
        $data = Place::latest()->paginate(5);
        return view('admin.place.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.place.create');
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
            'StateCity_ID'        =>   $request->stateCity_ID,
            'Phone' => $request->phone,
            'Address' => $request->address,
            'EntryTime' => $request->entryTime,
            'ExitTime'=> $request->exitTime,
            'NegativeEffectDuration'=> $request->negativeEffectDuration,
            'Description'=> $request->description,
        );

        Place::create($form_data);

        return redirect('admin\place')->with('success', 'اطلاعات با موفقیت ثبت شد');

        /* $resource = Model::create($request->all());

         return redirect()->route('resource.edit', $resource->id);*/
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
       //$data = Personnel::findOrFail($id);
       // return view('admin.personnel.edit', compact('data'));

        $data = Place::findOrFail($id);
        return view('admin.place.edit', compact('data'));
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
            'StateCity_ID'        =>   $request->stateCity_ID,
            'Phone' => $request->phone,
            'Address' => $request->address,
            'EntryTime' => $request->entryTime,
            'ExitTime'=> $request->exitTime,
            'NegativeEffectDuration'=> $request->negativeEffectDuration,
            'Description'=> $request->description,
        );

        Place::whereId($id)->update($form_data);
        //return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت ویرایش شد');
        return redirect()->route('place.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Place::findOrFail($id);
        $data->delete();
        return redirect('admin/place')->with('success', 'اطلاعات با موفقیت حذف شد');
    }

    public function reservationPlaceIndex()
    {
        return view('personalpage.reservationPlace.list');
    }

}
