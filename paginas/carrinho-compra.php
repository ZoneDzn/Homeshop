<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/styles.css">
  <style>
    /* Adicione estilos personalizados aqui */
  </style>
  <title>Homeshop || Carrinho de Compras</title>
</head>

<style>
  
</style>

<body>
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
      <div class="page-title">Seu Carrinho</div>
      <div class="content">
        <section>
          <table>
            <thead>
              <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>-</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="product">
                    <img src="cama modelo.png" alt="" />
                    <div class="info">
                      <div class="name">Cama</div>
                      <div class="category">Categoria: Cama, mesa e banho</div>
                    </div>
                  </div>
                </td>
                <td>R$ 1200</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>1</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 1200</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="panelas modelo.jpeg" alt="" />
                    <div class="info">
                      <div class="name">kit panela</div>
                      <div class="category">Categoria: Cozinha</div>
                    </div>
                  </div>
                </td>
                <td>R$ 120</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 240</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="forro de cama modelo.png" alt="" />
                    <div class="info">
                      <div class="name">jogo de cama</div>
                      <div class="category">Categoria: Cama, mesa e banho</div>
                    </div>
                  </div>
                </td>
                <td>R$ 100</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>4</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 400</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
        <aside>
          <div class="box">
            <header>Resumo da compra</header>
            <div class="info">
              <div><span>Sub-total</span><span>R$ 1840</span></div>
              <div><span>Frete</span><span>Gratuito</span></div>
              <div>
                <button>
                  Adicionar cupom de desconto
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
            <footer>
              <span>Total</span>
              <span>R$ 1840</span>
            </footer>
          </div>
          <button>Finalizar Compra</button>
        </aside>
      </div>
    </main>
  </body>
</html>
