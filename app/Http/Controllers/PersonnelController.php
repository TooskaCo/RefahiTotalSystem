<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "ddddd";
        //return view('admin.personnel.list');
        $data = Personnel::latest()->paginate(5);
        return view('admin.personnel.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personnel.create');
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
            'personnelNumber'     =>  'required',

            //'image'         =>  'required|image|max:2048'
        ]);

        /*$image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);*/
        $form_data = array(
            //'id'=>1,
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'NationalNumber' => $request->nationalCode,
            'PersonnelNumber' => $request->personnelNumber,
            'GenderType' => $request->genderType,
            'MaritalStatus'=> $request->maritalStatus,
            'IdentificationNumber'=> $request->identificationNumber,
            'BirthDate'=> $request->birthDate,
            'EmploymentType'=> $request->employmentType,
            'CooperationStartDate'=> $request->cooperationStartDate,
            'CooperationEndDate'=> "",//$request->personnelNumber,
            'Mobile'=> $request->mobile,
            'Phone'=> $request->phone,
            'Email'=> "",//$request->email,
            'Password'=> "",//$request->personnelNumber,
            'IsActive'=>0,// $request->personnelNumber,
            'IsLogicalDeleted'=>0,// $request->personnelNumber,
            //'image'            =>   $new_name
        );

        Personnel::create($form_data);

        return redirect('admin\personnel')->with('success', 'اطلاعات با موفقیت ثبت شد');

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
        $data = Personnel::findOrFail($id);
        return view('admin.personnel.edit', compact('data'));
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
       /* $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else*/
        {
            $request->validate([
                'firstName'    =>  'required',
                'lastName'     =>  'required',
                'nationalCode'     =>  'required',
                'personnelNumber'  =>  'required'
            ]);
        }

        $form_data = array(
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'NationalNumber' => $request->nationalCode,
            'PersonnelNumber' => $request->personnelNumber,
            'GenderType' => $request->genderType,
            'MaritalStatus'=> $request->maritalStatus,
            'IdentificationNumber'=> $request->identificationNumber,
            'BirthDate'=> $request->birthDate,
            'EmploymentType'=> $request->employmentType,
            'CooperationStartDate'=> $request->cooperationStartDate,
            'CooperationEndDate'=> "",//$request->personnelNumber,
            'Mobile'=> $request->mobile,
            'Phone'=> $request->phone,
            'Email'=> "",//$request->email,
            'Password'=> "",//$request->personnelNumber,
            'IsActive'=>0,// $request->personnelNumber,
            'IsLogicalDeleted'=>0,// $request->personnelNumber,
        );

        Personnel::whereId($id)->update($form_data);
        //return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت ویرایش شد');
        return redirect()->route('personnel.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Personnel::findOrFail($id);
        $data->delete();
        return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت حذف شد');
    }
}
