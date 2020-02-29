<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Outlet;

class OutletController extends Controller
{
    public function index()
    {
    	$data_outlet = \App\Outlet::all();
    	return view('outlet.index',['data_outlet' => $data_outlet]);
    }
    public function create()
    {
    	return view('outlet.create');

    }
    public function store(Request $request)
    {

        \App\Outlet::create($request->all());
        return redirect('/outlet')->with('sukses','Data Berhasil Diinput');

     //    $id = \App\Outlet::orderBy('created_at','desc')->first();
     //    if ($id) {
     //            $id_outlet = substr($this->attributes['id_outlet'], 2);
     //            $id_outlet++;
     //            if (mb_strlen($id_outlet) == 1) {

     //                $zero_string = '00';
     //            }elseif (mb_strlen($id_outlet) == 2) {
     //                $zero_string = '0';
     //            }else{
     //                $zero_string = '';
     //            }
     //    }else{
     //        $zero_string = '00';
     //        $id_outlet = 1;
     //    }

    	// $outlet = new \App\Outlet;
     //    $outlet->id_outlet = 'OL'.$zero_string.$id_outlet;
     //    $outlet->nama = $request->nama;
     //    $outlet->alamat = $request->alamat;
     //    $outlet->tlp = $request->tlp;
     //    $outlet->save();
        
    	// return redirect('/outlet')->with('sukses','Data Berhasil Diinput');
    }
    public function edit($id)
    {
        $outlet = \App\Outlet::find($id);
        return view('outlet.edit',['outlet' => $outlet]);
    }
    public function update(Request $request,$id)        
    {
        $outlet = \App\Outlet::find($id);
        $outlet->update($request->all());
        return redirect('/outlet')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $outlet = \App\Outlet::find($id);
        $outlet->delete($outlet);
        return redirect('/outlet')->with('sukses','Data Berhasil Dihapus');
    }
}
