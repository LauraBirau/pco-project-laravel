@extends('layout');
@section('content');
<main class="editmain">
    <div class="row">
        <div class="column">
            <h1>{{$post->title}}</h1>

            <p>{{ $post->body}}</p>
        </div>
    </div>
</main>
    @endsection;
