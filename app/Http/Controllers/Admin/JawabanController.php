<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawabans   = Jawaban::all();
        return view('admin.jawaban.index', compact('jawabans'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawabans   = Jawaban::findOrFail($id);
        $jawabans->delete();
        return Redirect::route('jawaban.index');
    }
}
