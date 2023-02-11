@extends('layouts.app')

@section('template_title')
    Create Student
@endsection

@section('content')
    <section class="boxForm">
    @includeif('partials.errors')

                <div class="cardFem">
                
                    <span class="cardTitle">Student data</span>
                
                    <div class="cardBody">
                        <form method="POST" action="{{ route('students.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('student.form')

                        </form>
                    </div>
                </div>

    </section>
@endsection
