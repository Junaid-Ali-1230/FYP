<!-- registrations.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unapproved Registrations</h1>
        <ul>
            @foreach($unapprovedUsers as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
    </div>
@endsection
