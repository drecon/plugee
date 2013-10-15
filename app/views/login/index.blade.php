@extends('layouts.basic')

@section('main')

<h1>Login</h1>
{{ Form::open( array('method' => 'POST', 'url' => 'login/checking')) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::input('password', 'password') }}
        </li>

        <li>
            {{ Form::submit('Login', array('class' => 'btn btn-info')) }}
        </li>
    </ul>
{{ Form::close() }}

@if (Session::has('errors' ))
    <ul>
        <li class="error">{{ Session::get('errors') }} </li>
    </ul>
@endif

@stop
