@extends('layouts.app')

@section('content')
<p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
<!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->

{!! Form::open(['route' => 'user.store']) !!}

<form name="sentMessage" id="contactForm" novalidate>
{{ csrf_field() }}
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control',
            'placeholder' => 'Name', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Email Address') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control',
            'placeholder' => 'Email Address', 'required',
            'required data-validation-required-message' => 'Please enter your email address.']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-success',
        'id' => 'sendMessageButton']) !!}
    </div>
</form>
{!! Form::close() !!}
@endsection