<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DaftarEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class DEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bukti' => 'required|image|mimes:png,jpg,jpeg|size:2048',
    ]);
        $data = $request->all();
        $data['nama'] = Str::title(auth()->user()->name);
        $data['user_id'] = auth()->user()->id;
        if($request->bukti){
            $data['status'] = 'proses';
        } else{
            $data['status'] = 'berhasil';
        }

        if($request->bukti){
            $data['bukti'] = $request->file('bukti')->store(
                'assets/gallery',
                'public'
            );
        }


        DaftarEvent::create($data);
        if($request->bukti){
            Alert::success('Berhasil mendaftar event', 'Pendaftaran akan diverifikasi dalam 1x24 jam');
        } else{
            Alert::success('Berhasil mendaftar event', 'Silahkan mengakses informasi event');
        }
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
