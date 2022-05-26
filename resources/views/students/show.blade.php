@extends('students.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Student's information</h2>
            <a href="{{ route('students.index')}}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>
    <div class="row" >
        <div class="card p-3">
            <div class="card-title">
                <strong>first_name:</strong>
                {{ $student->first_name }}
            </div>
            <div class="card-title">
                <strong>last_name:</strong>
                {{ $student->last_name }}
            </div>
            <div class="card-title">
                <strong>student_id:</strong>
                {{ $student->student_id }}
            </div>
            <div class="card-title">
                <strong>email:</strong>
                {{ $student->email }}
            </div>
            <div class="card-title">
                <strong>mobile_number:</strong>
                {{ $student->mobile_number }}
            </div>
        </div>
    </div>
@endsection