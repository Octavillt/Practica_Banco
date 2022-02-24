<?php 
/*$insert_persona = new Persona();
$insert_persona -> registraPersona();*/
$traer_cliente = Cliente::getCliente();
//print_r($traer_cliente);
?>

<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                              <?php 
                              //$upCliente = Persona::actualizarCliente();
                              $upCliente = new Cliente();
                              $upCliente -> actualizarCliente();     
                               ?>
                         </div>
                         <div class="text-center mt-2">
                              <h1>Actulizar Cliente</h1>
                         </div>
                         <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                           <div class="mb-3">
                             <label for="txtNombre" class="form-label">Nombre: </label>
                             <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                             value="<?= $traer_cliente['nombre']; ?> "> 
                        </div>
                        <div class="mb-3">
                         <label for="numTelefono" class="form-label">Numero Telefonico: </label>
                         <input type="number" class="form-control" id="numTelefono" name="numTelefono"
                         value="<?= $traer_cliente['telefono']; ?>">  
                    </div>
                    <div class="mb-3">
                         <label for="txtDireccion" class="form-label">Dirección: </label>
                         <input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
                         value="<?= $traer_cliente['direccion']; ?>">  
                    </div>
                    <div class="mb-3">
                         <label for="numCuenta" class="form-label">Numero de Cuenta: </label>
                         <input type="number" class="form-control" id="numCuenta" name="numCuenta"
                         value="<?= $traer_cliente['numcuenta']; ?>">   
                    </div>
                    <div class="mb-3">
                         <label for="numSaldo" class="form-label">Saldo Actual: </label>
                         <input type="number" class="form-control" id="numSaldo" name="numSaldo"
                         value="<?= $traer_cliente['saldo']; ?>">  
                    </div>
                    <hr>
                    <br>
                    <button type="submit" class="btn btn-success"> Actulizar</button>
               </form>

          </div>
     </div>
</div>
</main>
</body>