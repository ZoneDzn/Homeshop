<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/script.js" defer></script>
  <title>Homeshop || Home</title>
</head>

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
        <a class="navbar-brand" href="/paginas/index.html">
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

  <head>
    <title>Página de Venda do Produto</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .product-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        display: flex;
        flex-wrap: wrap;
      }

      .product-image {
        flex: 20;
        max-width: 400px;
        height: auto;
      }

      .product-details {
        flex: 1;
        padding-left: 20px;
      }

      .product-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
      }

      .product-description {
        margin-top: 20px;
      }

      .product-price {
        font-size: 18px;
        margin-top: 20px;
        display: flex;
        align-items: center;
      }

      .product-price-text {
        margin-right: 10px;
      }

      .product-buttons {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
      }

      .product-buttons button {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        font-size: 18px;
        background-color: #f00;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        margin-bottom: 10px;
      }

      .product-buttons button svg {
        width: 16px;
        height: 16px;
        margin-right: 10px;
      }
    </style>
  </head>

  <body>
    <div class="product-container">
      <img class="product-image" src="../icons/vendalencol.png" alt="Imagem do Produto">
      <div class="product-details">
        <h1 class="product-title">Kit Casal 4 Peças Coberdrom Sherpa Everest + Jogo Lençol Soft - Vinho</h1>
        <div class="product-description">
          <p><i>EVEREST GARANTIA: 90 DIAS APÓS O RECEBIMENTO DO PRODUTO </i></p>
        </div>
        <div class="product-price">
          <span class="product-price-text">Valor do Produto:</span>
          R$ 100,00 em até 12x de R$ 8,33
        </div>
        <a href="#" class="payment-link">Consulte as Formas de Pagamento</a>
        <div class="product-buttons">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M4.00436 6.41662L0.761719 3.17398L2.17593 1.75977L5.41857 5.00241H20.6603C21.2126 5.00241 21.6603 5.45012 21.6603 6.00241C21.6603 6.09973 21.6461 6.19653 21.6182 6.28975L19.2182 14.2898C19.0913 14.7127 18.7019 15.0024 18.2603 15.0024H6.00436V17.0024H17.0044V19.0024H5.00436C4.45207 19.0024 4.00436 18.5547 4.00436 18.0024V6.41662ZM5.50436 23.0024C4.67593 23.0024 4.00436 22.3308 4.00436 21.5024C4.00436 20.674 4.67593 20.0024 5.50436 20.0024C6.33279 20.0024 7.00436 20.674 7.00436 21.5024C7.00436 22.3308 6.33279 23.0024 5.50436 23.0024ZM17.5044 23.0024C16.6759 23.0024 16.0044 22.3308 16.0044 21.5024C16.0044 20.674 16.6759 20.0024 17.5044 20.0024C18.3328 20.0024 19.0044 20.674 19.0044 21.5024C19.0044 22.3308 18.3328 23.0024 17.5044 23.0024Z">
              </path>
            </svg>
            </svg>
            Adicionar ao Carrinho
          </button>
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z">
              </path>
            </svg>
            </svg>

            Comprar Agora
          </button>
        </div>
      </div>
      <div class="product-description">
        <h2>Descrição do Produto</h2>
        <p>Apresentamos nosso Coberdrom Everest com Jogo de lençol Soft Touch Flannel. Complementares, o coberdrom em
          sherpa com tecido flannel, proporciona uma excelente combinação com o lençol soft produzido também no tecido
          flannel, deixando sua cama ainda mais completa para o inverno.

        <p>Conteúdo Embalagem: </p>

        <p> 01 - Coberdrom Casal 2,40m x 2,10m </p>
        <p> 02 - Lençol Flannel de baixo com Elástico 1,88m x 1,38m para colchão de até 30cm </p>
        <p> 03 - Fronhas Flannel 70cm x 50 cm </p>

        <p>Composição Coberdrom:</p>
        <p>Sherpa: 100% Poliéster</p>
        <p>100% Poliéster</p>
        <p>Flannel: 100% Poliéster</p>

        <p>Composição Jogo de Cama: </p>
        <p>Manta Flannel: 100% Poliéster</p>

        <p>Imagens Ilustrativas. Apenas itens descritos acima, compõem o produto.
          Atenção: Certifique-se que as medidas do produto atende as dimensões da cama a qual será utilizada.</p>
      </div>
    </div>
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
</body>

</html>