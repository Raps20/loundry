<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
    	$data_member = \App\Member::all();
    	return view('member.index',['data_member' => $data_member]);
    }
    public function create()
    {
    	return view('member.create');

    }
    public function store(Request $request)
    {
        $this->validate($request,
            ['nama' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required',

        ]);
    	\App\Member::create($request->all());
    	return redirect('/member')->with('sukses','Data Berhasil Diinput');
    }
    public function edit($id)
    {
        $member = \App\Member::find($id);
        return view('member.edit',['member' => $member]);
    }
    public function update(Request $request,$id)        
    {
        // $this->validate($request,
        //     ['nama' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tlp' => 'required',

        // ]);
        
        $member = \App\Member::find($id);
        $member->update($request->all());
        return redirect('/member')->with('sukses','Data Berhasil Diedit');
    }
    public function delete($id)
    {
        $member = \App\Member::find($id);
        $member->delete($member);
        return redirect('/member')->with('sukses','Data Berhasil Dihapus');
    }
}
