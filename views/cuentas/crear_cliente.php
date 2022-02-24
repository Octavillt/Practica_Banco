<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                              <?php 
                         /*$insert_persona = new Persona();
                         $insert_persona -> registraPersona();*/
                         $insert_cliente = Cliente::registraCliente();
                         echo $insert_cliente;
                         ?>
                    </div>
                    <div class="text-center mt-2">
                         <h1>Crear Cliente</h1>
                    </div>
                    <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                       <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre: </label>
                          <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre Completo">
                     </div>
                     <div class="mb-3">
                          <label for="numTelefono" class="form-label">Numero Telefonico: </label>
                          <input type="number" class="form-control" id="numTelefono" 
                          name="numTelefono" placeholder="Numero Telefonico">
                     </div>
                     <div class="mb-3">
                         <label for="txtDireccion" class="form-label">Dirección: </label>
                         <input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
                         placeholder="Dirección">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
               </form>

          </div>
     </div>
</div>
</main>
</body>