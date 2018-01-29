<!-- app/views/users/create.blade.php -->

@extends('header')

@section('content')
    <h1>Create a Ads</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'annonces', 'files'=> true)) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::number('price', Input::old('price'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {!! Form::label('Product Image') !!}
        {!! Form::file('img', null) !!}
    </div>

    {{--<div class="form-group">
        {{ Form::label('password', 'Password :') }}
        {{ Form::password('password', Input::old('password'), array( 'class' => 'form-control')) }}
    </div>--}}

    {{ Form::submit('Create the Ads!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
