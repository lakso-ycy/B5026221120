@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br/>
    <br/>

    <form action="/mahasiswa/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nrp" class="col-sm-3 col-form-label text-right">NRP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label text-right">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jurusan" class="col-sm-3 col-form-label text-right">Jurusan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
        </div>

        <div class="form-group row">
            <label for="ipk" class="col-sm-3 col-form-label text-right">IPK</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="ipk" name="ipk">
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
