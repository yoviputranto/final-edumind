<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Jawaban;
use App\Models\LikeJawaban;
use App\Models\LikePertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JawabanSayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawabans       = Jawaban::where('user_id', Auth::user()->id)->get();
        $like_pertanyaan    = LikePertanyaan::all();
        $like_jawaban       = LikeJawaban::all();
        return view('user.diskusi.jawabanSaya.index', compact('jawabans','like_pertanyaan','like_jawaban'));
    }
}
