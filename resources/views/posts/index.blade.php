@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>food</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/posts.create.css') }}">        
        </head>
        <body>
            <div class="container">
                <h1 class="my-3">掲示板</h1>
                <p>成分に関連する投稿をしよう！</p>
                <div class="footer">
                    <a href="/posts/create">投稿する</a>
                </div>
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class="media col-10 my-5" style="">
                            <div class="media-body comment-body">
                                <div class="row">
                                    <span class="comment-body-user mx-2">{{$post->user->name}}</span>
                                    <span class="comment-body-time mx-2">{{$post->created_at}}</span>
                                </div>
                                <span class="comment-body-seibun">{{$post->title}}</span></br>
                                <span class="comment-body-content">{{$post->text}}</span>
                                @if ($post->image)
                                    <img src="{{ $post->image }}" alt="画像" style="width:250px; height:250px;">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>    
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
        
    </html>
    @endsection  