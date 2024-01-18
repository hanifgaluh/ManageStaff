@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Inbox</h1>

   @if (count($laporans) > 0)
       <ul class="list-group">
           @foreach ($laporans as $laporan)
               <li class="list-group-item">
                  <h4>{{ $laporan->judul }}</h4>
                  <p>{{ $laporan->isi }}</p>
                  <p class="text-muted">Pengirim: {{ $laporan->name }}</p>
                    <p class="text-muted">Leader: {{ $laporan->leader }}</p>
                  <div class="btn-group" role="group">
                      <a href="{{ route('laporan.show', $laporan) }}" class="btn btn-primary">Lihat Detail</a>
                  </div>
               </li>
           @endforeach
       </ul>
   @else
       <p>Tidak ada laporan.</p>
   @endif
</div>
@endsection
