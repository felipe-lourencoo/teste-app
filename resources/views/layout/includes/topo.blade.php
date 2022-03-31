
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    </head>
    <body>
        <header class="p-3 bg-dark text-yellow mb-3">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-yellow text-decoration-none">
                        <h1 class="display-1 text-yellow">T<h1 class="display-6 text-yellow">este</h1></h1>
                    </a>
            
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{route('home')}}" class="nav-link px-2 text-yellow ms-4">Home</a></li>
                        <li><a href="{{route('pedidos.lista')}}" class="nav-link px-2 text-yellow">Pedidos</a></li>
                        <li><a href="{{route('produtos.lista')}}" class="nav-link px-2 text-yellow">Produtos</a></li>
                        <li><a href="{{route('clientes.lista')}}" class="nav-link px-2 text-yellow">Clientes</a></li>
                    </ul>
                </div>
            </div>
        </header>