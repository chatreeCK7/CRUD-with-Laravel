@extends('students.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit Student</h2>
            <a href="{{route('students.index')}}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>
@if($errors->any())
    <div class="alert alert-danger">
        <strong>Oops !</strong>
        <p>There are some problems with your input. <br><br></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('students.update', $student->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><strong>first_name:</strong></label>
                <input type="text" name="first_name" value="{{$student->first_name}}" class="form-control" placeholder="Enter first_name">            
            </div>
            <div class="form-group">
                <label><strong>last_name:</strong></label>
                <input type="text" name="last_name" value="{{$student->last_name}}" class="form-control" placeholder="Enter last_name">
            </div>
            <div class="form-group">
                <label><strong>student_id:</strong></label>
                <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control" placeholder="Enter student_id">
            </div>
            <div class="form-group">
                <label> <strong>email:</strong> </label>
                <input type="text" name="email" value="{{$student->email}}" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label><strong>mobile_number:</strong></label>
                <input type="text" name="mobile_number" value="{{$student->mobile_number}}" class="form-control" placeholder="Enter mobile_number">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success my-3">Update</button>
            </div>
        </div>
    </div>
</form>
@endsection