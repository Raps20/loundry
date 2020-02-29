<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
    	$data_paket = \App\Paket::all();
        $outlet = \App\Outlet::all();
    	return view('paket.index',['data_paket' => $data_paket]);
    }
    public function create()
    {
        $data_outlet = \App\Outlet::all();
    	return view('paket.create',compact('data_outlet'));

    }
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'id_outlet' => 'required',
                'jenis' => 'required',
        ]);
    	\App\Paket::create($request->all());
    	return redirect('/paket')->with('sukses','Data Berhasil Diinput');
    }
    public function edit($id)
    {
        $paket = \App\Paket::find($id);
        $data_outlet = \App\Outlet::all();
        return view('paket.edit',compact('paket','data_outlet'));
    }
    public function update(Request $request,$id)        
    {
        $paket = \App\Paket::find($id);
        $paket->update($request->all());
        return redirect('/paket')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $paket = \App\Paket::find($id);
        $paket->delete($paket);
        return redirect('/paket')->with('sukses','Data Berhasil Dihapus');
    }
}
