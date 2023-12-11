<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
		$mahasiswa = DB::table('mahasiswa')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmahasiswa');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mahasiswa')->insert([
			'NRP' => $request->nrp,
			'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data pegawai
    public function update(Request $request)
	{
		DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
			'NRP' => $request->NRP,
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->IPK
		]);
		return redirect('/mahasiswa');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mahasiswa')->where('NRP',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mahasiswa = DB::table('mahasiswa')
		->where('Nama','like',"%".$cari."%")
        ->orderBy('Nama', 'asc')
		->paginate(10);

    		// mengirim data pegawai ke view index
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa,'cari' => $cari]);

	}

    public function view($id)
    {
        // Mengambil data pegawai berdasarkan id
        $mahasiswa = DB::table('mahasiswa') -> where('NRP', $id) -> first();

        // Mengirim data pegawai ke view tampilkan.blade.php
        return view('viewmahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
