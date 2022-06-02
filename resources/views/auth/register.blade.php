@extends('layouts.app')

@section('content')
    <div>
        <h1>Sign up</h1>
    </div>
    
    <div class="row">
        <div class="col-6">
            {!! Form::open(['route'=>'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation','Confirmation') !!}
                    {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection 