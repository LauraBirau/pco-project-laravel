@extends('layout');
@section('content');
<style>
    article {
        background-color: #f5efe693;
        border-radius: 20px;
        padding: 15px;
        margin-top:50px;
        margin-bottom: 20px;
    }

    h5 {
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 28px;
    }
    * {
        box-sizing: border-box;
    }
    .column {
        float: left;
        width: 50%;
        padding: 10px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;}
    img{
        width: 400px;
        display: block;
        margin: 0 auto;
        text-align: center;
        border-radius: 200px;
    }
</style>
<main class="editmain">
    <div class="row">
        <div class="column">
            <img src="../images/me.jpeg">
        </div>
        <div class="column">
            <article>
                <h2>{{$article->title}}</h2>
                <p>{{$article->body}}</p>
            </article>
        </div>
    </div>

    <div>
        <a  class="button is-link" href="/articles/{{$article->id}}/edit">
            Edit
        </a>
    </div>
</main>
@endsection;
