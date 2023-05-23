<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Top Reseller: Home</title>
        <style>
            div.AllItemsText{
                width: 50%;
                background-color: #faae54;
            }
            Footer{
                background-color:#afc9e9;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <header>
            @include('TopResellerNavigationBar')
        </header>
        <section>
            <div class="p-2">
                <div class="d-flex justify-content-center">
                    <img src="images/banner.jpg.png" alt="">
                </div>
                <div class = "AllItemsText mt-2">
                    All Items
                </div>
            </div>
            @foreach ($items ->chunk(4) as $item)
                <div class = "container text-center">
                    <div class = "row row-cols-5">
                        @foreach ($item as $i)
                            <div  class = "card mt-3 me-3 ms-3" style = "width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $i -> item_name}}</h5>
                                    <p class="card-text">{{ $i -> brand -> brand_name}}</p>
                                    <h5 class="card-text">Rp. {{ number_format($i -> price) }}</h5>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </section>

        <footer class = "Footer">
            <div class = "d-flex justify-content-center">
                <h3>© Top Reseller 2023</h3>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>
