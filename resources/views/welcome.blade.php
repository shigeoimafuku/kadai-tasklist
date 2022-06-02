@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <div class="text-center">
            <h1>Welcome to Tasklist</h1>
        </div>
    </div>
    {!! link_to_route('signup.get','Sign up now!',[],['class'=>'btn btn-primary']) !!}
    
@endsection    