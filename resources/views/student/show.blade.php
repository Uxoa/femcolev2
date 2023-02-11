@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Show Student' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="studentCard">
      
            <img src="{{$user->image}}" alt="adriana" class="imageStudent">
        
        <div class="infoStudent">
            <strong>Name:</strong>  {{ $student->name }}</p>
            <p>Curso: </p>
            <p>E-mail: {{$user->email}}</p>
        </div>
</div>







                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $student->name }}
                        </div>
                        <div class="form-group">
                            <strong>Grades Id:</strong>
                            {{ $student->grades_id }}
                        </div>

        
        </div>
    </section>
@endsection
