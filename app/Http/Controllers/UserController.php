<?php

namespace App\Http\Controllers;

use App\Users2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session ;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Users2::latest()->paginate(5);
        return view('admin.users2.list',compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users2.create');
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
            'userName'    =>  'required',
            'password'     =>  'required',
        ]);

        $form_data = array(
            //'id'=>1,
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'UserName' => $request->userName,
            'Password' => md5($request->password),
            'IsAdmin'=> ($request->isAdmin ? 1 : 0 ),
            'IsExpert'=> ($request->isExpert ? 1 : 0 ),
            'IsGeneralUser'=> ($request->isGeneralUser ? 1 : 0 ),
            'IsActive'=> 0,
        );

        Users2::create($form_data);

        return redirect('admin\users2')->with('success', 'اطلاعات با موفقیت ثبت شد');
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
        $data = Users2::findOrFail($id);
        return view('admin.users2.edit', compact('data'));
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
            'userName'    =>  'required',
            'password'     =>  'required',
        ]);

        $form_data = array(
            //'id'=>1,
            'FirstName'       =>   $request->firstName,
            'LastName'        =>   $request->lastName,
            'UserName' => $request->userName,
            'Password' => md5($request->password),
            'IsAdmin'=> ($request->isAdmin ? 1 : 0 ),
            'IsExpert'=> ($request->isExpert ? 1 : 0 ),
            'IsGeneralUser'=> ($request->isGeneralUser ? 1 : 0 ),
            'IsActive'=> 0,
        );

        Users2::whereId($id)->update($form_data);
        return redirect()->route('users2.edit', $id)->with('success', 'اطلاعات با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Users2::findOrFail($id);
        $data->delete();
        return redirect('admin/users2')->with('success', 'اطلاعات با موفقیت حذف شد');
    }

    public function loginAction(Request $request)
    {
        //dd($request);
        $data = DB::table('Users2')->where('UserName', $request->userName)->where('Password', md5($request->password))->where('IsAdmin', 1)->first();
        //dd($data);
        if($data)
        {
            Session::put('userFullName',$data->FirstName .' '. $data->LastName) ;
            Session::put('userID',$data->id) ;
            return redirect('admin/dashboard');
        }
        else
            return redirect('admin/login')->withErrors(['نام کاربری یا کلمه عبور اشتباه است']);
    }

    public function logoutAction()
    {
        Session::forget('userFullName') ;
        Session::forget('userID') ;
        return redirect('admin/login');
    }

    public function loginActionGeneralUser(Request $request)
    {
        //dd($request);
        $data = DB::table('Users2')->where('UserName', $request->userName)->where('Password', md5($request->password))->where('IsGeneralUser', 1)->first();
        //dd($data);
        if($data)
        {
            Session::put('userFullNameGU',$data->FirstName .' '. $data->LastName) ;
            Session::put('userIDGU',$data->id) ;
            return redirect('personalpage/dashboard');
        }
        else
            return redirect('personalpage/login')->withErrors(['نام کاربری یا کلمه عبور اشتباه است']);
    }

    public function logoutActionGeneralUser()
    {
        Session::forget('userFullNameGU') ;
        Session::forget('userIDGU') ;
        return redirect('personalpage/login');
    }
}
