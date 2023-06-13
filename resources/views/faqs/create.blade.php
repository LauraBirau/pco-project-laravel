@extends('layout');
@section('content');
<div>
    <div>
        <h3 class="heading has-text-weight-bold is-size-4">New FAQ</h3>
        <form method="POST" action="/faq">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <input class="input" type="text"  name="question" id="question">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection;
