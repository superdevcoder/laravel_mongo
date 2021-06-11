@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Employee</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('employee') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id:</th>
            <td>{{ $employee->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>No:</th>
            <td>{{ $employee->no }}</td>
        </tr>

    </table>
@endsection