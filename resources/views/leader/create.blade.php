@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Staff</h2>
        <form action="{{ route('leader.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Staff Name:</label>
                <select name="name" id="name" class="form-control" required>
                    <option value="" disabled selected>Select Staff</option>
                    @foreach($newstaff as $staff)
                        <option value="{{ $staff->name }}">{{ $staff->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Staff</button>
        </form>
    </div>
@endsection
