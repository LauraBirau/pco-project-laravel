@extends('layout');
@section('content');
<main style = "margin-bottom: 100px;">
    <ul>
        <div class="faq">
        @foreach($faqs as $faq)

            <li class="has-text-weight-bold is-4">{{ $faq->question }}</li>
            <li>{{ $faq->answer }}</li>
            <a class="button is-link" href="/faq/{{$faq->id}}/edit">Edit</a>
                <br>
        @endforeach
        </div>
    </ul>
    <a  class="button is-link" href="/faq/create">Create faq</a>
</main>
@endsection;
