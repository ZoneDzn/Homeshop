<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/script.js" defer></script>
  <title>Homeshop || Home</title>
</head>

<script>
    $(document).ready(function() {
      // Captura o evento de envio do formulário de pesquisa
      $("form[role='search']").submit(function(event) {
        event.preventDefault(); // Evita o comportamento padrão de recarregar a página

        var searchTerm = $("#search-input").val(); // Obtém o valor do campo de pesquisa

        // Verifica se o termo de pesquisa não está vazio
        if (searchTerm !== "") {
          // Faça uma requisição AJAX para o servidor com o termo de pesquisa
          $.ajax({
            url: "../methods/pesquisa.php", // Substitua pelo caminho do seu arquivo PHP de pesquisa
            type: "POST",
            data: {
              search: searchTerm
            },
            success: function(response) {
              // Manipule a resposta recebida do servidor aqui
              console.log(response);
            },
            error: function(xhr, status, error) {
              // Manipule erros de requisição aqui
              console.log(error);
            }
          });
        }
      });
    });
  </script>

<body>
  <!-- primeiro header -->
  <header class="header1">
    <div class="container">
      <div class="header-top">
        <div class="container">
          <div class="wrapper flexitem">
            <div class="center">
              <ul class="flexitem main-links">
                <li>Todo o Brasil<i class="ri-truck-fill"></i></li>
                <li>PAGUE COM PIX<i class="ri-money-dollar-box-fill"></i></li>
                <li>COMPRA 100% SEGURA<i class="ri-lock-fill"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!-- header principal-->
  <header class="header2">
    <nav class="navbar navbar-expand-lg bg-corpo-terciaria">
      <div class="container-fluid">
        <a class="navbar-brand" href="../paginas/index.php">
          <img src="../icons/logo homeshop sem fundo.png" alt="EasyHouse" class="btn-login icone-login">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../paginas/index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../public/sobre.php">Sobre</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catálogo
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../paginas/Cama-mesa-banho.php">Cama, Mesa e banho</a></li>
                  <li><a class="dropdown-item" href="#">Outra ação</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Algo mais aqui</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input id="search-input" class="form-control me-2" type="search" placeholder="O que procura?" aria-label="Pesquisar">
              <button id="search-button" class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            <a href="login.php" class="btn-login mx-3">
              <img src="../icons/login.png" alt="Ícone de Login" class="icone-login">
            </a>
            <a class="shopping-cart" href="../paginas/carrinho-compra.php"><img src="../icons/shopping-cart-fill.png" alt="Carrinho-de-compra"></a>
          </div>
        </div>
    </nav>
  </header>
  <main>
    <section class="slide">
      <div class="slider-content">
        <input type="radio" name="btn-radio" id="radio1">
        <input type="radio" name="btn-radio" id="radio2">
        <input type="radio" name="btn-radio" id="radio3">

        <div class="slide-box primeiro">
          <a href="#"><img class="img-desktop" src="../icons/HSforrodecama.svg.svg" alt="slide1"></a>
          <a href="#"><img class="img-mobile" src="../icons/imagem celular 1.png" alt="slide1"></a>
        </div>

        <div class="slide-box">
          <a href="#"><img class="img-desktop" src="../icons/HScama.svg.svg" alt="slide2"></a>
          <a href="#"><img class="img-mobile" src="../icons/imagem celular 2.png" alt="slide2"></a>
        </div>

        <div class="slide-box">
          <a href="#"><img class="img-desktop" src="../icons/HSpanela.svg.svg" alt="slide3"></a>
          <a href="#"><img class="img-mobile" src="../icons/imagem celular 3.png" alt="slide3"></a>

        </div>

        <div class="nav-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>

        <div class="nav-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>

      </div>
    </section>
    <h3 class="catalogo">
      Transforme a casa toda
    </h3>
    <p class="paragrafo">Tudo para um lar aconchegante em todos os momentos</p>
    <div class="categories">
      <div class="category">
        <img src="../icons/kitcolcha.png" alt="Colcha">
        <span>Kit Colcha</span>
      </div>
      <div class="category">
        <img src="../icons/jogodelencol.png" alt="Jogo de Lençol">
        <span>Jogo de Lençol</span>
      </div>
      <div class="category">
        <a href="../paginas/pagina-venda-lencol.php"><img src="../icons/vendalencol.png" alt="kitlencol"></a>
        <span>Kit lençol</span>
      </div>
      <div class="category">
        <img src="../icons/wallpaper cadeira.jpg" alt="Categoria 4">
        <span>Categoria 4</span>
      </div>
      <div class="category">
        <img src="../icons/wallpaper cadeira.jpg" alt="Categoria 4">
        <span>Categoria 4</span>
      </div>
      <div class="category">
        <img src="../icons/jogodelencol.png" alt="Jogo de Lençol">
        <span>Jogo de Lençol</span>
      </div>
      <div class="category">
        <img src="../icons/jogodelencol.png" alt="Jogo de Lençol">
        <span>Jogo de Lençol</span>
      </div>
      <div class="category">
        <img src="../icons/jogodelencol.png" alt="Jogo de Lençol">
        <span>Jogo de Lençol</span>
      </div>
      <!-- Adicione mais categorias conforme necessário -->
    </div>

  </main>

  <footer>
    <div>
      <img src="../icons/logo homeshop branco.png" alt="Homeshop" class="iconeabaixo">
    </div>
    <form>
      <label for="email"> <img src="../icons/email.svg" alt="Email" class="iconemail">PROMOÇÕES EXCLUSIVAS POR
        EMAIL</label>
      <input type="text" name="email" id="email" placeholder="Digite o seu email">
      <button type="submit">Enviar</button>
      <p>&copy; 2023 Homeshop. Todos os direitos reservados.</p>
    </form>
  </footer>
</body>

</html>