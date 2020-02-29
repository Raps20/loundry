<?php

namespace App\Http\Controllers;
// use \App\Member;
use Illuminate\Http\Request;

class DetailController extends Controller
{
	public function index()
	{
		$data_detail = \App\Detail::all();
		$transaksi = \App\Transaksi::all();
        $member = \App\Member::all();
		return view('detail.index',compact('transaksi','data_detail','member'));
	}

    public function create($id)
    {
    	$transaksi = \App\Transaksi::find($id);
    	$data_paket = \App\Paket::all();
        $data_member = \App\Member::all();

    	return view('detail.create', compact('transaksi','data_member','data_paket'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'id_paket' => 'required',
            ]);
    	\App\Detail::create($request->all());
    	//dd($request->all());
    	return redirect('/detail')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $detail = \App\Detail::find($id);
        $data_outlet = \App\Outlet::all();
        $data_user = \App\User::all();
        $data_paket = \App\Paket::all();
        $transaksi = \App\Transaksi::all();
        return view('detail.edit',compact('transaksi','detail','data_outlet', 'data_user','data_paket'));
    }
    public function update(Request $request,$id)        
    {
        //dd($request->all());
        $detail = \App\Detail::find($id);
        $detail->update($request->all());


        return redirect('/detail')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $detail = \App\Detail::find($id);
        $detail->delete($detail);
        return redirect('/detail')->with('sukses','Data Berhasil Dihapus');
    }
}
