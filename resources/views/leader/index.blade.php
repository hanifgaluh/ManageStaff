@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List Staff</h1>
        <ul>
            @forelse($staffs as $staff)
                <li>{{ $staff->name }}</li>
            @empty
                <li>Tidak ada bawahan.</li>
            @endforelse
        </ul>
    </div>
@endsection
