<?php

namespace App\Http\Controllers;

use App\Relative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session ;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DB::table('Users2')
            ->join('Personnel', 'Personnel.NationalNumber', '=', 'Users2.NationalNumber')
            ->select('Personnel.*')
            ->where('Users2.id', (Session::get('userID')))
            ->first();
        //dd($data1->id);

        $personID = $data1->id ;
        $data = DB::table('Relative')->where('Person_ID',$personID)->orderBy('id')->get();
        return view('personalpage.family.list',compact('data'));

        /*$data = Relative::latest()->paginate(5);
        return view('personalpage.family.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalpage.family.create');
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
            'firstName'    =>  'required',
            'lastName'     =>  'required',
            'nationalCode'     =>  'required',
        ]);

        $data1 = DB::table('Users2')
            ->join('Personnel', 'Personnel.NationalNumber', '=', 'Users2.NationalNumber')
            ->select('Personnel.*')
            ->where('Users2.id', (Session::get('userID')))
            ->first();
        //dd($data1->id);

        $personID = $data1->id ;

        $form_data = array(
            //'id'=>1,
            'Person_ID'=>$personID ,
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'NationalNumber' => $request->nationalCode,
            'IdentificationNumber' => $request->identificationNumber,
            'RelativeType' => $request->relativeType,
            'IsDependent'=> $request->isDependent,
            'BirthDate'=> $request->birthDate,
        );

        Relative::create($form_data);

        return redirect('personalpage\family')->with('success', 'اطلاعات با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Relative::findOrFail($id);
        return view('personalpage.family.edit', compact('data'));
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
        $request->validate([
            'firstName'    =>  'required',
            'lastName'     =>  'required',
            'nationalCode'     =>  'required',
        ]);

        $form_data = array(
            //'id'=>1,
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'NationalNumber' => $request->nationalCode,
            'IdentificationNumber' => $request->identificationNumber,
            'RelativeType' => $request->relativeType,
            'IsDependent'=> $request->isDependent,
            'BirthDate'=> $request->birthDate,
        );

        Relative::whereId($id)->update($form_data);
        return redirect()->route('family.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Relative::findOrFail($id);
        $data->delete();
        return redirect('personalpage/family')->with('success', 'اطلاعات با موفقیت حذف شد');
    }
}
