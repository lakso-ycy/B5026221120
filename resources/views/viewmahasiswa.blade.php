@extends('master2')

@section('konten')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Detail Mahasiswa
    </h3>

    <a href = "/mahasiswa" class = "btn btn-primary"> Kembali </a>

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
                        <th> NRP </th>
                        <td> {{ $mahasiswa->NRP }} </td>
                    </tr>

                    <tr>
                        <th> Nama Mahasiswa </th>
                        <td> {{ $mahasiswa->Nama }} </td>
                    </tr>

                    <tr>
                        <th> Jurusan </th>
                        <td> {{ $mahasiswa->Jurusan }} </td>
                    </tr>
                    <tr>
                        <th> IPK </th>
                        <td> {{ $mahasiswa->IPK }} </td>
                    </tr>
                </table>

                <br>

                <a href = "/mahasiswa" class = "btn btn-primary float-left"> OK </a>
                <br>
            </div>
        </div>
    </div>
@endsection
