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
        <div class="container py-2">
            <h1 class=" text-center display-4 fw-bold py-2">商品詳細</h1>
            <div class="py-5 py-sm-7 py-lg-9 border rounded shadow-lg">
                <div class="container-md px-4 px-md-8">
                    <div class="row gap-3 gap-sm-0">
                        <div class="col-12 col-md-5 d-flex justify-content-center">
                            <div class="h-36 w-36 overflow-hidden rounded-lg bg-gray-100 shadow-lg d-flex align-items-center justify-content-center">
                                <img src="{{ $food->image }}" loading="lazy" alt="Photo by Theo Crazzolara" class="h-auto w-100" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-7 d-flex flex-column  align-items-center align-items-sm-start py-3 py-sm-0">
                            <h1 class="mb-1 text-center text-lg font-weight-bold text-gray-800">{{ $food->name }}</h1>
                            <p class="my-2 text-center text-lg text-gray-800">価格：税込{{$food->price}}円</p>
                            <p class="my-2 text-center text-lg text-gray-800">メーカー：{{$food->shop}}</p>
                            <p class="my-2 text-center text-lg text-gray-800">口コミ：</p>
                            <div class=""> 
                                <table class="table table-bordered"> 
                                    <tbody>
                                        <tr>
                                            <th>栄養成分</th>
                                            <td>炭水化物：{{ $food->carbohydrates }}g、たんぱく質：{{ $food->proteins }}g、脂質：{{ $food->fats }}g、無機物：{{ $food->minerals }}g</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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