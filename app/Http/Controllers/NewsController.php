<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.place.list');
        $data = News::latest()->paginate(5);
        return view('admin.news.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'Date'        =>   $request->date,
            'Subject' => $request->subject,
            'PermissionType' => $request->permissionType,
            'IsActive' => $request->isActive,
            'Description'=> $request->description,
        );

        News::create($form_data);



        /*
         *
         * public function store() {

    $input = Request::all();
    $id = Company::create($input)->id;

    return redirect('company/'.$id);
}*/
        return redirect('admin\news')->with('success', 'اطلاعات با موفقیت ثبت شد');
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
        $data = News::findOrFail($id);
        return view('admin.news.edit', compact('data'));
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
            'Date'        =>   $request->date,
            'Subject' => $request->subject,
            'PermissionType' => $request->permissionType,
            'IsActive' => $request->isActive,
            'Description'=> $request->description,
        );

        News::whereId($id)->update($form_data);
        //return redirect('admin/personnel')->with('success', 'اطلاعات با موفقیت ویرایش شد');
        return redirect()->route('news.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::findOrFail($id);
        $data->delete();
        return redirect('admin/news')->with('success', 'اطلاعات با موفقیت حذف شد');
    }
}
