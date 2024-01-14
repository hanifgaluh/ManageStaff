@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $laporan->judul }}</h1>
                <p>{{ $laporan->isi }}</p>
                <p class="text-muted">Pengirim: {{ $laporan->user->name }}</p>
                <p class="text-muted">Dibuat pada: {{ $laporan->created_at }}</p>
            </div>
        </div>
    </div>
@endsection
