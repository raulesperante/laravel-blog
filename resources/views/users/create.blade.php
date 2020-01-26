@extends('layouts.app')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        {{-- Recorremos los errores y los mostramos --}}
        @foreach($errors->all() as $message)
            <p>{{$message}}</p>
        @endforeach
    </div>
@endif

<h1>Sign Up</h1>

{!! Form::open(['route' => 'user.store']) !!}

<form name="sentMessage" id="contactForm" novalidate>
{{ csrf_field() }}
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control',
            'placeholder' => 'Name', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Email Address') !!}
            {!! Form::email('email', null, ['class' => 'form-control',
            'placeholder' => 'Email Address', 'required',
            'required data-validation-required-message' => 'Please enter your email address.']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
           <p id="p-password">Password</p>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'required',
            'data-validation-required-message' => 'Please enter a message']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
        {!! Form::submit('Registrame', ['class' => 'btn btn-primary',
        'id' => 'sendMessageButton']) !!}
    </div>
</form>
{!! Form::close() !!}
@endsection