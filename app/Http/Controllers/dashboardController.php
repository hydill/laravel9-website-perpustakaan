<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class dashboardController extends Controller
{

    // anggota

    function anggota()
    {
        // return view('anggota');
        $data = Anggota::all();
        return view('anggota', [
            "title" => "anggota"
        ])->with('data', $data);
    }
    function anggota_add(Request $request)
    {

        Anggota::create($request->all());
        return redirect('/anggota')->with('sukses', 'Data Berhasil Ditambahkan');
    }
    function anggota_edit(Request $request, $id)
    {

        $anggota = Anggota::find($id);
        $input = $request->all();
        $anggota->fill($input)->save();
        return redirect('anggota')->with('sukses', 'Data Berhasil Diubah');
    }
    function anggota_delete($id)
    {

        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('anggota')->with('hapus', 'Data Berhasil Dihapus');
    }

    // transaksi

    function transaksi()
    {
        $users = Anggota::all();
        $data_transaksi = Transaksi::all();
        return view('transaksi', [
            "title" => "transaksi"
        ],['users'=> $users])->with('data_transaksi', $data_transaksi);
    }

    // buku
    function index()
    {

        $data_buku = Buku::all();
        return view('buku', [
            "title" => "buku"
        ])->with('data_buku', $data_buku);
    }
    function tambah(Request $request)
    {

        Buku::create($request->all());
        return redirect('buku')->with('sukses', 'Buku berhasil ditambahkan');
    }
    function buku_edit(Request $request, $id)
    {
        $buku = Buku::find($id);
        $input_buku = $request->all();
        $buku->fill($input_buku)->save();
        return redirect('buku')->with('sukses', 'buku berhasil diedit');
    }
    function buku_delete($id)
    {
        $buku_hapus = Buku::find($id);
        $buku_hapus->delete();

        return redirect('buku')-> with('hapus', 'buku berhasil di hapus');


    }

    function index_login()
    {
        return view('login');
    }
    function index_regis()
    {
        return view('register');
    }
    function store_regis(Request $request)
    {
        $regis = Anggota::create($request->all());
        dd($regis);
    }
    function logout(){
        return view('/auth/login');
    }
    
    function transaksi_add(Request $request){

       

        Transaksi::create($request->all());

        return redirect('transaksi')->with('sukses', 'transaksi berhasil ditambahkan');

        
    }
    function transaksi_delete(Request $request, $id)
    {
        $selesai = Transaksi::find($id);
        $selesai->delete();
        return redirect('transaksi')->with('hapus', 'Transaksi Telah diselesaikan');
    }

}
