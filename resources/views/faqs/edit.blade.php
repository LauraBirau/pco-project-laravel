@extends('layout');
@section('content');
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New FAQ</h1>
        <form method="POST" action="/faq/{{$faq->id}}">
            @csrf
            @method('PUT');

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <textarea class="textarea" name="question" id="question">{{$faq->question}}</textarea>
                    <p class="help is-danger">{{$errors->first('question')}}</p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer" >{{$faq->answer}}</textarea>
                    <p class="help is-danger">{{$errors->first('answer')}}</p>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link">{{$faq->link}}</textarea>
                    <p class="help is-danger">{{$errors->first('link')}}</p>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/faq/{{ $faq->id }}">
            @csrf
            @method('DELETE')
            <button class="button is-link" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection;
