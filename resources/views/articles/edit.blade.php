@extends('layout');
@section('content');
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT');
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text"  name="title" id="title" value="{{$article->title}}">
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{$article->body}}"</textarea>
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button class="button is-link" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection;
