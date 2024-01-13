@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Laporan</h2>
    <form action="{{ route('laporan.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Laporan:</label>
            <textarea name="isi" id="isi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="pengirim">Pengirim</label>
            <input type="text" name="pengirim" id="pengirim" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection