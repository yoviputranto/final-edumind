<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArticleCategory;
use App\Models\Admin\Jawaban;
use App\Models\Admin\JawabKomentar;
use App\Models\Admin\Komentar;
use App\Models\Admin\Pertanyaan;
use App\Models\LikeJawaban;
use App\Models\LikePertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans        = Pertanyaan::orderBy('id', 'DESC')->with('getLike')->get();
        $categories         = ArticleCategory::all();
        $jawabans           = Jawaban::all();
        $like_pertanyaan    = LikePertanyaan::all();
        $like_jawaban       = LikeJawaban::all();
        return view('user.diskusi.timeline.index', compact('pertanyaans', 'categories', 'jawabans', 'like_pertanyaan', 'like_jawaban'));
    }

    public function category($name){
        $pertanyaans        = Pertanyaan::whereRelation('getCategory','name','=',$name)->orderBy('id', 'DESC')->with('getLike')->get();
        $categories         = ArticleCategory::all();
        $jawabans           = Jawaban::all();
        $like_pertanyaan    = LikePertanyaan::all();
        $like_jawaban       = LikeJawaban::all();
        return view('user.diskusi.timeline.category', compact('pertanyaans', 'categories', 'jawabans', 'like_pertanyaan', 'like_jawaban'));
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
        $data   = $request->all();
        $data['user_id'] = Auth::user()->id;
        // $data['pertanyaan_id'] = 1;
        Jawaban::create($data);
        return redirect()->route('timeline.index');
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

    }
}
