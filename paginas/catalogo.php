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
    :root {
        --laranja-color: #FF8C00;
    }

    .header-catalogo {
        background-color: var(--laranja-color);
        padding: 20px;
        text-align: center;
    }

    #categories {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .category {
        flex: 1;
        text-align: center;
        padding: 10px;
    }

    .category a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .category a:hover {
        color: #000;
    }

    #products {
        padding: 20px;
    }

    .product {
        margin-bottom: 10px;
    }

    .product a {
        text-decoration: none;
        color: #333;
    }

    .product a:hover {
        color: #000;
    }

    #products ul {
        display: none;
    }
</style>

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

    <header class="header-catalogo">
        <h1>Catálogo de Produtos</h1>
    </header>

    <nav>
        <ul id="categories">
            <li class="category" data-category="cama-mesa-banho">
                <a href="#">Cama, Mesa e Banho</a>
            </li>
            <li class="category" data-category="roupas">
                <a href="#">Roupas</a>
            </li>
            <li class="category" data-category="brinquedos">
                <a href="#">Brinquedos</a>
            </li>
        </ul>
    </nav>

    <section id="products">
        <h2 data-category="cama-mesa-banho">Cama, Mesa e Banho</h2>
        <ul>
            <li class="product" data-category="cama-mesa-banho">
                <a href="#">Toalha</a>
            </li>
            <li class="product" data-category="cama-mesa-banho">
                <a href="#">Jogo de Cama</a>
            </li>
            <li class="product" data-category="cama-mesa-banho">
                <a href="#">Travesseiro</a>
            </li>
            <li class="product" data-category="roupas">
                <a href="#">Camiseta</a>
            </li>
            <li class="product" data-category="roupas">
                <a href="#">Calça Jeans</a>
            </li>
            <li class="product" data-category="brinquedos">
                <a href="#">Boneca</a>
            </li>
            <li class="product" data-category="brinquedos">
                <a href="#">Carrinho</a>
            </li>
        </ul>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categories = document.querySelectorAll(".category");
            const products = document.querySelectorAll(".product");

            categories.forEach(function(category) {
                category.addEventListener("click", function(event) {
                    event.preventDefault();
                    const selectedCategory = this.getAttribute("data-category");

                    // Remover a classe "active" de todas as categorias
                    categories.forEach(function(category) {
                        category.classList.remove("active");
                    });

                    // Adicionar a classe "active" à categoria selecionada
                    this.classList.add("active");

                    // Ocultar todos os produtos
                    products.forEach(function(product) {
                        const productCategory = product.getAttribute("data-category");
                        if (productCategory !== selectedCategory) {
                            product.style.display = "none";
                        } else {
                            product.style.display = "block";
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>