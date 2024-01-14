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
                    <a href="{{ route('laporan.show', $laporan) }}" class="btn btn-primary">Lihat Detail</a>
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