@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Agen</h3>

    <a href="/agen"> Kembali</a>

    <br/>
    <br/>

    <form action="/agen/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label text-right">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-3 col-form-label text-right">Jumlah Agen</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="jumlah_agen" name="jumlah_agen">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label text-right">Tersedia</label>
            <div class="col-sm-9">
                <input class="form-control" placeholder="Isi 1 untuk tersedia, Isi 0 untuk tidak tersedia" id="tersedia" name="tersedia">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
@endsection
