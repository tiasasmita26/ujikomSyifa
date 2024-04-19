<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;

class GalerryController extends Controller
{
    public function index(){
        $photo = Foto::join('albums', 'albums.AlbumID', '=', 'fotos.AlbumID')->get();
        return view('about', compact('photo'));
    }
}
