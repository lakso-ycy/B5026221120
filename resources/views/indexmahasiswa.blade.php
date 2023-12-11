@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

	<h2>malasngoding corp</h2>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa/tambah" class="btn btn-primary"> + Tambah Mahasiswa baru</a>

	<br/>
    <p>Cari Data Mahasiswa : berdasarkan nama</p>
	<form action="/mahasiswa/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Jurusan }}</td>
			<td>{{ $m->IPK }}</td>
			<td>
				<a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
				<a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
				<a href="/mahasiswa/hapus/{{ $m->NRP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$mahasiswa->links()}}
@endsection
