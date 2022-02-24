
<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                              <?php 
                         /*$insert_persona = new Persona();
                         $insert_persona -> registraPersona();*/
                         $insert_cuenta = Cuenta::registraCuenta();
                         echo $insert_cuenta;
                         ?>
                    </div>
                    <div class="text-center mt-2">
                         <h1>Crear Cuenta</h1>
                    </div>
                    <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                       <div class="mb-3">
                          <label for="numCuenta" class="form-label">Numero de Cuenta: </label>
                          <input type="number" class="form-control" id="numCuenta" 
                          name="numCuenta" placeholder="Numero de Cuenta">
                     </div>
                     <div class="mb-3">
                          <label for="numSaldo" class="form-label">Saldo: </label>
                          <input type="number" class="form-control" id="numSaldo" 
                          name="numSaldo" placeholder="Saldo">
                     </div>
                     <div class="mb-3">
                         <?php 
                         $get_cliente = Cuenta::traerCliente();
                         ?>
                         <label for="txtCliente" class="form-label">Cliente: </label>
                         <select class="form-select" name="txtCliente" id="txtCliente">
                              <option selected>Selecciona un Cliente</option>
                              <?php foreach ($get_cliente as $select): ?>
                                   <option value="<?= $select['id_cliente']; ?>"><?= $select['nombre'];?></option>
                              <?php endforeach ?>
                         </select>

                    </div>
                    <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
               </form>

          </div>
     </div>
</div>
</main>
</body>

