@extends('master')

@section('konten')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Detail Agen
    </h3>

    <a href = "/agen" class = "btn btn-primary"> Kembali </a>

    <br/>
    <br/>

    <div class = "container">
        <div class = "row">
            <div class = "col-md-6">
                <!-- Kiri (Isi kosong) -->
            </div>

            <div class = "col-md-6">
                <table class = "table table-hover">
                    <tr>
                        <th> Nama </th>
                        <td> {{ $agen->NamaAgen }} </td>
                    </tr>

                    <tr>
                        <th> Jumlah Agen </th>
                        <td> {{ $agen->JumlahAgen }} </td>
                    </tr>

                    <tr>
                        <th> Tersedia </th>
                        <td> {{ $agen->Tersedia }} </td>
                    </tr>
                </table>

                <br>

                <a href = "/agen" class = "btn btn-primary float-left"> OK </a>
                <br>
            </div>
        </div>
    </div>
@endsection
