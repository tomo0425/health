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
                <div class="row justify-content-center " style="margin-top: 50px; padding-bottom:50px;">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">投稿作成</div>
                            <div class="card-body" style="margin:0 auto;">
                                <form method="POST" action="/posts" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <h6>タイトル</h6>
                                        <input type="text" name="post[title]" style="width: 100%;" placeholder=""/>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <h6>本文</h6>
                                        <textarea name="post[text]" style="width: 100%;" placeholder=""></textarea>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class=" ">
                                            <h6>画像挿入</h6>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class=" offset-md-4" style="margin:0 auto;">
                                            <button onclick="location.href='posts/index'" type="submit" class="btn btn-primary">
                                                投稿
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>    
                    </div>    
                </div>    
            </div>    
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
        
    </html>
    @endsection  