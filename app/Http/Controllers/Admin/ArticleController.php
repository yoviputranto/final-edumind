<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Article;
use App\Models\Admin\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil semua data yang ada di table article
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ArticleCategory::all();
        return view('admin.articles.create', compact('category'));
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
        $data['name'] = Str::title($request->name);
        $data['slug'] = Str::slug($request->title);
        $data['title'] = Str::title($request->title);
        $data['author'] = Str::title(auth()->user()->name);
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );
        Article::create($data);
        return Redirect::route('articles.index');

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
        $articles   = Article::findOrFail($id);
        $category   = ArticleCategory::all();
        return view('admin.articles.edit', compact('articles', 'category'));
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
        $articles = Article::findOrFail($id);
        $data = $request->all();
        $data['name'] = Str::title($request->name);
        $data['slug'] = Str::slug($request->title);
        $data['title'] = Str::title($request->title);
        $data['author'] = Str::title(auth()->user()->name);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery',
                'public'
            );
        }

        $articles->update($data);
        return Redirect::route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles=Article::findorFail($id);
        $articles->delete();
        return redirect()->route('articles.index');
    }
}
