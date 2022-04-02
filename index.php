

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Fernanda</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menus de Navegação -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.html">Sobre</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Serviços
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Sistemas</a></li>
                  <li><a class="dropdown-item" href="#">App</a></li>
                  <li><a class="dropdown-item" href="#">Suporte Software Legado</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.html">Contato</a>
              </li>
            </ul>
            
            <!-- Formulário para pesquisa -->
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Faça sua pesquisa" aria-label="Search">
              <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesquisar</button>
            </form>
          </div>
        </div>
    </nav>

    <!-- Carrousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/carousel-item1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Desenvolvimento de Sistemas</h5>
                    <p>Desenvolvimento e Manutenção de Sistemas Legados em Java</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel-item2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Desenvolvimento de Aplicativos</h5>
                <p>Desenvolvimento de Aplicativos para Android e IOS</p>
            </div>
          </div>          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Conteudo -->
    <section id="about" class="py-5">
      <h2 class="text-center mb-5">Sobre mim</h2>
      <article class="container">
        <div class="row">
          <figure class="col-xl-6 col-md-6 col-sm-12">
            <img src="assets/images/fernada.png" alt="" class="w-100">
          </figure>
          <div class="texts col-xl-6 col-md-6 col-sm-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reprehenderit maiores ut ad distinctio sunt labore eveniet delectus at asperiores esse impedit ipsa, culpa itaque deserunt non sint corrupti tempora.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reprehenderit maiores ut ad distinctio sunt labore eveniet delectus at asperiores esse impedit ipsa, culpa itaque deserunt non sint corrupti tempora.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reprehenderit maiores ut ad distinctio sunt labore eveniet delectus at asperiores esse impedit ipsa, culpa itaque deserunt non sint corrupti tempora.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reprehenderit maiores ut ad distinctio sunt labore eveniet delectus at asperiores esse impedit ipsa, culpa itaque deserunt non sint corrupti tempora.</p>
          </div>
        </article>
        </div>
    </section>

    <section id="products">
      <h2 class="text-center mb-4">Produtos</h2>
      <div class="container">
        <div class="row">          
          
            <?php
                $products = [
                    'Playston 5',
                    'Xbox One',
                    'Super Nintendo',
                    'Mega Drive',
                    'Master Sytem',
                    'Atari',
                    'Tele Jogo',
                ];             
            ?>

            <?php foreach($products as $product): ?>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="assets/images/playstion5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product; ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            <!-- <div class="col-6 col-md-4">
                <div class="card">
                <img src="assets/images/playstation.webp" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 id="product" class="card-title">Playstation 5</h5>
                    <p class="card-text">Some quick example text to build on the Playstation 5 and make up the bulk of the card's content.</p>
                    <a href="#" id="btn-pay" class="btn btn-primary">Comprar</a>
                </div>
                </div>
            </div> -->

        </div>
      </div>
    </section>

    <footer class="bg-dark py-4 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <address class="text-light">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo tenetur, et officia consequatur quibusdam quasi excepturi fugiat molestiae officiis quam dolores laudantium fugit iusto id! Aperiam quod ut voluptatem ipsa.</p>
            </address>
          </div>
        </div>
      </div>
    </footer>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>