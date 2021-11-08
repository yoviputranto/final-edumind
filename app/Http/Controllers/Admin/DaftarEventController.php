<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\DaftarEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class DaftarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devents=DaftarEvent::all();
        return view('admin.daftarevent.index',compact('devents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events=Event::all();
        return view('admin.daftarevent.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['nama'] = Str::title($request->nama);
        $data['user_id'] = auth()->user()->id;

        DaftarEvent::create($data);
        return Redirect::route('daftar-events.index');
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
        $events=Event::all();
        $devent=DaftarEvent::findOrFail($id);
        return view('admin.daftarevent.edit',compact(['events','devent']));
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
        $data = $request->all();
        $data['nama'] = Str::title($request->nama);
        $data['user_id'] = auth()->user()->id;

        $devent = DaftarEvent::findOrFail($id);

        $devent->update($data);
        return Redirect::route('daftar-events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=DaftarEvent::findorFail($id);
        $event->delete();
        return redirect()->route('daftar-events.index');
    }
}
