

        <div class="form-group">
            <div class="colLabel">
                {{ Form::label('name') }}
            </div>
            <div class="colInput">
                {{ Form::text('name', $student->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('academicYear') }}
            </div>
            <div class="colInput">
            {{ Form::text('academicYear', $student->academicYear, ['class' => 'form-control' . ($errors->has('academicYear') ? ' is-invalid' : ''), 'placeholder' => 'academicYear']) }}
            {!! $errors->first('academicYear', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('quarter') }}
            </div>
            <div class="colInput">
            {{ Form::text('quarter', $student->quarter, ['class' => 'form-control' . ($errors->has('quarter') ? ' is-invalid' : ''), 'placeholder' => 'Quarter']) }}
            {!! $errors->first('quarter', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('grades_id') }}
            </div>
            <div class="colInput">
            {{ Form::select('grades_id', $grades , $student->grades_id, ['class' => 'form-control' . ($errors->has('grades_id') ? ' is-invalid' : ''), 'placeholder' => 'Grades Id']) }}
            {!! $errors->first('grades_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    
        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('exam1') }}
            </div>
            <div class="colInput">
            {{ Form::text('exam1', $student->exam1, ['class' => 'form-control' . ($errors->has('exam1') ? ' is-invalid' : ''), 'placeholder' => 'exam1']) }}
            {!! $errors->first('exam1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('exam2') }}
            </div>
            <div class="colInput">
            {{ Form::text('exam2', $student->exam2, ['class' => 'form-control' . ($errors->has('exam2') ? ' is-invalid' : ''), 'placeholder' => 'exam2']) }}
            {!! $errors->first('exam2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="colLabel">
            {{ Form::label('exam3') }}
            </div>
            <div class="colInput">
            {{ Form::text('exam3', $student->exam3, ['class' => 'form-control' . ($errors->has('exam3') ? ' is-invalid' : ''), 'placeholder' => 'exam3']) }}
            {!! $errors->first('exam3', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
