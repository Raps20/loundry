<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    public function index()
    {
    	// $data_transaksi = \App\Transaksi::leftJoin ('users','users.id','=','transaksi.id_user')->select(['transaksi.*','users.nama'])->get();
        $data_transaksi = \App\Transaksi::all();
        $outlet = \App\Outlet::all();
        $member = \App\Member::all();
        $user = \App\User::all();
        //dd($data_transaksi);
    	return view('transaksi.index',compact('data_transaksi','outlet','member','user'));
    }
    // public function create()
    // {
    //     $data_outlet = \App\Outlet::all();
    //     $data_member = \App\Member::all();
    //     $data_user = \App\User::all();
    // 	return view('transaksi.create',compact('data_outlet','data_member','data_user'));

    // }
    // public function store(Request $request)
    // {
    //     //dd($request->all());
    // 	\App\Transaksi::create($request->all());
    // 	return redirect('/detail/create/{id}')->with('sukses','Data Berhasil Diinput');
    // }
    public function edit($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $data_outlet = \App\Outlet::all();
        $data_user = \App\User::all();
        return view('transaksi.edit',compact('transaksi','data_outlet', 'data_user'));
    }
    public function update(Request $request,$id)        
    {
        //dd($request->all());
        $transaksi = \App\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->delete($transaksi);
        return redirect('/transaksi')->with('sukses','Data Berhasil Dihapus');
    }

    public function tambah($id)
    {

        $data_outlet = \App\Outlet::all();
        $member = \App\Member::find($id);
        $data_user = \App\User::all();
        //dd($transaksi);
        return view('transaksi.tambah',compact('data_outlet','member','data_user','transaksi'));
    }

    public function show(Request $request)
    {
        $this->validate($request,
            [
                'id_outlet' => 'required',
                'status' => 'required',
                'pembayaran' => 'required',
                'id_user' => 'required',
            ]);
        \App\Transaksi::create($request->all());
        return redirect('/transaksi')->with('sukses','Data Berhasil Diinput');
    }
    public function exportPdf()
    {
        $transaksi = \App\Transaksi::all();
        $paket = \App\Paket::all();
        // $pdf = PDF::loadView('transaksi.print',compact('transaksi'))->setPaper();
        // return $pdf->download('transaksi.pdf');
        return view('transaksi.print', compact('transaksi','paket'));
    }

    
}
