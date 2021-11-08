<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\DaftarEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $ikutEvent = DaftarEvent::where('user_id',Auth::user()->id)->where('status','berhasil')->get();
        $event = Event::where('user_id',auth()->user()->id)->get();
        $devents=DaftarEvent::whereRelation('getEvent','user_id','=',Auth::user()->id)->with('getEvent')->get();
        return view('user.index',compact(['event','devents','ikutEvent']));
    }

    public function ikutEvent(){
        $devents = DaftarEvent::where('user_id',auth()->user()->id)->where('status','berhasil')->with('getEvent')->orderBy('created_at','DESC')->paginate(4);
        return view('user.ikutevent',compact(['devents']));
    }

    public function detailIkutEvent($slug){
        $event = Event::where('slug',$slug)->first();
        return view('user.detail-ikutevent',compact(['event']));
    }

    public function uploadEvent(){
        $events = Event::where('user_id',auth()->user()->id)->paginate(4);
        return view('user.uploadevent',compact(['events']));
    }

    public function detailUploadEvent($slug){
        $event = Event::where('slug',$slug)->first();
        $devents=DaftarEvent::whereRelation('getEvent','slug','=',$slug)->get();
        return view('user.detail-uploadevent',compact(['event','devents']));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProfil($id)
    {
        return view('user.profil', [
            'profiles' => User::whereId($id)->first()
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfil(Request $request, $id)
    {
        $data = $request->all();
        $profile = User::findOrFail($id);
        $profile->update($data);
        return redirect()->back();
    }
}

