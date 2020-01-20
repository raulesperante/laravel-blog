@extends('layouts.app')

@section('content')

<div class="post-preview">
        <h2 class="post-title">
	    {{$article->title}}
        </h2>
        <h3 class="post-subtitle">
	    {{-- Este print permite visualizar los estilos --}}
	    {!! $article->body !!}
        </h3>
</div>
<hr>


@if(Auth::user()->id == $article->user_id)
    <a href="{{route('articles.edit',$article->id)}}" style="width:135px;" class="btn btn-primary">Editar</a>
    {!! Form::model($article, array('route' => ['articles.destroy', $article->id],
	'method' => 'DELETE')) !!}    
	<div class="row control-group" style="margin-left:3px">
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
	</div>


@endif

@endsection
