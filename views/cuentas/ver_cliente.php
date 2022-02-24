<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                              <?php 
                         /*$insert_persona = new Persona();
                         $insert_persona -> registraPersona();*/
                         $traer_cliente = Cliente::getCliente();
                         //print_r($traer_cliente);
                         ?>
                    </div>
                    <div class="text-center mt-2">
                         <h1><?= $traer_cliente['nombre']; ?></h1>
                    </div>
                    <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                       <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre: 
                             <strong> <?= $traer_cliente['nombre']; ?> </strong> </label>
                        </div>
                        <hr>
                        <div class="mb-3">
                          <label for="numTelefono" class="form-label">Numero Telefonico:
                              <strong> <?= $traer_cliente['telefono']; ?> </strong> </label>
                         </div>
                         <hr>
                         <div class="mb-3">
                              <label for="txtDireccion" class="form-label">Dirección: 
                                   <strong> <?= $traer_cliente['direccion']; ?> </strong></label>
                              </div>
                              <hr>
                              <div class="mb-3">
                                   <label for="txtDireccion" class="form-label">Numero de Cuenta: 
                                     <strong> <?= $traer_cliente['numcuenta']; ?> </strong> </label>
                                </div>
                                <hr>
                                <div class="mb-3">
                                   <label for="txtDireccion" class="form-label">Saldo Actual: 
                                    <strong> $<?= $traer_cliente['saldo']; ?> </strong> </label>
                               </div>
                               <hr>
                               <br>
                               <a href="<?= base_url ?>" class="btn btn-success"> Regresar</a>
                          </form>

                     </div>
                </div>
           </div>
      </main>
 </body>