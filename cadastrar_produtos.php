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
                             <small style="color:white;">Cadastrar Produto</small>
                        </h1>
                       
                    
                    <div class="col-lg-6" style="text-align:center;">

                        <form method='post' action='salvar.php' enctype='multipart/form-data' >
						
						
						<div class="form-group">
                                <label>Nome:</label>
                                <input class="form-control" type='text' name='nome' placeholder='Digite seu nome'>
                         </div>
							 
                         <div class="form-group">
                                <label>Ingredientes:</label>
                                <input class="form-control" type='textarea' name='ingredientes' placeholder='Digite os ingredientes desse produto	'>
                          </div>
							 
						 <div class="form-group">
                                <label>Categoria:</label>
                                <select  class="form-control" name='categoria'>
                                    <option value=''></option>
                                    <option value='packs'>Packs</option>
                                    <option value='hotmakis'>Hot Makis</option>
                                    <option value='temakis'>Temakis</option>
                                    <option value='makis'>Makis/Uramakis</option>
                                    <option value= 'sashimis'>Sashimis</option>
                                    <option value ='niguiris'>Niguiris</option>
                                    <option value ='bebidas'>Bebidas</option>
                                    <option value ='sobremesas'>Sobremesas</option>
                                   
                                </select>
                            </div> 
							
							
							
						<div class="form-group">
                                <label>Preço(R$):</label>
                                <input class="form-control" type='number' name='preco' placeholder='Digite o preço desse produto'>
                          </div>
						  
						<div class="form-group">
                                <label>Foto:</label>
                                <input type="file">
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
