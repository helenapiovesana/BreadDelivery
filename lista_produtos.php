<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sushi Delivery</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/small-business.css" rel="stylesheet">
    <link href="../css/3-col-portfolio.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo2.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="lista_produtos.php">Produtos</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre a Empresa</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style='text-align:center;'>

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Produtos
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='pack'">
                    <img class="img-responsive" src="../img/pack.jpg" alt="">
                </a>				
                <h3>
                    <a href="detalhe.php?tipo='pack'">Packs</a>
                </h3>
                <p>Se você não sabe quais produtos combinar, escolha um pack pronto!</p>
            </div>
			
			
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='hotmakis'">
                    <img class="img-responsive" src="../img/hotmaki.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='hotmakis'">Hot Makis</a>
                </h3>
                <p>Para você que quer experimentar essa delícia de sushi empanado.</p>
            </div>
			
			
			
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='temakis'">
                    <img class="img-responsive" src="../img/temaki.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='temakis'">Temakis</a>
                </h3>
                <p>Para você que gosta desse sushi em forma cônica envolvido pela alga Nori.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='uramakis'" >
                    <img class="img-responsive" src="../img/uramakis.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='uramakis'">Makis/Uramakis</a>
                </h3>
                <p> Para você que curte enrolados de alga cobertos com arroz e recheio de kani, fruta da estação, pepino, alface e maionese;
				</p>
            </div>
			
			
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='sashimis'">
                    <img class="img-responsive" src="../img/sashimi.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='sashimis'">Sashimis</a>
                </h3>
                <p>São fatias de peixe ou frutos do mar consumidos com molho shoyu (molho de soja) e wasabi (raiz forte).</p>
            </div>
			
			
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='niguiris'">
                    <img class="img-responsive" src="../img/niguiri.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='niguiris'">Niguiris</a>
                </h3>
                <p>A forma mais simples de Nigirizushi é um pequeno bloco de arroz de sushi com uma lasca de wasabi e uma camada fina de uma cobertura colocada sobre ele, possivelmente amarrada com uma tira fina denori.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='bebidas'">
                    <img class="img-responsive" src="../img/agua.jpg" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='bebidas.jpg">Bebidas</a>
                </h3>
                <p>Um bom acompanhamento.</p>
            </div>
			
            <div class="col-md-4 portfolio-item">
                <a href="detalhe.php?tipo='sobremesas'">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="detalhe.php?tipo='sobremesas'">Sobremesas</a>
                </h3>
                <p>Para quem não vive sem doce</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                  
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Desenvolvido por Germano, Helena e Lucca 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
