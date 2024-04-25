<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(String $id){
        $like = Like::where('FotoID', $id)->where('userId', auth()->user()->userId)->first();
        if ($like) {
            $like->delete();
            return back();
        } else {
            $tanggal = Carbon::now()->toDateTimeString();
        // dd($id);
            $like = new Like();
            $like->FotoID = $id;
            $like->UserID = auth()->user()->userId;
            $like->TanggalLike = $tanggal;
            $like->save();
            return back();
        }
    }
}
