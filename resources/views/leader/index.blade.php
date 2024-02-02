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

        <div class="col-md-4 text-right">
            <a class="btn btn-primary mt-3" href="{{ route('leader.create') }}" role="button">Add Staff</a>
        </div>
        
    </div>
@endsection
