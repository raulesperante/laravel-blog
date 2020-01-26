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
    <p class="post-meta">Posted by {{$postedBy[$article->user_id]}}
    </p>
</div>
<hr>
@endforeach
<!-- Pager -->
<div style="display: flex; justify-content:center">
{!! $articles->render() !!}
</div>
@endsection
