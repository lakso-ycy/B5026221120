@extends('master')

@section('title', 'Edit Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Agen</h3>

    <a href="/agen"> Kembali</a>

    <br/>
    <br/>

    @foreach($agen as $a)
        <form action="/agen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->KodeAgen }}"> <br/>

            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label text-right">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" name="nama" value="{{ $a->NamaAgen }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlah_agen" class="col-sm-3 col-form-label text-right">Jumlah Agen</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" required="required" name="jumlah_agen" value="{{ $a->JumlahAgen }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="tersedia" class="col-sm-3 col-form-label text-right">Tersedia</label>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Isi 1 untuk tersedia, Isi 0 untuk tidak tersedia" required="required" name="tersedia"{{ $a->Tersedia }}>
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
