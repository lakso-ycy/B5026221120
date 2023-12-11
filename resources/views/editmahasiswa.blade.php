@extends('master')

@section('title', 'Edit Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br/>
    <br/>

    @foreach($mahasiswa as $m)
        <form action="/mahasiswa/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="NRP" value="{{ $m->NRP}}"> <br/>

            <div class="form-group row">
                <label for="Nama" class="col-sm-3 col-form-label text-right">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="Nama" value="{{ $m->Nama}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="Jurusan" class="col-sm-3 col-form-label text-right">Jurusan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="Jurusan" value="{{ $m->Jurusan }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="IPK" class="col-sm-3 col-form-label text-right">IPK</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="IPK" value="{{ $m->IPK }}">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
