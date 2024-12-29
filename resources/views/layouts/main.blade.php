<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        <!-- Fonts do Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="import">

        <!-- CDN do bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- links do laravel -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Arquivo css -->
        <link rel="stylesheet" href="/css/styles.css">
        
        <!-- Arquivo javascripe -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <img src="/img/foto-ronilson.jpeg" width="50px">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/events/list">Listar Eventos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/products/list">Listar Produtos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contacts/list">Listar Contatos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Entrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        
          <div class="class-conteiner-fluid">
            @if (session('msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Atenção: </strong> {{session('msg')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              
            @endif
            @yield('conteudo')
                
          </div>
        

        <!-- CDN js do bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <footer>
        <p> Treinamento &copy; 2024</p>
    </footer>
    </body>
</html>
