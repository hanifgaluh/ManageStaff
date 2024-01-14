@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Laporan</h2>
    <form action="{{ route('laporan.update', $laporan) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $laporan->judul }}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Laporan:</label>
            <textarea name="isi" id="isi" class="form-control" required>{{ $laporan->isi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection