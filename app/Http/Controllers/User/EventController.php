<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\Admin\EventCategory;
use App\Models\Admin\EventJenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Dompdf\Dompdf;

class EventController extends Controller
{
    public function index(){
        $jeniss = EventJenis::all();
        $categories = EventCategory::all();
        return view('user.upload',compact(['jeniss','categories']));
    }

    public function store(Request $request){
            $request->validate([
                'gambar' => 'required|image|mimes:png,jpg,jpeg|size:2048',
        ]);
        $data = $request->all();
        $data['judul'] = Str::title($request->judul);
        $data['event_organizer'] = Str::title($request->event_organizer);
        $data['slug'] = Str::slug($request->judul);
        $data['gambar'] = $request->file('gambar')->store(
            'assets/gallery',
            'public'
        );
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'proses';
        if($request->harga==null){
            $data['harga']= 0;
        }elseif($request->harga!=null){
            $data['harga']= $request->harga;
        }

        Event::create($data);
        return Redirect::route('user.index');
    }


}
