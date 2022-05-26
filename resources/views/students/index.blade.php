@extends('students.layout')

@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Laravel 8 CRUD - Index</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success my-3">Create new student</a>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered " >
        <tr>
            <th> No . </th>
            <th> first_name </th>
            <th> last_name </th>
            <th> student_id </th>
            <th> email </th>
            <th> mobile_number </th>
            <th width="280px">Action</th>
        </tr>

        @foreach($data as $key => $value)
            <tr>  
                <td>{{ ++$i}}</td>
                <td> {{ $value->first_name }}</td>
                <td> {{ Str::limit($value->last_name, 100) }}</td>
                <td> {{ $value->student_id }}</td>
                <td> {{ $value->email }}</td>
                <td> {{ $value->mobile_number }}</td>
                <td>
                    <form action="{{ route('students.destroy', $value->id) }}" method="post">
                        <a href="{{ route('students.show', $value->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('students.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>             
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $data->links()!!}

@endsection