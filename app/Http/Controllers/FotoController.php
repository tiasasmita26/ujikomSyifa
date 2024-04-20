<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $album = Album::all();
        $photo = Foto::all();
        return view('admin.dataFoto', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $album = Album::get();
        $photo = Foto::all();
        return view('admin.tambahFoto', compact('album', 'user', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $massages = [
        //     'required' => 'Silahkan isi kolom ini !',
        //     'max' => 'Tidak boleh lebih dari 100 karakter',
        //     'image' => 'Anda hanya dapat menambahkan gambar',
        // ];

        // $request->validate([
        //     'photo_title' => 'required|max:255',
        //     'photo_description' => 'required|max:255',
        //     'file_location' => 'image|required',
        //     'albumId' => 'required', 
        // ], $massages);
        $tanggal = Carbon::now()->toDateTimeString();
        $photo = new Foto;
        $photo->JudulFoto = $request->JudulFoto;
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        $photo->TanggalUnggah = $tanggal;
        // $photo->LokasiFile = $request->LokasiFile;
        $photo->AlbumID = $request->AlbumID;
        $photo['userId'] = auth()->user()->userId;

        // if ($request->hasFile('LokasiFile')) {
        $files = $request->file('LokasiFile');
        // $path = storage_path('');
        $files_name = $photo['userId'] . '-' . now()->timestamp . '.' . $files->getClientOriginalExtension();
        // dd($files_name);
        // $files->getClientOriginalName();
        $files->storeAs('public', $files_name);
        // $photo->file_location = $files_name;
        // dd($files_name);
        $photo->LokasiFile = $files_name;

        // }
        $photo->save();

        return redirect('dataFoto')->with('success', 'tambah data sukses!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = Foto::whereId($id)->first();
        return view('show', compact(['photo']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $foto = Foto::find($id);
        // return view('editFoto', ['foto' => $foto]);

        $foto = Foto::where('FotoID', $id)->get();
        return view('editFoto', ['foto' => $foto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
