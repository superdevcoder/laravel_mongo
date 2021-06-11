@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Employee List</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('employee.create') }}">Add</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>No</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->no }}</td>
                <td>
                    <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection