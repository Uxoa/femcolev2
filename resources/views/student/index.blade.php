@extends('layouts.app')

@section('template_title')
    Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Student') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Academic Year</th>
                                        <th>Quarter</th>
                                        <th>Subject</th>
                                        <th>Exam1</th>
                                        <th>Exam2</th>
                                        <th>Exam3</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $student->name }}</td>
											
                                                <td> <h2>{{ $student->academicYear}}</h2></td>
                                                <td> <h3>{{ $student->quarter}}</h3> </td>
                                                <td> <h4>{{ $student->grade->subject}}</h4> </td>
                                                <td> <h5>{{ $student->exam1}}</h5> </td>
                                                <td> <h5>{{ $student->exam2}}</h5> </td>
                                                <td> <h5>{{ $student->exam3}}</h5></td>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </div>
@endsection
