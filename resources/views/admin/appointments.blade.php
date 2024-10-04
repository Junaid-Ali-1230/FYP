<!-- appointments.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Appointments</h1>
        <table id="example" class="table table-striped profile-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>

                    <th>Doctor ID</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        {{-- <td>{{ $appointment->Name }}</td> --}}
                        <td>{{auth()->user()->name}}</td>
                        <td>{{ $appointment->doctor_id }}</td>
                        <!-- Display other appointment details -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
