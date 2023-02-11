@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Show Student' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="studentCard">

            <img src="{{$student->image}}" alt="adriana" class="imageStudent">
        
        <div class="infoStudent">
            <strong>Name:</strong> {{ $student->name }}<br/>
        <strong>Grades Id:</strong> {{ $student->grades_id }}
        </div>
</div>


<div class="allT">
    <table class="firstT box tableHome table-striped text-center">
            
            <thead class="tableHead">
                <tr>
                    <td rowspan="2" class="align-middle"></td>
                    <td colspan="4">PRIMER TRIMESTRE</td>

                </tr>
                <tr class="tableNotes"> 
                    <td>Nota 1</td>
                    <td>Nota 2</td>
                    <td>Nota 3</td>
                    <td>Final</td>

                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Lengua</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Inglés</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Matemáticas</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Historia</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Geografía</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
</table>
</div>





                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

    
    </section>
@endsection
