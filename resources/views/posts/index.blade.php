@extends('layout');
@section('content');
<main class="editmain">
    <h1>Blog</h1>
    <style>
        article {
            background-color: #7895b296;
            border-radius: 20px;
            padding: 10px;
            margin-bottom: 20px;
        }
        h5 {
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
            clear: both;
        }

        img {
            width: 400px;
            display: block;
            margin: 0 auto;
            text-align: center;
            border-radius: 200px;
        }
    </style>
    <script>
        //Function call
        getSwapiData();

        /**
         * Function to get the data from the Swapi API and deliver it to the DOM
         */
        function getSwapiData() {
            fetch("https://dog.ceo/api/breeds/image/random")
                .then((response) => response.json())
                .then((data) => {
                    const img = document.createElement("img");
                    img.src = data.message;
                    document.getElementById('add_photo').append(img);
                })
                .catch((err) => {
                    console.log("The dog image is not there. Ups!", err);
                });
        }
    </script>
    <div class="row">
        <div class="column" id="add_photo">
        </div>
        <div class="column">
            @foreach($posts as $post)
                <article>
                    <h5><a href="/blog/{{$post->id}}">{{$post->title}}</a></h5>
                <p>{{$post->excerpt}}</p>
                </article>
            @endforeach
        </div>
    </div>
</main>
@endsection
