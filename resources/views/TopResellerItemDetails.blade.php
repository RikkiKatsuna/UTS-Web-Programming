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
            <div class = "mt-3 mb-3 d-flex flex-c">
                <div>

                </div>
                <div>
                    <h1>{{$item -> item_name}}</h1>
                    <h4>{{$item -> brand -> brand_name}}</h4>
                    <h4>Rp. {{number_format($item -> price)}}</h4>
                    <h5>Description:</h5>
                    <p>{{$item -> description}}</p>
                </div>
            </div>
        </section>

        <footer class = "Footer">
            <div class = "d-flex justify-content-center">
                <h3>© Top Reseller 2023</h3>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
