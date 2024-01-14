@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Laporan</h1>
            <ul class="list-group">
                @forelse ($laporans as $laporan)
                <li class="list-group-item">
                    <h4>{{ $laporan->judul }}</h4>
                    <p>{{ $laporan->isi }}</p>
                    <p class="text-muted">Pengirim: {{ $laporan->user->name }}</p>
                    <div class="btn-group" role="group">
                        <a href="{{ route('laporan.show', $laporan) }}" class="btn btn-primary">Lihat Detail</a>
                        <a href="{{ route('laporan.edit', $laporan) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporan.destroy', $laporan) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Delete</button>
                        </form>
                    </div>
                </li>
                @empty
                <li class="list-group-item">Belum ada laporan.</li>
                @endforelse
            </ul>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-primary mt-3" href="{{ route('laporan.create') }}" role="button">Create Laporan</a>
        </div>
    </div>
</div>
@endsection
