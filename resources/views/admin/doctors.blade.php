<!-- doctors.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Doctors</h1>
        <table id="example" class="table table-striped profile-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <!-- Display other doctor details -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
