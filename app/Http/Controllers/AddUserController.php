<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddUser;
class AddUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $arr['adduser'] = AddUser::all();
        return view('admin.usertables.adduser')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usertables.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,AddUser $adduser)
    {
        $adduser->name =$request->name;
        $adduser->email =$request->email;
        $adduser->password =$request->password;
        $adduser->unit =$request->unit;
        $adduser->location =$request->location;
        $adduser->status =$request->status;
        
        $adduser->save();
        return redirect('home/adduser');
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
    public function edit(AddUser $adduser)
    {
        $arr['adduser'] = $adduser;
        return view('admin.usertables.edituser')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddUser $adduser)
    {
        $adduser->name =$request->name;
        $adduser->email =$request->email;
        $adduser->password =$request->password;
        $adduser->unit =$request->unit;
        $adduser->location =$request->location;
        $adduser->status =$request->status;
        
        $adduser->save();
        return redirect('home/adduser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddUser::destroy($id);
        return redirect('home/adduser');
    }
}
