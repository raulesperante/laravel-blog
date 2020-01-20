@extends('layouts.app')

@section('content')

@foreach($articles as $article)
<div class="post-preview">
    <a href="articles/{{$article->id}}">
        <h2 class="post-title">
	    {{$article->title}}
        </h2>
        <h3 class="post-subtitle">
	    {{-- Este print permite visualizar los estilos --}}
	    {!! $article->body !!}
        </h3>
    </a>
    <p class="post-meta">Posted by {{$postedBy->name}}
    </p>
</div>
<hr>
@endforeach
<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
</div>
@endsection
