<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    function index(){

        $data_buku = Buku::all();
        return view('buku',[
            "title"=>"buku"
        ])->with('data_buku', $data_buku);
    }
    function tambah(Request $request){

       Buku::create($request->all());
       return redirect('buku')->with('sukses', 'Buku berhasil ditambahkan');
    }
}
