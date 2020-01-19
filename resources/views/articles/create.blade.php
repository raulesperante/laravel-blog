@extends('layouts.app')

@section('content')

<h1>Create Article</h1>
<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
<!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->

{!! Form::open(['route' => 'articles.store']) !!}

<form name="sentMessage" id="contactForm" novalidate>
{{ csrf_field() }}
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control',
            'placeholder' => 'Your title', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            {!! Form::label('Content') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control',
            'placeholder' => 'Your content', 'required',
            'required data-validation-required-message' => 'Please enter your content']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div id="success"></div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary',
        'id' => 'sendMessageButton']) !!}
    </div>
</form>
{!! Form::close() !!}
@endsection
