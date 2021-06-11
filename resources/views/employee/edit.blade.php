@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Employee</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('employee') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('employee.update',$employee->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" value="{{ $employee->id }}">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="no">No:</label>
            <input type="text" class="form-control" id="no" placeholder="Enter Last Name" name="no" value="{{ $employee->no }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection