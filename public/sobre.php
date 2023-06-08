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
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  header {
    background-color: #ffffff;
    padding: 20px;
    text-align: center;
  }

  h1 {
    color: #333333;
    margin: 0;
  }

  main {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  section {
    margin-bottom: 40px;
  }

  section h2 {
    color: #333333;
    margin-top: 0;
  }
</style>
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
  <header>
    <h1>Homeshop</h1>
  </header>

  <main>
    <section class="section-about">
      <h2>Sobre nós</h2>
      <p>A Casa & Conforto é uma loja online especializada em produtos para casa, oferecendo uma ampla variedade de itens para cama, mesa e banho. Nós nos dedicamos a fornecer produtos de alta qualidade que combinam conforto, estilo e durabilidade.</p>
      <p>Com anos de experiência no mercado, nossa equipe está empenhada em garantir a satisfação dos clientes, proporcionando um atendimento excepcional e produtos que atendem às suas necessidades e preferências. Estamos sempre atualizados com as últimas tendências e inovações no setor para oferecer a você o melhor em termos de qualidade e estilo.</p>
      <p>Na Casa & Conforto, acreditamos que sua casa é seu refúgio e um lugar para se expressar. Queremos ajudá-lo a criar um ambiente acolhedor, confortável e elegante, onde você possa relaxar e aproveitar momentos especiais com sua família e amigos.</p>
    </section>

    <footer>
      <p>&copy; 2023 Homeshop. Todos os direitos reservados.</p>
    </footer>
  </main>
</body>

</html>