@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2>malasngoding corp</h2>
	<h3>Data Agen</h3>

	<a href="/agen/tambah" class="btn btn-primary"> + Tambah Agen Baru</a>

	<br/>
    <p>Cari Data Agen : berdasarkan nama</p>
	<form action="/agen/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Agen .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jumlah Agen</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($agen as $a)
		<tr>
			<td>{{ $a->NamaAgen }}</td>
			<td>{{ $a->JumlahAgen }}</td>
			<td>{{ $a->Tersedia }}</td>
			<td>
				<a href="/agen/view/{{ $a->KodeAgen }}" class="btn btn-success">View</a>
				<a href="/agen/edit/{{ $a->KodeAgen }}" class="btn btn-warning">Edit</a>
				<a href="/agen/hapus/{{ $a->KodeAgen }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$agen->links()}}
@endsection
