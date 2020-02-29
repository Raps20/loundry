<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class UserController extends Controller
{
    public function index()
    {
    	$data_user = \App\User::all();
        $outlet = \App\Outlet::all();
    	return view('user.index',compact('data_user','outlet'));
    }
    public function create()
    {

        $data_outlet = \App\Outlet::all();
    	return view('user.create',compact('data_outlet'));

    }
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,
        [
            'role' => 'required',
            'id_outlet' => 'required',
        ]);
    	\App\User::create($request->all());
    	return redirect('/user')->with('sukses','Data Berhasil Diinput');
    }
    public function edit($id)
    {
        $user = \App\User::find($id);
        $data_outlet = \App\Outlet::all();
        return view('user.edit',compact('user','data_outlet'));
    }
    public function update(Request $request,$id)        
    {
        //dd($request->all());
        $user = \App\User::find($id);
        $user->update($request->all());


        return redirect('/user')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete($user);
        return redirect('/user')->with('sukses','Data Berhasil Dihapus');
    }
    public function exportPdf()
    {
        $user = \App\User::all();
        $pdf = PDF::loadView('export.userpdf',compact('user'));
        return $pdf->download('user.pdf');
    }
}
