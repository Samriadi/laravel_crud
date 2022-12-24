<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
    public function index(){
        //mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa_tabel')->get();

        //mengirim data mahasiswa ke view index
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){
        return view('tambahMahasiswa');
    }

    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('mahasiswa_tabel')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);
        // alihkan halaman ke halaman 
        return redirect('/');
    }

    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa_tabel')->where('id',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('editMahasiswa',['mahasiswa' => $mahasiswa]);
    
    }

    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa_tabel')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/');
    }

    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa_tabel')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman mahasiswa
        return redirect('/');
    }

    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswa_tabel')
        ->where('nama', 'like', "%".$cari."%")
        ->paginate();

        //mengirim data mahasiswa ke view
        return view('index', ['mahasiswa' => $mahasiswa]);
    }
}
