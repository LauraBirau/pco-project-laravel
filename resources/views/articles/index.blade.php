@extends('layout');
@section('content');
@foreach($articles as $article)
    <li>
        <h3>
            <a href="/articles/{{$article->id}}">{{$article->title}}</a>
        </h3>
        <p>
            {{$article->excerpt}}
        </p>
    </li>
@endforeach
<a  class="button is-link" href="/articles/create">Create article</a>

@endsection;
