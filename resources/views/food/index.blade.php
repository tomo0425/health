<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <title>food</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="container py-5">
            <h1 class="mb-4 text-center display-4 fw-bold">商品</h1>
        
            <div class="row">
                <form method="get" action="{{ route('food.index') }}" class="col-md-8 offset-md-2 mb-3">
                    <div class="input-group">
                        <input type="text" name="search_word" id="search-keyword-input" placeholder="食品名" class="form-control">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">検索</button>
                        </div>
                    </div>
                </form>
            </div>
        
            <div class="row">
              @foreach ($foods as $food)
              <div class="col-md-3 mb-4">
                  <div class="card h-100" >
                      <img src="{{ $food->image }}" class="card-img-top" alt="..." style="width: 100%; height: 200px;">
                      <div class="card-body d-flex flex-column h-100">
                          <h5 class="card-title">{{$food->name}}</h5>
                          <p class="card-text">税込{{$food->price}}円</p>
                          <div class="text-center mt-auto">
                              <a href="#" class="btn btn-primary">詳細</a>
                          </div>
                      </div>
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