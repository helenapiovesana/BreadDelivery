<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sushi Delivery</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/3-col-portfolio.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo2.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="view/login.php">Login</a>
                    </li>
                    <li>
                        <a href="view/lista_produtos.php">Produtos</a>
                    </li>
                    <li>
                        <a href="view/sobre.php">Sobre a Empresa</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/sushiindex.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Bem-vindo à nossa Loja Virtual!</h1>
                <p>Aqui você pode fazer seus pedidos, encomendar com antecedência, conhecer cada produto e como ele é feito! </p>
                <a class="btn btn-primary btn-lg" href="view/login.php">Iniciar as compras!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   Conheça alguns dos nossos produtos mais vendidos!!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Produto 1</h2>
                 <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/sushiindex.jpg" alt="">
				</div>
				
				
                <a class="btn btn-default" href="view/produtos.php?tipo='setar+vendido'">Eu quero!</a>
				
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Produto 2</h2>
                 <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/sushiindex.jpg" alt="">
				</div>
				
				
                <a class="btn btn-default" href="view/produtos.php?tipo='setar+vendido'">Eu quero!</a>
				
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Produto 3</h2>
                 <div class="col-md-8">
                <img class="img-responsive img-rounded" src="img/sushiindex.jpg" alt="">
				</div>
				
				
                <a class="btn btn-default" href="view/produtos.php?tipo='setar+vendido'">Eu quero!</a>
				
            </div>
        <!-- /.row -->
</div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Desenvolvido por Germano, Helena e Lucca, 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
