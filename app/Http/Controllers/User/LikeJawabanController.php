<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Jawaban;
use App\Models\Admin\Pertanyaan;
use App\Models\LikeJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeJawabanController extends Controller
{
    public function like($id)
    {
        $likes   = LikeJawaban::where('jawaban_id', $id)->where('user_id', Auth::user()->id)->first();

        if ($likes) {
            $likes->delete();
            return back();
        } else {
            LikeJawaban::create([
                'jawaban_id' => $id,
                'user_id'    => Auth::id()
            ]);
        }

        return redirect()->back();
    }
}
