<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ArticleCategory;
use App\Models\Admin\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans    = Pertanyaan::with('getCategory')->get();
        return view('admin.pertanyaan.index', compact('pertanyaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category    = ArticleCategory::all();
        return view('admin.pertanyaan.create', compact('category'));
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
        $data['slug'] = Str::slug($request->pertanyaan);
        $data['user_id'] = Auth::user()->id;
        Pertanyaan::create($data);
        return Redirect::route('diskusi.index');
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
        $pertanyaans    = Pertanyaan::with('getCategory')->findOrFail($id);
        $category       = ArticleCategory::all();
        return view('admin.pertanyaan.edit', compact('pertanyaans', 'category'));
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
        $data               = $request->all();
        $data['slug']       = Str::slug($request->pertanyaan);
        $data['user_id']    = Auth::user()->id;
        $pertanyaans        = Pertanyaan::findOrFail($id);
        $pertanyaans->update($data);
        return Redirect::route('diskusi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaans    = Pertanyaan::findOrFail($id);
        $pertanyaans->delete();
        return Redirect::route('diskusi.index');
    }
}
