<?php 
require_once('menus/admin.html');
?>
			

        <div id="page-wrapper" style="background-color: #222">

            <div class="container-fluid">

			
			
                <!-- Page Heading -->
                <div class="row">
                    
					 <div class="row" style="text-align:center;">
                    <div class="col-lg-10" style="color:white; background-color:#d9534f;">
                        <h1 class="page-header"  >
                             <small style="color:white;">Alterar meus dados</small>
                        </h1>
                       
                    
                    <div class="col-lg-6" style="text-align:center;">

                        <form method='post' action='salvar.php' enctype='multipart/form-data' >
						
						
						<div class="form-group">
                                <label>Nome:</label>
                                <input class="form-control" type='text' name='nome' placeholder='Digite seu nome'>
                         </div>
							 
                         <div class="form-group">
                                <label>Sobrenome:</label>
                                <input class="form-control" type='text' name='sobrenome' placeholder='Digite o seu sobrenome'>
                          </div>
						  
						    <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" type='email' name='email' placeholder='Digite o seu email'>
                          </div>
						  
						  <div class="form-group">
                                <label>Telefone:</label>
                                <input class="form-control" type='number' name='telefone' placeholder='Digite o seu telefone'>
                          </div>
							 
							 <div class="form-group">
                                <label>Endereço:</label>
                                <input class="form-control" type='text' name='endereco' placeholder='Digite o seu endereço'>
                          </div>
						  
						  <div class="form-group">
                                <label>CPF:</label>
                                <input class="form-control" type='number' name='cpf' placeholder='Digite seu cpf'>
                          </div>
							
						<div class="form-group">
                                <label>Senha</label>
                                <input class="form-control" type='password' name='senha' placeholder='Digite sua senha'>
                          </div>
						  
						
					</form>
					
					
					</div> 
					</div>
            <!-- /.container-fluid -->
					
					
					
                </div>
                <!-- /.row -->

                       
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
