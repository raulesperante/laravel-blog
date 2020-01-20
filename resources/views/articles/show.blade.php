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
@endsection
